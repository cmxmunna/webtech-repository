<?php
    $userErr = $passErr ="";
    $user = $pass ="";
    $message = "";  

    if(isset($_POST["submit"]))  
    {  
        if(empty($_POST["user"]))  
        {  
            $userErr = "User Name Required!";  
        }
        
        if(empty($_POST["pass"]))  
        {  
            $passErr = "Password Required!";  
        }       
        else  
        {  
            $message = "<strong>Congratulations! Login Success</strong>";
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
        body {background-color: #202020;}
    </style>
</head>
<body class="font">
        <form method="post" action="">
            <fieldset>
                <legend><strong>LOGIN</strong></legend>
                <table align="center">
                    <tr>
                        <td><label for="user">User Name &nbsp;&nbsp;&nbsp;</label></td>
                        <td>:<input type="text" id="user" name="user" placeholder="Type User Name">
                        <span class="error">* <?php echo $userErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>:<input type="password" id="pass" name="pass" placeholder="Type Password">
                        <span class="error">* <?php echo $passErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="remember" value="remember">Remember Me</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit" style="font-size: 15px;"> <a href="#">Forgot Password?</a></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php  
                                if(isset($message))  
                                {
                                    echo "<br>" .$message;

                                } 
                            ?>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>      
    </body>
</html>