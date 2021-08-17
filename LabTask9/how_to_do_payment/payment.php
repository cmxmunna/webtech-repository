<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Payment Options</title>
</head>
<body>
    <?php include('../header_footer/header_before_login.php'); ?>
    <?php include('../header_footer/heading.php'); ?>
    
    <div class="containerr center">
        <h1 class="color-cyan top-mar-50">BILL PAY</h1>
        <img src="../resources/img/images/bill-pay.png" alt="Bill Pay">
        <div class="pay-options">
        <a href="../how_to_do_payment/bkash.php"><img src="../resources/img/logo/bkash.png" alt="Bkash Pay" height="100px"></a>
        <a href="../how_to_do_payment/nagad.php"><img src="../resources/img/logo/nagad.png" alt="Nagad Pay" height="100px"></a>
        <a href="../how_to_do_payment/rocket.php"><img src="../resources/img/logo/rocket.png" alt="Rocket Pay" height="100px"></a>
        <a href="../how_to_do_payment/visacard.php"><img src="../resources/img/logo/visa.png" alt="Visa Pay" height="100px"></a>
        <a href="../how_to_do_payment/mastercard.php"><img src="../resources/img/logo/mastercard.png" alt="Mastercard Pay" height="100px"></a>
        <a href="../how_to_do_payment/banktransfer.php"><img src="../resources/img/logo/bank.png" alt="Bank Transfer" height="100px"></a>
        </div>
    </div>
    
    <?php include('../header_footer/footer_info.php'); ?>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>