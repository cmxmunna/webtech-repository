<?php
    require_once '../model/model.php';
    $nameErr = $emailErr = $userErr = $passErr = $phoneErr = $addressErr = $typeErr = $genderErr = $dobErr ="";
    $name = $email = $user = $pass = $phone = $address = $type = $gender = $dob ="";
    $message = '';
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["phone"]) ||
          empty($_POST["address"]) || empty($_POST["usertype"]) || empty($_POST["dob"]) || !isset($_POST["gender"]) || str_word_count($_POST["name"]) <2 || 
          !preg_match("/^[a-zA-Z ]*$/",$name) || !preg_match("/^[a-zA-Z0-9_ .-]*$/",$user) || !preg_match('/^[0-9A-Za-z!@#$%]*$/',$pass))
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
            
            if(empty($_POST["password"]))  
            {  
                $passErr = "Password is Required!";  
            }
            else 
            {
                $pass = $_POST['password'];
                if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$pass) || strlen($pass) <8)
                {
                    $passErr = "Password must contain Alphabets,Numbers,Special Charecter!";
                }
            }
        

            if(empty($_POST["phone"]))  
            {  
                $phoneErr = "Phone Number Required!";  
            }

            if(empty($_POST["address"]))  
            {  
                $addressErr = "Address Required!!";  
            }

            if(empty($_POST["usertype"]))  
            {  
                $typeErr = "User Type Required!";  
            }

            if(!isset($_POST["gender"]))  
            {  
                $genderErr = "Gender(Required)!";  
            } 

            if(empty($_POST["dob"]))  
            {  
                $dobErr = "Pick Birthday Date!";  
            }
        }
        else
        {
            if(isset($_POST['adduser'])) 
            {
                $data['name']     = $_POST['name'];
                $data['email']    = $_POST['email'];
                $data['username'] = $_POST['username'];
                $data['password'] = $_POST['password'];   //password as a plain Text
                $data['phone']    = $_POST['phone'];
                $data['address']  = $_POST['address'];
                $data['usertype'] = $_POST['usertype'];
                $data['gender']   = $_POST['gender'];
                $data['dob']      = $_POST['dob'];
                // $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
                $data['image']    = basename($_FILES["image"]["name"]);
                $target_dir = "../resources/img/user_img/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
                {
                    $message = "Photo Uploaded Successful";
                } 
                else
                {
                    $error = "Sorry, there was an error uploading your file.";
                }

                if (adduser($data)) 
                {
                    $message = "<i>User Added Successfully</i>";
                }
            } 
        }
    } 
?>