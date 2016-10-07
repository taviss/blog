<?php

/**
 * @author Tavi
 * @copyright 2013
 */
    include('include/connection.php');
    include('include/functions.php');

    $post = $_GET['pid'];
    deleteContent($post);
    header('Location: index.php');

?>