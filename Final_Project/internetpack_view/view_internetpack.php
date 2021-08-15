<?php 
    include '../controller/session.php';
    require_once '../internetpack_controller/ipackinfoCntrl.php';
    $ipack = fetchipack($_GET['pack_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Internet Pack Details</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <h1 class="color-cyan">INTERNET PACK DETAILS</h1>
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td style="width: 250px;">: <label><?php echo $ipack['name'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/ipack_img/<?php echo $ipack['image'] ?>"
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
                    <td>: <label><?php echo $ipack['price']." TK" ?></label></td>
                </tr>
                <tr>
                    <td><label for="display">showable</label></td>
                    <td>: <label><?php echo $ipack['display'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../internetpack_view/update_internetPack.php?pack_id=<?php echo $ipack['pack_id'] ?>" class="green">Update</a></td>
                    <td></td>
                    <td><a href="../internetpack_view/update_internetPackImage.php?pack_id=<?php echo $ipack['pack_id'] ?>" class="green">Update Package Image</a></td>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>