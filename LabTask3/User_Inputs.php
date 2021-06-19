<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <style>
        .error {color: #FF0000;}
        .font {font-family: 'Courier New', Courier, monospace; color: white;}
        .area {width: 370px;}
        .dob-cell {width: 50%;}
        body {background-color: #0E1113;}
        </style>
    </head>
    <body class="font">
        <?php
            $nameErr = $emailErr = $userErr = $passErr = $cpassErr = $genderErr = $dobErr ="";
            $name = $email = $user = $pass = $cpass = $gender = $dob ="";
            $message = '';  


            if(isset($_POST["submit"]))  
            {  
                if(empty($_POST["name"]))  
                {  
                    $nameErr = "Enter Name";  
                }
                else if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
                {
                    $nameErr = "Only letter and spcae alowed!";
                }
                else if(empty($_POST["email"]))  
                {  
                    $emailErr = "Enter an e-mail";  
                }
                else if(empty($_POST["user"]))  
                {  
                    $userErr = "Enter a username";  
                }  
                else if(empty($_POST["pass"]))  
                {  
                    $passErr = "Enter a password";  
                }
                else if(empty($_POST["cpass"]))  
                {  
                    $cpassErr = "Confirm password field cannot be empty";  
                } 
                else if(empty($_POST["gender"]))  
                {  
                    $genderErr = "Gender cannot be empty";  
                } 
                
                else  
                {  
                    if(file_exists('data.json'))  
                    {  
                        $current_data = file_get_contents('data.json');  
                        $array_data = json_decode($current_data, true);  
                        $extra = array(  
                            'name'               =>     $_POST['name'],  
                            'e-mail'          =>     $_POST["email"],  
                            'username'     =>     $_POST["user"],
                            'password'     =>     $_POST["pass"],  
                            'gender'     =>     $_POST["gender"],  
                            'dob'     =>     $_POST["dob"]  
                        );  
                        $array_data[] = $extra;  
                        $final_data = json_encode($array_data);  
                        if(file_put_contents('data.json', $final_data))  
                        {  
                            $message = "File Appended Success fully";  
                        }  
                    }  
                    else  
                    {  
                        $error = 'JSON File not exits';  
                    }  
                }  
            }  




            // if(isset($_POST["submit"])) {
            //     if(empty($_POST["name"])) {
            //         $nameErr = "You must have to filup the Name Box!";
            //     }
            //     if(str_word_count($_POST["name"]) <2) {
            //         $nameErr = "At least two words required!";
            //     }
            //     else{
            //        // $name = test_input($_POST["name"]);
            //         if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
            //             $nameErr = "Only letter and spcae alowed!";
            //         }
            //     }

            //     if(empty($_POST["email"])) {
            //         $emailErr = "Email box cannot be empty!";
            //     }
            //     else{
            //         //$email = test_input($_POST["email"]);
            //         // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //         //     $emailErr = "Invalid email format!!";
            //         //     $email = "";
            //         // }
            //     }

            //     if(empty($_POST["user"])) {
            //         $userErr = "Please your user name(important)!";
            //     }
            //     else{
            //       //  $user = test_input($_POST["user"]);
            //     }

            //     if(empty($_POST["pass"])) {
            //         $passErr = "Enter any password!";
            //     }
            //     if(strlen($_POST["pass"]) <8) {
            //         $passErr = "password must contain at least 8 or more characters!";
            //     }
            //     else{
            //        // $pass = test_input($_POST["pass"]);
            //         if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9!@#$%]$/',$pass)) {
            //             $passErr = "Password must follow this format [0-9A-Za-z!@#$%]";
            //             $pass = "";
            //         }
            //     }

            //     if(empty($_POST["cpass"])) {
            //         $cpassErr = "Enter confirm password!";
            //     } 
            //     if($_POST["pass"] === $_POST["cpass"]) {
            //     }
            //     else {
            //         $cpassErr = "Confirm password dose not mached!";
            //     }

            //     if(empty($_POST["gender"])) {
            //         $genderErr = "Please select your gender!";
            //     }
            //     else{
            //        // $gender = test_input($_POST["gender"]);
            //     }

            //     if(empty($_POST["dob"])) {
            //         $dobErr = "Date of birth is required!";
            //     }
            //     else{
            //         $dob = $_POST["dob"];
            //         $dobErr = "";
            //     }

            //     if(file_exists('data.json'))  
            //     {  
            //         $current_data = file_get_contents('data.json');  
            //         $array_data = json_decode($current_data, true);  
            //         $extra = array(  
            //             'name'               =>     $_POST['name'],  
            //             'e-mail'           =>     $_POST["email"],  
            //             'username'       =>     $_POST["user"],
            //             'password'     =>     $_POST["pass"],  
            //             //'gender'     =>     $_POST["gender"],  
            //             'dob'      =>     $_POST["dob"]  
            //         );  
            //         $array_data[] = $extra;  
            //         $final_data = json_encode($array_data);  
            //         if(file_put_contents('data.json', $final_data))  
            //         {  
            //             $message = "File Appended Success fully";  
            //         }  
            //     }  
            //     else  
            //     {  
            //         $message = 'JSON File not exits';  
            //     }  
            // }  
        ?>
        <form method="post" class="area">
             <fieldset>
                <legend>REGISTRATION</legend>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                        <span class="error">* <?php echo $nameErr; ?></span>
                        </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </div>
                    <div>
                        <label for="user">User Name:</label>
                        <input type="text" id="user" name="user" value="<?php echo $user; ?>">
                        <span class="error">* <?php echo $userErr; ?></span>
                    </div>
                    <div>
                        <label for="pass">Password:</label>
                        <input type="text" id="pass" name="pass" value="<?php echo $pass; ?>">
                        <span class="error">* <?php echo $passErr; ?></span>
                    </div>
                    <div>
                        <label for="cpass">Confirm Pass:</label>
                        <input type="text" id="cpass" name="cpass" value="<?php echo $cpass; ?>">
                        <span class="error">* <?php echo $cpassErr; ?></span>
                    </div>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Male") echo "checked";?> value="Male">Male
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Female") echo "checked";?> value="Female">Female
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Other") echo "checked";?> value="Other">Other  
                        <span class="error">* <?php echo $genderErr;?></span>
                    </fieldset>
                    <fieldset>
                         <legend>Date of Birth</legend>
                        <input type="date" date_format="" id="dob" name="dob" min="1953-01-01" max="1998-12-31" class="dob-cell" value="<?php echo $dob; ?>">
                        <span class="error">* <?php echo $dobErr; ?></span>
                    </fieldset> <br>
                    <input type="submit" name="submit" value="Submit" style="font-size: 15px;">
                <input type="submit" name="reset" value="Reset" style="font-size: 15px;">
                <?php  
                if(isset($message))  
                {  
                    echo $message;  
                }  
            ?>
            </fieldset>
        </form>      
    </body>
</html>