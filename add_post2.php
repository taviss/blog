<?php

    include('include/connection.php');

    if(!$_POST['post_text'] || !$_POST['title'])
    {
        header("Location: add_post.php?notok=1");
        die();
    }
    
    $q = "INSERT INTO posts(title, content, showpost) VALUES('" . $_POST['title'] . "', '" . $_POST['post_text'] . "', 1)";
    $result = mysql_query($q);
    if($result)
    {
        header('Location: add_post.php?notok=2');
    }
    else
    {
        header('Location: add_post.php?notok=1');
    }
?>