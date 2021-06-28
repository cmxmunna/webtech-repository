<?php
    $nameErr = $emailErr = $genderErr = $dobErr ="";
    $name = $email = $gender = $dob ="";
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

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["dob"]) || !isset($_POST["gender"]))
        {
            $message = "Fill up all filed first!";
            if(empty($_POST["name"]))  
            {  
                $nameErr = "Name is required!";  
            }
            else if(str_word_count($_POST["name"]) <2)
            {
                $nameErr = "Name can not contain less then two wards!";
            }
            else
            {   
                $name = $_POST['name'];
                if(!preg_match("/^[a-zA-Z ]*$/",$name))
                {
                    $nameErr = "Only letter and spcae alowed!";
                }
            }

            if (empty($_POST["email"])) 
            {
                $emailErr = "Email is required";
            } 
            else 
            {   
                $email= $_POST['email'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $emailErr = "Invalid email format";
                }
            }
            
            if(empty($_POST["dob"]))  
            {  
                $dobErr = "Pick Your Birthday Date!";  
            }

            if(!isset($_POST["gender"]))  
            {  
                $genderErr = "Select your gender(required)!";  
            } 
        }
        else
        {
            $message = "<i>Profile Dada Saved Successfully</i>";
        }
    } 
?>