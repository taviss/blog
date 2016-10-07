<?php
session_start();
include('include/connection.php');
include('include/functions.php');

/**
 * @author Tavi
 * @copyright 2013
 */
 
    if(!$_POST['user'] || !$_POST['password'])
    {
        header("Location: login.php");
        die();
    }
    
    $result = CheckUser($_POST['user'], $_POST['password']);
    
    if($result == 0)
    {
        header("Location: login.php");  
        die();
    }
    else if($result == 2)
    {
        header("Location: login.php");  
        die();
    }
    
    $user = mysql_real_escape_string($_POST['user']);
    $parola = mysql_real_escape_string($_POST['password']);
    
    $_SESSION['account'] = $user;
    $_SESSION['pass'] = $parola;
    
    setcookie("account", $user, time()+60*60*24*100);
    setcookie("pass", $parola, time()+60*60*24*100);
    
    header("Location: index.php");  
    die();
   
?>