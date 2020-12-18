<?php session_start();
include('cfg/db.php'); 

    session_unset();
    session_destroy();

    header('location: login.php');
    
?>