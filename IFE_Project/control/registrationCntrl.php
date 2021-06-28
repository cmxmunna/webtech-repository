<?php
    $nameErr = $emailErr = $userErr = $passErr = $cpassErr = $genderErr = $dobErr ="";
    $name = $email = $user = $pass = $cpass = $gender = $dob ="";
    $message = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["user"]) || empty($_POST["pass"]) || empty($_POST["cpass"]) || empty($_POST["dob"]) || !isset($_POST["gender"]))
        {
            $message = "Fill up all field first!";
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
                    $emailErr = "Your Email is Invalid!!";
                }
            }
            
            if(empty($_POST["user"]))  
            {  
                $userErr = "Username is required!";
            }
            
            if(empty($_POST["pass"]))  
            {  
                $passErr = "Password is required!";  
            }
            else 
            {
                $pass = $_POST['pass'];
                if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$pass) || strlen($pass) <8)
                {
                    $passErr = "Password must contain Alphabets,Numbers,Special Charecter!";
                }
            }
            
            if(empty($_POST["cpass"]))  
            {  
                $cpassErr = "Confirm password is required!";  
            } 
            else if($_POST["pass"] !== $_POST["cpass"]) 
            {
                $cpassErr = "Confirm Password isn't matching!";
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
            if(file_exists('../resources/files/data.json'))  
            {  
                $formdata = array(
                'name'               =>     $_POST['name'],  
                'e-mail'           =>     $_POST["email"],  
                'username'       =>     $_POST["user"],
                'password'     =>     $_POST["pass"],  
                'gender'     =>     $_POST["gender"],  
                'dob'      =>     $_POST["dob"] 
                );
                $current_data = file_get_contents('../resources/files/data.json');
                $tempJSONdata = json_decode($current_data, true);
                $tempJSONdata[] = $formdata;
                $final_data = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                
                if(file_put_contents("../resources/files/data.json", $final_data))
                {
                    $message = "<i>Registration Dada Saved Successfully</i>";
                } 
                else
                {
                    $message = "<i>No Data Saved!, Try Again</i>";
                }
            }  
            else  
            {  
                $message = "JSON File not exits";  
            } 
        }
    } 
?>