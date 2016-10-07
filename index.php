<?php
session_start();
/**
 * @author Tavi
 * @copyright 2013
 **/
 
 include('include/connection.php');
 include('include/vars.php');
 include('include/functions.php');
 include('include/cookies.php');
 include('include/header.php');
 //generateContent();
 
    $sql = "SELECT COUNT(*) FROM posts WHERE showpost=1";
    $res = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
    $r = mysql_fetch_row($res);
    $numrows = $r[0];
    
    $rowsperpage = 5;
    $totalpages = ceil($numrows / $rowsperpage);
    
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $currentpage = (int) $_GET['page'];
    } else {
        $currentpage = 1;
    }
    
    if ($currentpage > $totalpages) {
        $currentpage = $totalpages;
    } // end if
    if ($currentpage < 1) {
        $currentpage = 1;
    } // end if

    $offset = ($currentpage - 1) * $rowsperpage;
    
    $sql = "SELECT * FROM posts WHERE showpost=1 ORDER by pid DESC LIMIT $offset, $rowsperpage";
    $result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
    
    echo "<div id=\"posts\">";
    while ($list = mysql_fetch_assoc($result)) {
        // echo data
        echo "<div id=\"post_header\"><h2>" . formatBBcode($list['title']) . "</h2></div>" . PHP_EOL;
		echo "<div id=\"post_content\">" . "<p>" . formatBBcode($list['content']) . "</p></div>" . PHP_EOL;
        if(isset($_SESSION['account']))
        {
            echo "<a id=\"post_delete\" href=\"delete_post.php?pid=".$list['pid'] ."\" class=\"frontpage\">Sterge</a>" . PHP_EOL;
        }
		echo '<hr />' . PHP_EOL;
    } // end while
    
    $range = 3;
    
    if ($currentpage > 1) {
        echo " <a href='{$_SERVER['PHP_SELF']}?page=1'><<</a> " . PHP_EOL;
        $prevpage = $currentpage - 1;
        echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'><</a> " . PHP_EOL;
    } // end if 
    
    for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
        if (($x > 0) && ($x <= $totalpages)) {
            if ($x == $currentpage) {
                echo " [<b>$x</b>] " . PHP_EOL;
            } else {
                echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> " . PHP_EOL;
            } 
        } 
    }
          
    if ($currentpage != $totalpages) {
        $nextpage = $currentpage + 1;
        echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'>></a> " . PHP_EOL;
        echo " <a href='{$_SERVER['PHP_SELF']}?page=$totalpages'>>></a> " . PHP_EOL;
    }
    echo "</div>" . PHP_EOL;
 include('include/sidebar.php');
 include('include/footer.php');
 ?>