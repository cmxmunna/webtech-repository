<?php include "../control/loginCntrl.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>IFE Login</title>
</head>
<body class="font">
    <?php include('header_before_login.php'); ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="better-view">
            <h1 align="center"><strong>LOGIN</strong></h1>
            <table align="center">
                <tr>
                    <td><label for="user">User Name &nbsp;&nbsp;&nbsp;</label></td>
                    <td>:<input type="text" id="user" name="user" placeholder="Type User Name"
                            value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
                        <span class="error">* <?php echo $userErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="pass">Password</label></td>
                    <td>:<input type="text" id="pass" name="pass" placeholder="Type Password"
                            value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                        <span class="error">* <?php echo $passErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="remember">Remember Me</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="login" value="Login" style="font-size: 15px;"> <a
                    href="../view/forgot_password.php">Forgot Password?</a></td>
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
        </div>
    </form>
    <?php include('footer.php'); ?>
</body>

</html>