<?php

/**
 * @author Tavi
 * @copyright 2013
 */

    $nume = $_COOKIE['account'];
    $parola = $_COOKIE['pass'];

    if(isset($parola) && isset($nume)) 
    {

    $parola = mysql_real_escape_string($parola);
    $nume = mysql_real_escape_string($nume);
    $bun = mysql_fetch_array(mysql_query("SELECT COUNT(*) from users where password='".$parola."' and user='".$nume."'"));

    if($bun[0]>0)
    {
	   $_SESSION['account'] = $nume;
	   $_SESSION['pass'] = $parola;
	}
    else
    {
        setcookie("account", "", time()-60*60*24*100);
        setcookie("pass", "", time()-60*60*24*100);
	}

    }

?>