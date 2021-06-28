<?php include "../control/profileCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>IFE Profile</title>
</head>
<body>
    <?php include('header_after_login.php'); ?>
    <div class="main">
    <?php include('menu.php'); ?>
        <section>
            <fieldset>
                <legend>PROFILE</legend>
                <table align="center">
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>:<b><label>
                            <?php
                                if(isset($Name))
                                {
                                    echo $Name;
                                }
                            ?>
                        </label></b>
                        </td>
                        <td rowspan="4" >
                            <img  src="https://masged.net/wp-content/themes/cera-child/assets/images/avatars/user-avatar.png" alt="sampleImage" height="160px" style="margin-left: 10px;">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:<b><label>
                            <?php
                                if(isset($Email))
                                {
                                    echo $Email;
                                }
                            ?>
                        </label></b>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td>:<b><label>
                            <?php
                                if(isset($Gender))
                                {
                                    echo $Gender;
                                }
                            ?>
                        </label></b>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth</label></td>
                        <td>:<b><label>
                            <?php
                                if(isset($DOB))
                                {
                                    echo $DOB;
                                }
                            ?>
                        </label></b>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="../view/edit_profile.php">Edit Profile</a></td>
                        <td></td>
                        <td align="center"><a href="../view/profile_picture.php">Change</a></td>
                    </tr>
                </table>
            </fieldset>
        </section>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>