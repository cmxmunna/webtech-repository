<?php include "../control/profileCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>IFE Profile</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../control/panelCntrl.php'); ?>
        <section>
            <div class="top-mar-10">
                <h1><legend>PROFILE</legend></h1>
                <table>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td style="width: 350px;">: <label>
                            <?php
                                if(isset($Name))
                                {
                                    echo $Name;
                                }
                            ?>
                        </label>
                        </td>
                        <td rowspan="9" >
                            <img  src="../resources/img/user_img/<?php if(isset($Image)) {echo $Image;} ?>" alt="profileImage" height="200px">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>: <label>
                            <?php
                                if(isset($Email))
                                {
                                    echo $Email;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>: <label>
                            <?php
                                if(isset($User))
                                {
                                    echo $User;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>: <label>
                            <?php
                                if(isset($Pass))
                                {
                                    echo $Pass;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone</label></td>
                        <td>: <label>
                            <?php
                                if(isset($Phone))
                                {
                                    echo $Phone;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="address">Address</label></td>
                        <td>: <label>
                            <?php
                                if(isset($Address))
                                {
                                    echo $Address;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="type">User Type</label></td>
                        <td>: <label>
                            <?php
                                if(isset($Type))
                                {
                                    echo $Type;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td>: <label>
                            <?php
                                if(isset($Gender))
                                {
                                    echo $Gender;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth</label></td>
                        <td>: <label>
                            <?php
                                if(isset($DOB))
                                {
                                    echo $DOB;
                                }
                            ?>
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="../view/edit_profile.php?id=<?php echo $Id ?>">Edit Profile</a></td>
                        <td></td>
                        <td align="center"><a href="../view/profile_picture.php?id=<?php echo $Id ?>">Change</a></td>
                    </tr>
                </table>
            </div>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>