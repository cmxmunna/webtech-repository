<?php
    include('session.php');
    require_once '../model/model.php';
    
    $nameErr = $emailErr = $userErr = $phoneErr = $addressErr = $typeErr = $genderErr = $dobErr ="";
    $name = $email = $user = $phone = $address = $type = $gender = $dob ="";
    $message = '';
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["phone"]) ||
          empty($_POST["address"]) || empty($_POST["dob"]) || !isset($_POST["gender"]) || str_word_count($_POST["name"]) <2 || 
          !preg_match("/^[a-zA-Z ]*$/",$name) || !preg_match("/^[a-zA-Z0-9_ .-]*$/",$user))
        {
            $error = "Fill up all field first!";
            if(empty($_POST["name"]))  
            {  
                $nameErr = "Name is Required!";  
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
                    $emailErr = "Your Email is Invalid!!";
                }
                // $email= $_POST['email'];
                // if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,25})$/i",$email)) 
                // {
                //     $emailErr = "Your Email is Invalid!!";
                // }
            }
            
            if(empty($_POST["username"]))  
            {  
                $userErr = "Username is Required!";
            }
            else
            {
                $user = $_POST['username'];
                if(!preg_match("/^[a-zA-Z0-9_ .-]*$/",$user))
                {
                    $userErr = "User Name can contain alpha numeric characters, period, dash or underscore only!";
                }
            }

            if(empty($_POST["phone"]))  
            {  
                $phoneErr = "Phone Number Required!";  
            }

            if(empty($_POST["address"]))  
            {  
                $addressErr = "Write your address where you want internet connection!!";  
            }

            if(empty($_POST["usertype"]))  
            {  
                $typeErr = "User Type Required!";  
            }

            if(!isset($_POST["gender"]))  
            {  
                $genderErr = "Select your gender(Required)!";  
            } 

            if(empty($_POST["dob"]))  
            {  
                $dobErr = "Pick Your Birthday Date!";  
            }
        }
        else
        {
            if(isset($_POST['update'])) 
            {
                $data['name']     = $_POST['name'];
                $data['email']    = $_POST['email'];
                $data['username'] = $_POST['username'];
                $data['address']  = $_POST['address'];
                $data['phone']    = $_POST['phone'];
                $data['gender']   = $_POST['gender'];
                $data['dob']      = $_POST['dob'];

                if (updateprofile($_POST['id'], $data)) 
                {
                    $message = "<i>Your Data Updated Successfully</i>";
                    // header("location: ../view/profile.php");
                }
            } 
            else 
            {
                echo 'You are not allowed to access this page!';
            }
        }
    } 
?>