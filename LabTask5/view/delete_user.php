<?php 
    include '../control/session.php';
    require_once '../control/userinfoCntrl.php'; 
    $users = fetchallusers();
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
    <?php include('../control/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ALL USER LIST</h1>
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
                <tbody >
                    <?php foreach ($users as $i => $user): ?>
                        <tr class="link-hvr">
                            <td><?php echo $user['name'] ?></a></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td><?php echo $user['password'] ?></td>
                            <td><?php echo $user['phone'] ?></td>
                            <td><?php echo $user['address'] ?></td>
                            <td><?php echo $user['usertype'] ?></td>
                            <td><?php echo $user['gender'] ?></td>
                            <td><?php echo $user['dob'] ?></td>
                            <td><img width="70px" src="../resources/img/user_img/<?php echo $user['image'] ?>" alt="<?php echo $user['name'] ?>"></td>
                            <td><a href="../control/delete_userCntrl.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Are you sure want to delete this USER?')"><span class="btn">Delete</span></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>