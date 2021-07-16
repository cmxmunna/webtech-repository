<?php include "../control/loginCntrl.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>IFE Login</title>
</head>

<body class="font">
    <?php include('../header_footer/header_before_login.php'); ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="better-view">
            <h1 align="center"><strong>LOGIN</strong></h1>
            <table align="center">
                <tr>
                    <td><label for="username">User Name &nbsp;&nbsp;&nbsp;</label></td>
                    <td>: <input type="text" id="username" name="username" placeholder="Type User Name"
                            value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
                        <span class="error">* <?php echo $userErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>: <input type="password" id="password" name="password" placeholder="Type Password"
                            value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                        <span class="error">* <?php echo $passErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="slideThree">
                            <input type="checkbox" id="slideThree" name="remember" />
                            <label for="slideThree"></label>
                        </div>
                    </td>
                    <td>Remember Me</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="login" value="Login" class="btn"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" class="forgot"><a href="../view/forgot_password.php">Forgot Password?</a></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
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
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>