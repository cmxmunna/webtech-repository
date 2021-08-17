<?php
    require_once 'db_connect.php';
    // Payment Model
    function showallpayments()
    {
        $conn = db_conn();
        $selectQuery = 'SELECT * FROM `payment` ';
        try
        {
            $stmt = $conn->query($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function showUserPaymentHistory($user_id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `payment` where subscriber_id = ?";
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$user_id]);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function showUserPayment($transaction_id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `payment` where transaction_id = ?";
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$transaction_id]);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    function UpdateUserPayment($transaction_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE payment SET status = ? where transaction_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$data['status'], $transaction_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function createPayment($data)
    {
        $conn = db_conn();
        $selectQuery = "INSERT into payment (subscriber_name, subscriber_id, usertype, subscription_pack_id, subscription_pack_name, subscription_month, amount, payment_method, phone_number, transaction_id, status,transaction_time)
        VALUES (:subscriber_name, :subscriber_id, :usertype, :subscription_pack_id, :subscription_pack_name, :subscription_month, :amount, :payment_method, :phone_number, :transaction_id, :status, :transaction_time)";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':subscriber_name'        => $data['subscriber_name'],
                ':subscriber_id'            => $data['subscriber_id'],
                ':usertype'                   => $data['usertype'],
                ':subscription_pack_id'         => $data['subscription_pack_id'],
                ':subscription_pack_name'         => $data['subscription_pack_name'],
                ':subscription_month'           => $data['subscription_month'],
                ':amount'                     => $data['amount'],
                ':payment_method'           => $data['payment_method'],
                ':phone_number'           => $data['phone_number'],
                ':transaction_id'       => $data['transaction_id'],
                ':status'             => $data['status'],
                ':transaction_time' => $data['transaction_time']
            ]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }

    function deletepayment($transection_id)
    {
        $conn = db_conn();
        $selectQuery = "DELETE FROM `payment` WHERE `transection_id` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$transection_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function searchpayment($transection_id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `payment` WHERE username LIKE '%$transection_id%'";
    
        try
        {
            $stmt = $conn->query($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
?>