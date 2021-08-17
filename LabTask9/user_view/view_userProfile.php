<?php 
    include "../controller/session.php" ;
    require_once '../user_controller/userinfoCntrl.php';
    $user = fetchuser($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Edit Profile</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <h1 class="color-cyan">USER PROFILE</h1>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td style="width: 450px;">: <label><?php echo $user['name'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/user_img/<?php echo $user['image'] ?>"
                            alt="<?php echo $user['name'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>: <label><?php echo $user['email'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>: <label><?php echo $user['username'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>: <span class="red font-size-20">***********</span><span ><a href="../user_view/update_userPassword.php?user_id=<?php echo $user['user_id'] ?>" class="green"> <i class="fas fa-lock"></i> Click to Change</a></span></td>
                </td>
                </tr>
                <tr>
                    <td><label for="phone">Phone</label></td>
                    <td>: <label><?php echo $user['phone'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td>: <label><?php echo $user['address'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="type">User Type</label></td>
                    <td>: <label><?php echo $user['usertype'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>: <label><?php echo $user['gender'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>: <label><?php echo $user['dob'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../user_view/update_userProfile.php?user_id=<?php echo $user['user_id'] ?>" class="green">Edit Profile</a></td>
                    <td></td>
                    <td><a href="../user_view/update_userImage.php?user_id=<?php echo $user['user_id'] ?>" class="green">Update Profile Image</a></td>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>