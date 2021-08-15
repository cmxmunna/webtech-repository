<?php
    include '../controller/session.php';
    require_once '../model/payment_model.php';

    $payment_methodErr='';
    $message = '';
    $error = '';
    $ipack ='';
    $typeRequired='';

    if(isset($_POST['confirm'])) 
    {
        if(empty($_POST['payment_method']))
        {
            $payment_methodErr = " ⚠ Please select a Payment Method";
        }
        if($Type !== $_POST['usertype'])
        {
            $typeRequired = "Your User Type dose not match with this Package Type<br> Contact with <a href='../admin_view/mail.php' class='btn-action'>Admin</a> to change your UserType";
        }
        else
        {
            $status = "Success";
            $ran_id = (time()* 36025);
            $data['subscriber_name']         = $Name;
            $data['subscriber_id']           = $user_id;
            $data['usertype']                = $_POST['usertype'];
            $data['subscription_pack_id']    = $_POST['subscription_pack_id'];
            $data['subscription_pack_name']  = $_POST['subscription_pack_name'];
            $data['subscription_month']      = $_POST['subscription_month'];
            $data['amount']                  = $_POST['amount'];
            $data['phone_number']            = $_POST['phone_number'];
            $data['payment_method']          = $_POST['payment_method'];
            $data['transaction_id']          = $_POST['payment_method'].$ran_id;
            $data['status']                  = $status;
            $data['transaction_time']        = $_POST['transaction_time'];

            if (createPayment($data)) 
            {
                $message = "<i>Congratulations! Transection Success... <a href='../view/payment_history.php?user_id=$user_id' class='link-hvr'>Click to see Transection History</a></i>";

                setcookie ("subscriber_name",$Name,time() + (86400*7));
                setcookie ("usertype",$_POST['usertype'],time() + (86400*7));
                setcookie ("subscription_pack_id",$_POST['subscription_pack_id'],time() + (86400*7));
                setcookie ("subscription_pack_name",$_POST['subscription_pack_name'],time() + (86400*7));
                setcookie ("subscription_month",$_POST['subscription_month'],time() + (86400*7));
                setcookie ("amount",$_POST['amount'],time() + (86400*7));
                setcookie ("phone_number",$_POST['phone_number'],time() + (86400*7));
                setcookie ("payment_method",$_POST['payment_method'],time() + (86400*7));
                setcookie ("transaction_id",$_POST['payment_method'].$ran_id,time() + (86400*7));
                setcookie ("status",$status,time() + (86400*7));
                setcookie ("transaction_time",$_POST['transaction_time'],time() + (86400*7));
            }
            else
            {
                $error = "⚠ Transection Not Success ⚠";
            }
        }
    }
?>