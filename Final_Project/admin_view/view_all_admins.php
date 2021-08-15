<?php 
    include '../controller/session.php';
    require_once '../admin_controller/admininfoCntrl.php';
    $admins = fetchalladmins();
    
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
    <title>All Admins</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ALL ADMIN LIST</h1>
            <a href="../admin_view/add_admin.php" class="btn">ADD NEW ADMIN</a> <br><br>
            <form method="post" action="../admin_controller/search_adminCntrl.php">
                <span class="color-cyan"><legend>SEARCH ADMIN FROM LIST</legend></span>
                <table>
                    <tr>
                        <td><input type="text" name="user_name" class="srch-usr"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="searchuser" value="Search" class="btn"></td>
                    </tr>
                </table>
            </form>
            <br><br><br>
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>User Type</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admins as $i => $admin): ?>
                        <tr>
                            <td><a href="../admin_view/view_adminProfile.php?user_id=<?php echo $admin['user_id'] ?>"><?php echo $admin['name'] ?></a></td>
                            <td><?php echo $admin['email'] ?></td>
                            <td><?php echo $admin['username'] ?></td>
                            <td> *********** </td>
                            <td><?php echo $admin['phone'] ?></td>
                            <td><?php echo $admin['address'] ?></td>
                            <td><?php echo $admin['usertype'] ?></td>
                            <td><?php echo $admin['gender'] ?></td>
                            <td><?php echo $admin['dob'] ?></td>
                            <td><img width="70px" src="../resources/img/admin_img/<?php echo $admin['image'] ?>" alt="<?php echo $admin['name'] ?>"></td>
                            <td>
                                <a href="../admin_view/update_adminProfile.php?user_id=<?php echo $admin['user_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../admin_controller/delete_adminCntrl.php?user_id=<?php echo $admin['user_id'] ?>" onclick="return confirm('Are you sure want to delete this USER?')"><span class="btn-action error">Delete</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>