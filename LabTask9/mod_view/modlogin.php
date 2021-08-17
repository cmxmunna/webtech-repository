<?php include "../mod_controller/modloginCntrl.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>IFE Login</title>
</head>

<body class="font">
    <?php include('../header_footer/header_before_login.php'); ?>
    <div class="loginnav">
        <ul>
            <li class="loginnav-btn"><a href="../admin_view/adminlogin.php"><i class="fas fa-user-shield"></i> ADMIN</a></li>
            <li class="loginnav-btn1"><a href="../mod_view/modlogin.php"><i class="fas fa-users-cog"></i> MODERATOR</a></li>
            <li class="loginnav-btn"><a href="../user_view/userlogin.php"><i class="fas fa-user"></i> USER</a></li>
        </ul>
    </div>
    <form method="post" onsubmit="return LoginValidation()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="better-view">
            <h1 align="center"><strong>MODERATOR LOGIN</strong></h1>
            <table align="center">
                <tr>
                    <td><label for="username">User Name &nbsp;&nbsp;&nbsp;</label></td>
                    <td>: <input type="text" id="username" name="username" placeholder="Type User Name"
                            value="<?php if(isset($_COOKIE["modusername"])) { echo $_COOKIE["modusername"]; } ?>">
                        <span class="error" id="usernameErr"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>: <input type="password" id="password" name="password" placeholder="Type Password"
                            value="<?php if(isset($_COOKIE["modpassword"])) { echo $_COOKIE["modpassword"]; } ?>">
                        <span class="error" id="passwordErr"></span>
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
                    <td colspan="2" align="center" class="forgot"><a href="../mod_view/forgot_modPassword.php">Forgot Password?</a></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" class="error">
                        <?php  
                            if(isset($message))  
                            {
                                 echo $message;
                            } 
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <br><br><br><br><br><br><br><br>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>