<?php
require_once '../model/db_connect.php';

function TransactionSearch($ajax_query)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `payment` where subscriber_name LIKE '%$ajax_query%' OR phone_number LIKE '%$ajax_query%' 
        OR transaction_id LIKE '%$ajax_query%' OR transaction_time LIKE '%$ajax_query%'";
    
        try {
            $stmt = $conn->query($selectQuery);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    }
    function fetchTransactionSearch($ajax_query)
    {
        return TransactionSearch($ajax_query);
    }
    $payments = fetchTransactionSearch($_GET['ajax_query']);
?>

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
            <td>
                <a href="../user_view/view_userProfile.php?user_id=<?php echo $payment['subscriber_id'] ?>"><?php echo $payment['subscriber_name'] ?></a>
            </td>
            <td><?php echo $payment['usertype'] ?></td>
            <td>
                <a href="../internetpack_view/view_internetpack.php?pack_id=<?php echo $payment['subscription_pack_id'] ?>"><?php echo $payment['subscription_pack_name'] ?></a>
            </td>
            <td><?php echo $payment['subscription_month'] ?></td>
            <td><?php echo $payment['amount'] ?></td>
            <td><?php echo $payment['payment_method'] ?></td>
            <td><?php echo $payment['phone_number'] ?></td>
            <td><?php echo $payment['transaction_id'] ?></td>
            <td><?php echo $payment['status'] ?></td>
            <td><?php echo $payment['transaction_time'] ?></td>
            <td>
                <a href="../view/update_userPayment.php?transaction_id=<?php echo $payment['transaction_id'] ?>"><span
                        class="btn-action error">Update</span></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>