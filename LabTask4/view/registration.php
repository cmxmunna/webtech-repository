<?php include "../control/registrationCntrl.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFE Registration</title>
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
<body class="font">
    <div class="header">
        <a href="../index.php" class="logo"><img src="../resources/img/logo/ife-logo.gif" alt="IFE"></a>
        <div class="header-right">
            <a href="../index.php">Home</a>
            <a href="../view/login.php">Login</a>
            <a href="../view/registration.php">Registration</a>
        </div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset style="margin-top: 20px;">
            <legend>REGISTRATION</legend>
                <table align="center">
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>:<input type="text" id="name" name="name" >
                        <span class="error">* <?php echo $nameErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:<input type="email" id="email" name="email">
                        <span class="error">* <?php echo $emailErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="user">User Name</label></td>
                        <td>:<input type="text" id="user" name="user">
                        <span class="error">* <?php echo $userErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>:<input type="text" id="pass" name="pass">
                        <span class="error">* <?php echo $passErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cpass">Confirm Password &nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                        <td>:<input type="text" id="cpass" name="cpass" >
                        <span class="error">* <?php echo $cpassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender"  value="Male">Male
                            <input type="radio" name="gender"  value="Female">Female
                            <input type="radio" name="gender"  value="Other">Other  
                            <span class="error">* <?php echo $genderErr;?></span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" date_format="dd/mm/yyy" id="dob" name="dob" min="1953-01-01" max="1998-12-31">
                            <span class="error">* <?php echo $dobErr; ?></span>
                            </fieldset> <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit" style="font-size: 15px;">
                            <input type="reset" value="Reset" style="font-size: 15px;">
                        </td>
                        <td>
                            <?php  
                                if(isset($message))  
                                {  
                                    echo $message;  
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