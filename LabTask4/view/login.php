<?php include "../control/loginCntrl.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFE Login</title>
    <style>
        body {margin: 0; background-color: #4a4a4a; font-family: 'Courier New', Courier, monospace; color: white;}
        a {color: darkcyan; text-shadow: 2px 2px 4px #000000; text-decoration: none;}
        .error {color: #FF0000;}
        .footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: #333; color: white; text-align: center;}
        .header {overflow: hidden; background-color: #333;}
        .header a {float: left; display: block; color: cyan; text-align: center; padding: 14px 16px; margin-top: 4px; text-decoration: none;}
        .header a.logo img {width: auto; height: auto; margin-top: -20px; margin-left: -20px; margin-bottom: -20px; margin-right: -20px;}
        .header-right {float: right;}
        .header a:hover {background-color: #4a4a4a; box-shadow: 10px 10px 20px #000000; text-shadow: 2px 2px 4px #000000; color: red;}
    </style>
</head>
<body class="font">
    <div class="header">
        <a href="../index.php" class="logo"><img src="../resources/img/logo/ife-logo.gif" alt="IFE"></a>
        <div class="header-right">
            <a href="../index.php">Home</a>
            <a href="../view/login.php">Login</a>
            <a href="../view/registration.php">Registration</a>
        </div>
    </div>
    <form method="post" action="">
        <fieldset style="margin-top: 20px;">
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
    <div class="footer"><p>Copyright © 2021 || All Rights Reserved.</p></div>
</body>
</html>