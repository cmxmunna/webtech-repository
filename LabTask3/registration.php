<?php
    $nameErr = $emailErr = $userErr = $passErr = $cpassErr = $genderErr = $dobErr ="";
    $name = $email = $user = $pass = $cpass = $gender = $dob ="";
    $message = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
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
            if(!preg_match("/^[a-zA-Z-\s]*$/",$name))
            {
                $nameErr = "Only letter and spcae alowed!";
            }
        }

        if(empty($_POST["email"]))  
        {  
            $emailErr = "E-mail is required!";  
        }
        // else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) 
        // {
        //     $emailErr = "Invalid email format";
        // }
        
        if(empty($_POST["user"]))  
        {  
            $userErr = "Username is required!";
        }
         
        if(empty($_POST["pass"]))  
        {  
            $passErr = "Password is required!";  
        }
        // else if(preg_match('/^[0-9A-Za-z!@#$%]*$/',$pass) || strlen($pass) <8)
        // {
        //     $passErr = "Password must contain Alphabets,Numbers,Special Charecter!";
        // }
        
        if(empty($_POST["cpass"]))  
        {  
            $cpassErr = "Confirm password is required!";  
        } 
        else if($_POST["pass"] !== $_POST["cpass"]) 
        {
            $cpassErr = "Confirm Password isn't match!";
        }

        if(empty($_POST["gender"]))  
        {  
            $genderErr = "Select you gender(required)!";  
        } 

        if(empty($_POST["dob"]))  
        {  
            $dobErr = "Pick Your Birthday Date!";  
        } 

        
                
        if(file_exists('data.json'))  
        {  
            $current_data = file_get_contents('data.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                'name'               =>     $_POST['name'],  
                'e-mail'           =>     $_POST["email"],  
                'username'       =>     $_POST["user"],
                'password'     =>     $_POST["pass"],  
                'gender'     =>     $_POST["gender"],  
                'dob'      =>     $_POST["dob"]  
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
            $error = "JSON File not exits";  
        }  
         
    }  
?>
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
        body {background-color: #202020;}
        </style>
    </head>
    <body class="font">
        <form method="post" action="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>:<input type="text" id="name" name="name" value="<?php echo $name; ?>">
                        <span class="error">* <?php echo $nameErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:<input type="text" id="email" name="email" value="<?php echo $email; ?>">
                        <span class="error">* <?php echo $emailErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="user">User Name</label></td>
                        <td>:<input type="text" id="user" name="user" value="<?php echo $user; ?>">
                        <span class="error">* <?php echo $userErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>:<input type="text" id="pass" name="pass" value="<?php echo $pass; ?>">
                        <span class="error">* <?php echo $passErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cpass">Confirm Password</label></td>
                        <td>:<input type="text" id="cpass" name="cpass" value="<?php echo $cpass; ?>">
                        <span class="error">* <?php echo $cpassErr; ?></span></td>
                    </tr>
                </table>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Male") echo "checked";?> value="Male">Male
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Female") echo "checked";?> value="Female">Female
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Other") echo "checked";?> value="Other">Other  
                        <span class="error">* <?php echo $genderErr;?></span>
                    </fieldset>
                    <fieldset>
                         <legend>Date of Birth</legend>
                        <input type="date" date_format="" id="dob" name="dob" min="1953-01-01" max="1998-12-31 value="<?php echo $dob; ?>">
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