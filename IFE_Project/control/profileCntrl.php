<?php
    session_start();

    $Name = '';
    $Email = '';
    $User = '';
    $Pass = '';
    $Gender = '';
    $DOB = '';

    if(isset($_SESSION['name']))
    {
        $Name = $_SESSION['name'];
    }
    if(isset($_SESSION['email']))
    {
        $Email = $_SESSION['email'];
    }
    if(isset($_SESSION['user']))
    {
        $User = $_SESSION['user'];
    }
    if(isset($_SESSION['pass']))
    {
        $Pass = $_SESSION['pass'];
    }
    if(isset($_SESSION['gender']))
    {
        $Gender = $_SESSION['gender'];
    }
    if(isset($_SESSION['dob']))
    {
        $DOB = $_SESSION['dob'];
    } 
    else
    {
        header("location: ../view/login.php");
    }
?>