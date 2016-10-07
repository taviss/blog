<?php

/**
 * @author Tavi
 * @copyright 2013
 */
global $conn;
 
function deleteContent($post)
{
    $result = mysql_query("DELETE FROM posts WHERE pid=" . $post . "");
    if(false === $result)
    {
        echo mysql_error();
    }
}

function formatBBcode($str) {
  // characters that represents bbcode, and smiles
  $bbcode = array(
  '/\[b\](.*?)\[\/b\]/is', '/\[i\](.*?)\[\/i\]/is', '/\[u\](.*?)\[\/u\]/is',      // for format text
  '/\[url\=(.*?)\](.*?)\[\/url\]/is',                           // for URL
  '/\[color\=#([0-9a-f]{3,6})\](.*?)\[\/color\]/is',            // for color
  // smiles
  '/:\)/i', '/:\(/i', '/:P/i', '/:D/i', '/:S/i', '/:O/i', '/:=\)/i', '/:\|H/i', '/:X/i', '/:\-\*/i');

  // HTML code that replace bbcode, and smiles characters
  $htmlcode = array(
  '<b>$1</b>', '<i>$1</i>', '<u>$1</u>',                   // format text
  '<a target="_blank" href="$1" title="$2">$2</a>',        // URL
  '<span style="color:#$1;">$2</span>',                    // color
  // smiles (from "icos/" directory)
  '<img src="include/bbcode/icos/0.gif" alt=":)" style="border:none;" />',
  '<img src="include/bbcode/icos/1.gif" alt=":(" style="border:none;" />',
  '<img src="include/bbcode/icos/2.gif" alt=":P" style="border:none;" />',
  '<img src="include/bbcode/icos/3.gif" alt=":D" style="border:none;" />',
  '<img src="include/bbcode/icos/4.gif" alt=":S" style="border:none;" />',
  '<img src="include/bbcode/icos/5.gif" alt=":O" style="border:none;" />',
  '<img src="include/bbcode/icos/6.gif" alt=":=)" style="border:none;" />',
  '<img src="include/bbcode/icos/7.gif" alt=":|H" style="border:none;" />',
  '<img src="include/bbcode/icos/8.gif" alt=":X" style="border:none;" />',
  '<img src="include/bbcode/icos/9.gif" alt=":-*" style="border:none;" />'
  );

  $str = preg_replace($bbcode, $htmlcode, $str);   // perform replaceament

  return nl2br($str);      // nl2br() to replace new line characters with <br>
}

function generateContent()
{   
    /* Sters!!!!!!!!!!!!!!
	$result = mysql_query("SELECT * FROM posts WHERE showpost=1 ORDER BY pid DESC");
    if(false === $result)
    {
        echo mysql_error();
    }
    if(mysql_num_rows($result))
    {
       echo "<div id=\"posts\">";
	   while($row = mysql_fetch_array($result))
	   {
		echo "<div id=\"post_header\"><h2>" . $row['title'] . "</h2></div>" . PHP_EOL;
		echo "<div id=\"post_content\">" . "<p>" . $row['content'] . "</p></div>" . PHP_EOL;
        if(isset($_SESSION['account']))
        {
            echo "<a href=\"delete_post.php?pid=".$row['pid'] ."\" class=\"frontpage\">Delete</a>" . PHP_EOL;
        }
		echo '<hr />' . PHP_EOL;
	   }
       echo "</div>" . PHP_EOL;
    }*/
}

function CheckLogged()
{
    if(!isset($_SESSION['account']))
    {
        return false;
    }
    return true;
}

function CheckUser($user, $password){


    $user = mysql_real_escape_string($user);

    /* Verifica daca numele este in baza de date */

    $q = "select password from users where user = '".$user."'";

    $result = mysql_query($q);

    if(!$result || (mysql_numrows($result) < 1))
    {
      return 0; //Indica nume neconfirmat
    }



    /* Gaseste parola asociata numeluiRetrieve password from result, strip slashes */

    $dbarray = mysql_fetch_array($result);

    $dbarray['password']  = stripslashes($dbarray['password']);

    $parola = mysql_real_escape_string($password);



    /* Verifica daca parola scrisa este aceeasi cu cea gasita in baza de date */

    if($parola == $dbarray['password'])
    {
        return 1; //succes! nume si parola confirmate
    }
    else
    {
      return 2; //Indica parola neconfirmata
    }    

}


//Anti SQL Injection

$ip = $_SERVER['REMOTE_ADDR'];  
$time = date("l dS of F Y h:i:s A");  
$script = $_SERVER[PATH_TRANSLATED];  
$fp = fopen ("[WEB]SQL_Injection.txt", "a+");  
$sql_inject_1 = array(";","'","%",'"'); #Whoth need replace  
$sql_inject_2 = array("", "","","&quot;"); #To wont replace  
$GET_KEY = array_keys($_GET); #array keys from $_GET  
$POST_KEY = array_keys($_POST); #array keys from $_POST  
$COOKIE_KEY = array_keys($_COOKIE); #array keys from $_COOKIE  
/*begin clear $_GET */  
for($i=0;$i<count($GET_KEY);$i++)  
{  
$real_get[$i] = $_GET[$GET_KEY[$i]];  
$_GET[$GET_KEY[$i]] = str_replace($sql_inject_1, $sql_inject_2, HtmlSpecialChars($_GET[$GET_KEY[$i]]));  
if($real_get[$i] != $_GET[$GET_KEY[$i]])  
{  
fwrite ($fp, "IP: $ip\r\n");  
fwrite ($fp, "Method: GET\r\n");  
fwrite ($fp, "Value: $real_get[$i]\r\n");  
fwrite ($fp, "Script: $script\r\n");  
fwrite ($fp, "Time: $time\r\n");  
fwrite ($fp, "==================================\r\n");  
}  
}  
/*end clear $_GET */  
/*begin clear $_POST */  
for($i=0;$i<count($POST_KEY);$i++)  
{  
$real_post[$i] = $_POST[$POST_KEY[$i]];  
$_POST[$POST_KEY[$i]] = str_replace($sql_inject_1, $sql_inject_2, HtmlSpecialChars($_POST[$POST_KEY[$i]]));  
if($real_post[$i] != $_POST[$POST_KEY[$i]])  
{  
fwrite ($fp, "IP: $ip\r\n");  
fwrite ($fp, "Method: POST\r\n");  
fwrite ($fp, "Value: $real_post[$i]\r\n");  
fwrite ($fp, "Script: $script\r\n");  
fwrite ($fp, "Time: $time\r\n");  
fwrite ($fp, "==================================\r\n");  
}  
}  
/*end clear $_POST */  
/*begin clear $_COOKIE */  
for($i=0;$i<count($COOKIE_KEY);$i++)  
{  
$real_cookie[$i] = $_COOKIE[$COOKIE_KEY[$i]];  
$_COOKIE[$COOKIE_KEY[$i]] = str_replace($sql_inject_1, $sql_inject_2, HtmlSpecialChars($_COOKIE[$COOKIE_KEY[$i]]));  
if($real_cookie[$i] != $_COOKIE[$COOKIE_KEY[$i]])  
{  
fwrite ($fp, "IP: $ip\r\n");  
fwrite ($fp, "Method: COOKIE\r\n");  
fwrite ($fp, "Value: $real_cookie[$i]\r\n");  
fwrite ($fp, "Script: $script\r\n");  
fwrite ($fp, "Time: $time\r\n");  
fwrite ($fp, "==================================\r\n");  
}  
}  

/*end clear $_COOKIE */  
fclose ($fp);  

?>