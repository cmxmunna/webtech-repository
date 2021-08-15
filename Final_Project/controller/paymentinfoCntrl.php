<?php 

    require_once ('../model/payment_model.php');

    function fetchallpayments()
    {
        return showallpayments();
    }
    function fetchUserPaymentHistory($user_id)
    {
        return showUserPaymentHistory($user_id);
    }
?>
