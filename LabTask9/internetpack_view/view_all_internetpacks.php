<?php 
    include '../controller/session.php';
    require_once '../internetpack_controller/ipackinfoCntrl.php'; 
    $ipacks = fetchallipacks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>All Internet Pack</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ALL INTERNET PACKAGE LIST</h1>
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Speed</th>
                        <th>Price</th>
                        <th>User Type</th>
                        <th>Connection Type</th>
                        <th>Using Time</th>
                        <th>Support</th>
                        <th>Included</th>
                        <th>display?</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ipacks as $i => $ipack): ?>
                        <tr>
                            <td><a href="../internetpack_view/view_internetpack.php?pack_id=<?php echo $ipack['pack_id'] ?>"><?php echo $ipack['name'] ?></a></td>
                            <td><?php echo $ipack['speed'] ?></td>
                            <td><?php echo $ipack['price'] ?></td>
                            <td><?php echo $ipack['usertype'] ?></td>
                            <td><?php echo $ipack['conntype'] ?></td>
                            <td><?php echo $ipack['time'] ?></td>
                            <td><?php echo $ipack['support'] ?></td>
                            <td><?php echo $ipack['included'] ?></td>
                            <td><?php echo $ipack['display'] ?></td>
                            <td><img width="120px" src="../resources/img/ipack_img/<?php echo $ipack['image'] ?>" alt="<?php echo $ipack['name'] ?>"></td>
                            <td>
                                <a href="../internetpack_view/update_internetPack.php?pack_id=<?php echo $ipack['pack_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../internetpack_controller/delete_ipackCntrl.php?pack_id=<?php echo $ipack['pack_id'] ?>" onclick="return confirm('Are you sure want to delete this PACHAGE?')"><span class="btn-action error">Delete</span></a>
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