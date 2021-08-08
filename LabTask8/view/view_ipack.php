<?php 
    require_once '../control/ipackinfoCntrl.php';
    include '../control/session.php';
    $ipack = fetchipack($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>View Internet Pack</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../control/panelCntrl.php'); ?>
        <section>
            <h1 ><a href="../view/view_all_internetpack.php" class="link-hvr"><i class="fas fa-arrow-left"></i> Back</a></h1>
            <h1 class="color-cyan">INTERNET PACK DETAILS</h1>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td style="width: 250px;">: <label><?php echo $ipack['name'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/ipack/<?php echo $ipack['image'] ?>"
                            alt="<?php echo $ipack['name'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="speed">Speed</label></td>
                    <td>: <label><?php echo $ipack['speed'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="usertype">User Type</label></td>
                    <td>: <label><?php echo $ipack['usertype'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="conntype">Connection Type</label></td>
                    <td>: <label><?php echo $ipack['conntype'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="time">Usable Time</label></td>
                    <td>: <label><?php echo $ipack['time'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="support">Support</label></td>
                    <td>: <label><?php echo $ipack['support'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="included">included</label></td>
                    <td>: <label><?php echo $ipack['included'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="price">Price</label></td>
                    <td>: <label><?php echo $ipack['price'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="display">showable</label></td>
                    <td>: <label><?php echo $ipack['display'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../view/edit_userprofile.php?id=<?php echo $ipack['id'] ?>" class="green">Update</a></td>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>