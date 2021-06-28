<?php
    $currPassErr = $newPassErr = $cnewPassErr ="";
    $newPass = $cnewPass ="";
    $message = ''; 

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

    if(isset($_POST["submit"]))  
    {  
        if(empty($_POST["currPass"]))  
        {  
            $currPassErr = "Current Password Required!";  
        } 
        else if($_POST['currPass'] !== $Pass)
        {
            $currPassErr = "Current password isn't maching!";
        }
        else
        {
            if(empty($_POST["newPass"]))
            {
                $newPassErr ="New Password Required!";
            }
            else if($_SESSION['pass'] == $_POST["newPass"]) 
            {
                $newPassErr = "New Password cannot be the same as current Password!";
            }

            $newPass= $_POST['newPass'];
            if(empty($_POST["newPass"]))
            {
                $newPassErr ="New Password Required!";
            }
            else if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$newPass))
            {
                $newPassErr ="Password must contain Alphabets,Numbers,Special Charecter!";
            }
        
            if(empty($_POST["cnewPass"])) 
            {
                $cnewPassErr = "Retype New password required!";
            } 
            else if($_POST["newPass"] !== $_POST["cnewPass"]) 
            {
                $cnewPassErr = "Confirm password dose not mached with new Password!";
            }
            else
            {
                $message = "<strong>Password Changed Successfuly!</strong>";
            }
        }
    }       
?>