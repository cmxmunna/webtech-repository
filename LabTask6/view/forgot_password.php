<?php include "../control/forgot_passCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Forgot Password</title>
</head>
<body>
    <?php include('../header_footer/header_before_login.php'); ?>
    <form method="post" action="">
        <div class="better-view">
            <h1 align="center"><strong>FORGOT PASSWORD</strong></h1>
            <table align="center">
                <tr>
                    <td><label for="email">Enter Email &nbsp;&nbsp;&nbsp;</label></td>
                    <td>: <input type="text" id="email" name="email" placeholder="Type User Registered Email">
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br><input type="submit" name="submit" value="Submit" class="btn">
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
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>