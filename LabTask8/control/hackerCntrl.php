<?php include "../user_controller/userloginCntrl.php"; ?>
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
            <li class="loginnav-btn"><a href="../mod_view/modlogin.php"><i class="fas fa-users-cog"></i> MODERATOR</a></li>
            <li class="loginnav-btn1"><a href="../user_view/userlogin.php"><i class="fas fa-user"></i> USER</a></li>
        </ul>
    </div>
    <table align="center">
        <tr>
             <td><span class="red font-size-30">Don't Try Anything Stupid!</span></td>
        </tr>
         <tr>
            <td>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../resources/video/funny.gif" >
            </td>
        </tr>
    </table>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="better-view">
            <h1 align="center"><strong>USER LOGIN</strong></h1>
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
                    <td colspan="2" align="center" class="forgot"><a href="../admin_view/forgot_adminPassword.php">Forgot Password?</a></td>
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




        