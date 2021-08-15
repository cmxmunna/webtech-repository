<?php 
    include '../controller/create_paymentCntrl.php';
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
            <h1 class="color-cyan">CONFIRM PAYMENT</h1>
            <span class="green"><?php if(isset($message))echo $message?></span>
            <span class="red"><?php if(isset($error))echo $error?></span>
            <span class="red"><?php if($Type !== $ipack['usertype'])echo "Warning: User Type ".$ipack['usertype']." Required!" ?></span><br>
            <span class="red"><?php if(isset($typeRequired))echo $typeRequired?></span>
        <form action="" onsubmit="return createPaymentValidation()" method="post">
                <div class="top-mar-30">
                    <table>
                        <tr>
                            <td><label for="subscriber_name">Subscriber Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            <td>: <label><?php echo $Name ?></label></td>
                            <td rowspan="7">
                                <img width="200px" src="../resources/img/ipack_img/<?php echo $ipack['image'] ?>"
                                    alt="<?php echo $ipack['name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="pack_name">Subscription Pack Name</label></td>
                            <td>: <label><?php echo $ipack['name'] ?></label>
                                <input type="hidden" name="subscription_pack_name" id="pack_name" value="<?php echo $ipack['name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="pack_id">Subscription Pack ID</label></td>
                            <td>: <label><?php echo $ipack['pack_id'] ?></label>
                                <input type="hidden" name="subscription_pack_id" id="pack_id" value="<?php echo $ipack['pack_id'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="usertype">Required User Type</label></td>
                            <td>: <label><?php echo $ipack['usertype'] ?></label><span class="red"> *</span>
                                <input type="hidden" name="usertype" id="usertype" value="<?php echo $ipack['usertype'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Description">Description</label></td>
                            <td style="max-width: 300px;"><fieldset><?php echo $ipack['included'] ?></fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Month">Subscription Month</label></td>
                            <td>: <label><?php echo date('M Y'); ?></label>
                                <input type="hidden" name="subscription_month" id="Month" value="<?php echo date('M Y'); ?>">
                                <input type="hidden" name="transaction_time" id="Month" value="<?php echo date('d/m/y h:i'); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="Pay">Amount to Pay</label></td>
                            <td>: <label><?php echo $ipack['price']." TK" ?></label>
                                <input type="hidden" name="amount" id="Pay" value="<?php echo $ipack['price']." TK" ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="payment_method">Payment Method</label></td>
                            <td colspan="3">: 
                                <select name="payment_method" id="payment_method" onchange="peymentGetway()" onclick="peymentGetwayErrRemove()">
                                    <option value="">Select</option>
                                    <option value="BKASH">Bkash</option>
                                    <option value="NAGAD">Nagad</option>
                                    <option value="ROCKET">Rocket</option>
                                </select>
                                <span id="payment_methodErr" class="error">* <?php echo $payment_methodErr ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="paymentGetwayLabelLoad"></label></td>
                            <td colspan="3"><label id="paymentGetwayBoxlLoad"></label></td>
                        </tr>
                        <tr>
                            <td colspan="2"><label id="privacyPolicyLoad"></label></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="confirm" value="confirm" class="btn1"></td>
                        </tr>
                    </table>
                    <br><br>
                    <label><a href="../internetpack_view/subscribe_internetpack.php" class="link-hvr">Cancel This Transection</a></label>
                </div>
            </form>
            <br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>