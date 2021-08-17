<?php 
    include '../controller/session.php';
    require_once '../controller/paymentinfoCntrl.php'; 
    $payments = fetchallpayments();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>All Transection</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <form action=""> 
                <span class="font-size-20 red"><strong>Track Payment</strong> </span><br>
                <input type="text" name="packages" placeholder="Transection ID" onkeyup="showTransection(this.value)">
            </form>
            <br>
            <div id="TransactionResult">Payment info will be listed here...</div>
            <br>
            <h1 class="color-cyan">ALL TRANSECTION LIST</h1>
            
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Subscriber Name</th>
                        <th>User Type</th>
                        <th>Internet Pack</th>
                        <th>Subscription Month</th>
                        <th>Amount Paid</th>
                        <th>Payment Method</th>
                        <th>Payment Number</th>
                        <th>Transaction ID</th>
                        <th>Status</th>
                        <th>Transection Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $i => $payment): ?>
                        <tr>
                            <td><a href="../user_view/view_userProfile.php?user_id=<?php echo $payment['subscriber_id'] ?>"><?php echo $payment['subscriber_name'] ?></a></td>
                            <td><?php echo $payment['usertype'] ?></td>
                            <td><a href="../internetpack_view/view_internetpack.php?pack_id=<?php echo $payment['subscription_pack_id'] ?>"><?php echo $payment['subscription_pack_name'] ?></a></td>
                            <td><?php echo $payment['subscription_month'] ?></td>
                            <td><?php echo $payment['amount'] ?></td>
                            <td><?php echo $payment['payment_method'] ?></td>
                            <td><?php echo $payment['phone_number'] ?></td>
                            <td><?php echo $payment['transaction_id'] ?></td>
                            <td><?php echo $payment['status'] ?></td>
                            <td><?php echo $payment['transaction_time'] ?></td>
                            <td>
                                <a href="../view/update_userPayment.php?transaction_id=<?php echo $payment['transaction_id'] ?>"><span class="btn-action error">Update</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
    <script src='../resources/js/ajax.ife.js?v=<?php echo time(); ?>'></script>
</body>
</html>