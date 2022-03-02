<?php
session_start();

if (isset($_SESSION['user_auth'])) {
    unset($_SESSION['user_auth']);
    unset($_SESSION['user_name']);
    }

    session_destroy();
    header("Location: index.php");
    die();
    ?> 
    
