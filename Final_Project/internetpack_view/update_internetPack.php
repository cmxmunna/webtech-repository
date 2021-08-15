<?php 
    include '../controller/session.php';
    include '../internetpack_controller/update_ipackCntrl.php';
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
    <title>Edit Internet Package</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <div class="center green"><span><?php if(isset($message)) { echo $message; }?></span></div>
            <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <form method="post" action="" enctype="multipart/form-data">
                <div>
                    <h1 class="color-cyan">UPDATE INTERNET PACKAGE</h1>
                    <table>
                        <tr>
                            <td><label for="name">Pack Name</label></td>
                            <td style="width: 250px;">: <input type="text" id="name" name="name" value="<?php echo $ipack['name'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="speed">Speed</label></td>
                            <td>: <input type="text" id="speed" name="speed" value="<?php echo $ipack['speed'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="usertype">User type</label></td>
                            <td>
                                <fieldset>
                                    <input type="radio" id="Home" name="usertype" value="Home" <?php if (isset($ipack['usertype']) && $ipack['usertype']=="Home") echo "checked";?>><label for="Home" class="green" /> Home Internet</label> <br>
                                    <input type="radio" id="Corporate" name="usertype" value="Corporate" <?php if (isset($ipack['usertype']) && $ipack['usertype']=="Corporate") echo "checked";?>><label for="Corporate" class="green"> Corporate Internet</label><br>
                                    <input type="radio" id="Student" name="usertype" value="Student" <?php if (isset($ipack['usertype']) && $ipack['usertype']=="Student") echo "checked";?>><label for="Student" class="green"> Student Internet</label><br>
                                    <input type="radio" id="IPTelephony" name="usertype" value="IPTelephony" <?php if (isset($ipack['usertype']) && $ipack['usertype']=="IPTelephony") echo "checked";?>><label for="IPTelephony" class="green"> IP Telephony</label><br>
                                    <input type="radio" id="Host&Develope" name="usertype" value="Host&Develope" <?php if (isset($ipack['usertype']) && $ipack['usertype']=="Host&Develope") echo "checked";?>><label for="Host&Develope" class="green"> Hosting & Developement</label>
                                    <br><span id="userTypeErr" class="error">*</span>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="conntype">Connection Type</label></td>
                            <td>
                                <fieldset>
                                    <input type="radio" id="Fiber Optics" name="conntype" value="Fiber Optics" <?php if (isset($ipack['conntype']) && $ipack['conntype']=="Fiber Optics") echo "checked";?>><label for="Fiber Optics" class="red"> Fiber Optics</label><br>
                                    <input type="radio" id="Cat6 Cable" name="conntype" value="Cat6 Cable" <?php if (isset($ipack['conntype']) && $ipack['conntype']=="Cat6 Cable") echo "checked";?>><label for="Cat6 Cable" class="green"> CAT6 Cable</label><br>
                                    <input type="radio" id="Wireless" name="conntype" value="Wireless" <?php if (isset($ipack['conntype']) && $ipack['conntype']=="Wireless") echo "checked";?>><label for="Wireless" class="yellow"> Wireless</label><br>
                                    <input type="radio" id="Other" name="conntype" value="Other" <?php if (isset($ipack['conntype']) && $ipack['conntype']=="Other") echo "checked";?>><label for="Other" class="color-cyan"> Other</label>
                                    <br><span id="connTypeErr" class="error">*</span>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="time">Using Time</label></td>
                            <td>: <input type="text" id="time" name="time" value="<?php echo $ipack['time'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="support">Support</label></td>
                            <td>: <input type="text" id="support" name="support" value="<?php echo $ipack['support'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="included">Included</label></td>
                            <td>: <input type="text" id="included" name="included" value="<?php echo $ipack['included'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="price">Price</label></td>
                            <td>: <input type="text" id="price" name="price" value="<?php echo $ipack['price'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="display">Display?</label></td>
                            <td>: 
                            <input type="radio" id="yes" name="display" value="Yes" <?php if (isset($ipack['display']) && $ipack['display']=="Yes") echo "checked";?>><label for="yes" class="green"> Yes</label>
                            <input type="radio" id="no" name="display" value="No" <?php if (isset($ipack['display']) && $ipack['display']=="No") echo "checked";?>><label for="no" class="red"> No</label>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="pack_id" value="<?php echo $_GET['pack_id']; ?>">
                                <input type="submit" name="updateipack" class="btn" value="UPDATE">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>