<?php include "../control/forgot_passCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {margin: 0; background-color: #4a4a4a; font-family: 'Courier New', Courier, monospace; color: white;}
        .error {color: #FF0000;}
        .footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: #333; color: white; text-align: center;}
        .header {overflow: hidden; background-color: #333;}
        .header a {float: left; display: block; color: cyan; text-align: center; padding: 14px 16px; margin-top: 4px; text-decoration: none;}
        .header a.logo img {width: auto; height: auto; margin-top: -20px; margin-left: -20px; margin-bottom: -20px; margin-right: -20px;}
        .header-right {float: right;}
        .header a:hover {background-color: #4a4a4a; border-radius: 4px; box-shadow: 5px 5px 10px #FF0000; text-shadow: 2px 2px 4px #000000; color: red;}
    </style>
</head>
<body>
    <div class="header">
        <a href="index.php" class="logo"><img src="../resources/img/logo/ife-logo.gif" alt="IFE"></a>
        <div class="header-right">
            <a href="../index.php">Home</a>
            <a href="../view/login.php">Login</a>
            <a href="../view/registration.php">Registration</a>
        </div>
    </div>
    <form method="post" action="">
        <fieldset style="margin-top: 20px;">
            <legend><strong>FORGOT PASSWORD</strong></legend>
                <table align="center">
                    <tr>
                        <td><label for="email">Enter Email &nbsp;&nbsp;&nbsp;</label></td>
                        <td>:<input type="text" id="email" name="email" placeholder="Type User Registered Email">
                        <span class="error">* <?php echo $emailErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit" style="font-size: 15px;">
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