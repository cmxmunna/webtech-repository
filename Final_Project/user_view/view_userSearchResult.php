<?php 
    include '../controller/session.php';
    
    if($_SESSION['usertype'] == "Admin"){}
    else if($_SESSION['usertype'] == "Moderator"){}
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
    <title>Search Result</title>
</head>

<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <h1><a href="../user_view/view_all_users.php" class="link-hvr"><i class="fas fa-arrow-left"></i> Back</a></h1>
            <form method="post" action="">
                <h1 class="color-cyan">
                    <legend>SEARCH USER</legend>
                </h1>
                <table>
                    <tr>
                        <td><input type="text" name="user_name" class="srch-usr"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="searchuser" value="Search" class="btn"></td>
                    </tr>
                    <tr>
                        <td class="pad-10">Showing result for :&nbsp; <span class="color-cyan"><?php if(isset($message)) {echo $message;} ?></td>
                    </tr>
                </table>
            </form>
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
                    <?php foreach ($allSearchedUsers as $i => $user): ?>
                        <tr>
                            <td><a href="../user_view/view_userProfile.php?user_id=<?php echo $user['user_id'] ?>"><?php echo $user['name'] ?></a></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['username'] ?></td>
                            <td> *********** </td>
                            <td><?php echo $user['phone'] ?></td>
                            <td><?php echo $user['address'] ?></td>
                            <td><?php echo $user['usertype'] ?></td>
                            <td><?php echo $user['gender'] ?></td>
                            <td><?php echo $user['dob'] ?></td>
                            <td><img width="70px" src="../resources/img/user_img/<?php echo $user['image'] ?>" alt="<?php echo $user['name'] ?>"></td>
                            <td>
                                <a href="../user_view/update_userProfile.php?user_id=<?php echo $user['user_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../user_controller/delete_userCntrl.php?user_id=<?php echo $user['user_id'] ?>" onclick="return confirm('Are you sure want to delete this USER?')"><span class="btn-action error">Delete</span></a>
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