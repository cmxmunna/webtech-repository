<?php include "../control/forgot_passCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>Forgot Password</title>
</head>
<body>
    <?php include('header_before_login.php'); ?>
    <form method="post" action="">
        <div class="better-view">
            <h1 align="center"><strong>FORGOT PASSWORD</strong></h1>
            <table align="center">
                <tr>
                    <td><label for="email">Enter Email &nbsp;&nbsp;&nbsp;</label></td>
                    <td>:<input type="text" id="email" name="email" placeholder="Type User Registered Email">
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </td>
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
        </div>
    </form>
    <?php include('footer.php'); ?>
</body>

</html>