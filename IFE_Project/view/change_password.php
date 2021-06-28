<?php include "../control/change_passCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>Change Password</title>
</head>
<body>
    <?php include('header_after_login.php'); ?>
    <div class="main">
    <?php include('menu.php'); ?>
        <section>
        <form method="post" action="">
        <fieldset style="margin-top: 20px;">
            <legend><strong>CHANGE PASSWORD</strong></legend>
                <table align="center">
                    <tr>
                        <td><label for="currPass">Current Password</label></td>
                        <td>:<input type="text" id="currPass" name="currPass" placeholder="Type Current Password">
                        <span class="error">* <?php echo $currPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="newPass">New Password</label></td>
                        <td>:<input type="text" id="newPass" name="newPass" placeholder="Type New Password">
                        <span class="error">* <?php echo $newPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cnewPass"> Retype New Password &nbsp;&nbsp;&nbsp;</label></td>
                        <td>:<input type="text" id="cnewPass" name="cnewPass" placeholder="Retype New Password" >
                        <span class="error">* <?php echo $cnewPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit" style="font-size: 15px;"></td>
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
        </section>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>