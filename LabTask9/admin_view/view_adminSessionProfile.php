<?php 
    include "../controller/session.php" ;
    require_once '../admin_controller/admininfoCntrl.php';
    $admin = fetchadmin($_GET['user_id']);
    
    if($_SESSION['usertype'] == "Admin"){}
    else{header("location: ../controller/hackerCntrl.php");}
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
            <h1 class="color-cyan">ADMIN PROFILE</h1>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td style="width: 450px;">: <label><?php echo $admin['name'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/admin_img/<?php echo $admin['image'] ?>"
                            alt="<?php echo $admin['name'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>: <label><?php echo $admin['email'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>: <label><?php echo $admin['username'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>: <span class="red font-size-20">***********</span><span><a href="../admin_view/update_adminSessionPassword.php?user_id=<?php echo $admin['user_id'] ?>" class="green"> <i class="fas fa-lock"></i> Click to Change</a></span></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone</label></td>
                    <td>: <label><?php echo $admin['phone'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td>: <label><?php echo $admin['address'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="type">User Type</label></td>
                    <td>: <label><?php echo $admin['usertype'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>: <label><?php echo $admin['gender'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>: <label><?php echo $admin['dob'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../admin_view/update_adminSessionProfile.php?user_id=<?php echo $admin['user_id'] ?>" class="green">EditProfile</a></td>
                    <td></td>
                    <td><a href="../admin_view/update_adminSessionImage.php?user_id=<?php echo $admin['user_id'] ?>" class="green">Update Profile Image</a></td>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>