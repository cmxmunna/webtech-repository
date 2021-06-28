<?php include "../control/profile_picCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture</title>
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
        <form method="post" action="" enctype="multipart/form-data">
            <fieldset>
                <legend><strong>PROFILE PICTURE</strong></legend>
                <table>
                    <tr>
                        <td colspan="2"><img src="https://masged.net/wp-content/themes/cera-child/assets/images/avatars/user-avatar.png" alt="sampleImage" height="180px"></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="fileupload" value="No file chosen"  style="font-size: 15px;"></td>
                    </tr>
                    <tr colspan="2">
                        <td><span class="error"><?php echo $uploadErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php  
                                if(isset($message))  
                                {
                                    echo $message;

                                }
                            ?>
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Submit"  style="font-size: 15px;">
            </fieldset>
            <table class="center">
                <tr>
                    <td>
                        <?php  
                            if(isset($uploadSuccess))  
                            {
                                echo $uploadSuccess;

                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            if(isset($successImg))  
                            {
                                echo $successImg;

                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        </section>
    </div>
    <div class="footer"><p>Copyright © 2021 || All Rights Reserved.</p></div>
</body>
</html>