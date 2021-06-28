<?php
    session_start();

    $Name = '';
    $User = '';
    if(isset($_SESSION['name']))
    {
        $Name = $_SESSION['name'];
    }
    if(isset($_SESSION['user']))
    {
        $User = $_SESSION['user'];
    }
    else
    {
        header("location: ../view/login.php");
    }
?>