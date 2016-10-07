<?php
session_start();
if(!isset($_SESSION['account'])) { echo "nuba"; }//header("Location: index.php"); }

/**
 * @author Tavi
 * @copyright 2013
 */

    setcookie("account", "", time()-60*60*24*100, "/");
    setcookie("pass", "", time()-60*60*24*100, "/");
    unset($_SESSION['account']);
    unset($_SESSION['pass']);
    $id = session_id();
    $_SESSION = array(); // reseteaza
    session_destroy();   // sterge sesiunea.
    header("Location: index.php");  
    die();
?>