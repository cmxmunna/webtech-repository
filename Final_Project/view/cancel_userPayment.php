<?php 
    include '../controller/session.php';
    require_once '../controller/paymentinfoCntrl.php'; 
    $payments = fetchUserPayment($_GET['transaction_id']);

    $message = '';
    if(isset($_POST['transaction_update']))
    {  
        $data['status'] = $_POST['status'];
        if (UpdateUserPayment($_POST['transaction_id'], $data)) 
        {
            $message = "✔ Record Updated Successfully by ".$Name;
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>User Transection</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <a href="../view/Track_userPayment.php"><span class="btn-action error">← Back</span></a>
            <h1 class="color-cyan">User Transection Update</h1>
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
                        <th>Transection ID</th>
                        <th>Status</th>
                        <th>Transection Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $i => $payment): ?>
                        <tr>
                            <td><?php echo $payment['subscriber_name'] ?></td>
                            <td><?php echo $payment['usertype'] ?></td>
                            <td><?php echo $payment['subscription_pack_name'] ?></td>
                            <td><?php echo $payment['subscription_month'] ?></td>
                            <td><?php echo $payment['amount'] ?></td>
                            <td><?php echo $payment['payment_method'] ?></td>
                            <td><?php echo $payment['phone_number'] ?></td>
                            <td><?php echo $payment['transaction_id'] ?></td>
                            <td><?php echo $payment['status'] ?></td>
                            <td><?php echo $payment['transaction_time'] ?></td>
                            <td>
                                <form action='' method='post'>
                                    <select name='status' id='status'>
                                        <option value='Requsted for Cancel Subscription'>Requst Subscription Cancel</option>
                                        <option value='Requsted for Unlock Subscription'>Requst Subscription Unlock</option>
                                        <option value='Requsted for Contact'>Contact Requst</option>
                                        <option value='Requsted for Refund'>Refund Requst</option>
                                    </select>
                                    <input type="hidden" name="transaction_id" value="<?php echo $_GET['transaction_id']; ?>">
                                    <input type='submit' name='transaction_update' value='UPDATE' class="btn-action">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="center green"><span><?php if(isset($message)) { echo $message; }?></span></div>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>