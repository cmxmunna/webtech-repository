<?php include "../control/change_passCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {margin: 0; background-color: #4a4a4a; font-family: 'Courier New', Courier, monospace; color: white;}
        .error {color: #FF0000;}
        .footer {position: fixed; left: 0; bottom: 0; width: 100%; background-color: #333; color: white; text-align: center;}
        .header {overflow: hidden; background-color: #333;}
        .header a {float: left; display: block; color: cyan; text-align: center; padding: 14px 16px; margin-top: 4px; text-decoration: none;}
        .header a.logo img {width: auto; height: auto; margin-top: -20px; margin-left: -20px; margin-bottom: -20px; margin-right: -20px;}
        .header-right {float: right;}
        .header-log-identity {margin-right: 20px; margin-top: 16px; float: left; font-size: 20px;}
        .header a:hover {background-color: #4a4a4a; border-radius: 4px; box-shadow: 5px 5px 10px #FF0000; text-shadow: 2px 2px 4px #000000; color: red;}
        * { box-sizing: border-box;}
        section{ width: 85%; float: right; height: 500px; padding: 20px;}
        .menu {width: 15%; float: left; height: 500px;  border-right: 2px solid black;}
        .menu a {display: block; color: cyan; text-align: center; padding: 2px 10px; text-decoration: none;}
        .menu a:hover {background-color: #4a4a4a; border-radius: 4px; box-shadow: 5px 5px 10px #FF0000; text-shadow: 2px 2px 4px #000000; color: red;}
        .mian::after {content: ""; clear: both; display: table;}
    </style>
</head>
<body>
    <div class="header">
        <a href="https://startechnetwork.xyz/LabTask4/index.php" class="logo"><img src="https://startechnetwork.xyz/LabTask4/resources/img/logo/ife-logo.gif" alt="IFE"></a>
            <div class="header-right">
            <span class="header-log-identity">Logged in as </span> 
            <a href="../view/profile.php">
                <?php
                    if(isset($User))
                    {
                        echo $User;
                    }
                ?>
            </a>
            <a href="../control/logout.php">Logout</a>
        </div>
    </div>
    <div class="main">
        <aside class="menu">
            <h1 style="text-align: center;">Account</h1> <br>
            <a href="../view/dashboard.php">Dashboard</a> <br>
            <a href="../view/profile.php">View Profile</a> <br>
            <a href="../view/edit_profile.php">Edit Profile</a> <br>
            <a href="../view/profile_picture.php">Change Profile Picture</a> <br>
            <a href="../view/change_password.php">Change Password</a> <br>
            <a href="../control/logout.php">Logout</a>
        </aside>
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
    <div class="footer"><p>Copyright © 2021 || All Rights Reserved.</p></div>
</body>
</html>