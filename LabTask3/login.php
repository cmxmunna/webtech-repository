<?php
    $userErr = $passErr ="";
    $user = $pass ="";
    $message = '';  

    if(isset($_POST["submit"]))  
    {  
        if(empty($_POST["user"]))  
        {  
            $userErr = "Enter User Name!";  
        }
        else if(empty($_POST["pass"]))  
        {  
            $passErr = "Enter your password";  
        }       
        else  
        {  
            $message = "<strong>Congratulations! Login Success...</strong>";
        }  
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {color: #FF0000;}
        .font {font-family: 'Courier New', Courier, monospace; color: white;}
        .area {width: 370px;}
        .dob-cell {width: 50%;}
        body {background-color: #202020;}
    </style>
</head>
<body class="font">
        <form method="post" class="area">
            <fieldset>
                <legend><strong>LOGIN</strong></legend>
                    <div>
                        <label for="user">User Name:</label>
                        <input type="text" id="user" name="user" placeholder="Type User Name" value="<?php echo $user; ?>">
                        <span class="error">* <?php echo $userErr; ?></span>
                        </div>
                    <div style="margin-top: 4px">
                        <label for="pass">Password:&nbsp;</label>
                        <input type="text" id="pass" name="pass" placeholder="Type Password" value="<?php echo $pass; ?>">
                        <span class="error">* <?php echo $passErr; ?></span>
                    </div> 
                
                <br>
                <input type="checkbox" name="remember" value="remember">Remember Me
                <?php  
                    if(isset($message))  
                    {
                        echo "<br>" .$message;

                    } 
                ?> 
                <br> <br>
                <input type="submit" name="submit" value="Submit" style="font-size: 15px;">
                <a href="#">Forgot Password?</a>
                 
            
            </fieldset>
        </form>      
    </body>
</html>