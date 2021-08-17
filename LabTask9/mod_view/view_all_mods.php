<?php 
    include '../controller/session.php';
    require_once '../mod_controller/modinfoCntrl.php';
    $mods = fetchallmods();
    
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
    <title>All Moderators</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ALL MODERATOR LIST</h1>
            <a href="../mod_view/add_mod.php" class="btn">ADD NEW MODERATOR</a> <br><br>
            <form method="post" action="../mod_controller/search_modCntrl.php">
                <span class="color-cyan"><legend>SEARCH MODERATOR FROM LIST</legend></span>
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
                    <?php foreach ($mods as $i => $mod): ?>
                        <tr>
                            <td><a href="../mod_view/view_modProfile.php?user_id=<?php echo $mod['user_id'] ?>"><?php echo $mod['name'] ?></a></td>
                            <td><?php echo $mod['email'] ?></td>
                            <td><?php echo $mod['username'] ?></td>
                            <td> *********** </td>
                            <td><?php echo $mod['phone'] ?></td>
                            <td><?php echo $mod['address'] ?></td>
                            <td><?php echo $mod['usertype'] ?></td>
                            <td><?php echo $mod['gender'] ?></td>
                            <td><?php echo $mod['dob'] ?></td>
                            <td><img width="70px" src="../resources/img/mod_img/<?php echo $mod['image'] ?>" alt="<?php echo $mod['name'] ?>"></td>
                            <td>
                                <a href="../mod_view/update_modProfile.php?user_id=<?php echo $mod['user_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../mod_controller/delete_modCntrl.php?user_id=<?php echo $mod['user_id'] ?>" onclick="return confirm('Are you sure want to delete this USER?')"><span class="btn-action error">Delete</span></a>
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