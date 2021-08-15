<?php 
    include '../controller/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Recent Transection History</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">RECENT TRANSECTION HISTORY</h1>
            <table class="usr-table">
                <tr>
                    <td>Subscriber Name</td>
                    <td>: <?php if(isset($_COOKIE["subscriber_name"])) { echo $_COOKIE["subscriber_name"]; } ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>: <?php if(isset($_COOKIE["phone_number"])) { echo $_COOKIE["phone_number"]; } ?></td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td>: <?php if(isset($_COOKIE["usertype"])) { echo $_COOKIE["usertype"]; } ?></td>
                </tr>
                <tr>
                    <td>Internet Pack</td>
                    <td>: <?php if(isset($_COOKIE["subscription_pack_name"])) { echo $_COOKIE["subscription_pack_name"]; } ?></td>
                </tr>
                <tr>
                    <td>Subscription Month</td>
                    <td>: <?php if(isset($_COOKIE["subscription_month"])) { echo $_COOKIE["subscription_month"]; } ?></td>
                </tr>
                <tr>
                    <td>Amount Paid</td>
                    <td>: <?php if(isset($_COOKIE["amount"])) { echo $_COOKIE["amount"]; } ?></td>
                </tr>
                <tr>
                    <td>Payment Method</td>
                    <td>: <?php if(isset($_COOKIE["payment_method"])) { echo $_COOKIE["payment_method"]; } ?></td>
                </tr>
                <tr>
                    <td>Transection ID</td>
                    <td>: <span class="red"><?php if(isset($_COOKIE["transaction_id"])) { echo $_COOKIE["transaction_id"]; } ?></span></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <?php if(isset($_COOKIE["status"])) { echo $_COOKIE["status"]; } ?></td>
                </tr>
                <tr>
                    <td>Transection Time</td>
                    <td>: <?php if(isset($_COOKIE["transaction_time"])) { echo $_COOKIE["transaction_time"]; } ?></td>
                </tr>
            </table>
            <br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>