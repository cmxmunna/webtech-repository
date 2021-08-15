<?php 
    session_start();

    $user_id = '';
    $Name = '';
    $Email = '';
    $User = '';
    $Pass = '';
    $Phone = '';
    $Address = '';
    $Type = '';
    $Gender = '';
    $DOB = '';
    $Image = '';

    if(isset($_SESSION['user_id']))
    {
        $user_id = $_SESSION['user_id'];
    }
    if(isset($_SESSION['name']))
    {
        $Name = $_SESSION['name'];
    }
    if(isset($_SESSION['email']))
    {
        $Email = $_SESSION['email'];
    }
    if(isset($_SESSION['username']))
    {
        $User = $_SESSION['username'];
    }
    if(isset($_SESSION['password']))
    {
        $Pass = $_SESSION['password'];
    }
    if(isset($_SESSION['phone']))
    {
        $Phone = $_SESSION['phone'];
    }
    if(isset($_SESSION['address']))
    {
        $Address = $_SESSION['address'];
    }
    if(isset($_SESSION['usertype']))
    {
        $Type = $_SESSION['usertype'];
    }
    if(isset($_SESSION['gender']))
    {
        $Gender = $_SESSION['gender'];
    }
    if(isset($_SESSION['image']))
    {
        $Image = $_SESSION['image'];
    }
    if(isset($_SESSION['dob']))
    {
        $DOB = $_SESSION['dob'];
    }
    else
    {
        header("location: ../user_view/userlogin.php");
    }
?>