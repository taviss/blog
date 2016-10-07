<?php

/**
 * @author Tavi
 * @copyright 2013
 */
 

$AdresaBazaDate = "localhost";
$UtilizatorBazaDate = "root";
$ParolaBazaDate = "#######"; //Am sters-o, puneti alta parola
$NumeBazaDate = "blog";

$conn = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate,$ParolaBazaDate);
$db = mysql_select_db($NumeBazaDate);

if(mysql_errno())
{
    die('Eroare la conecxiunea cu baza de date');
}

?>