<?php
    require_once '../model/admin_model.php';

    $newPassErr = $cnewPassErr ="";
    $newPass = $cnewPass ="";
    $message = ''; 

    if(isset($_POST["change"]))  
    {  
        $newPass= $_POST['newPass'];
        if(empty($_POST["newPass"]))
        {
            $newPassErr ="New Password Required!";
        }
        else if(empty($_POST["cnewPass"])) 
        {
            $cnewPassErr = "Retype New password required!";
        } 
        else if($_POST["newPass"] !== $_POST["cnewPass"]) 
        {
            $cnewPassErr = "Confirm password dose not mached with new Password!";
        }
        else
        {
            $data['password'] = password_hash($_POST['newPass'], PASSWORD_BCRYPT, ["cost" => 12]); 
                
            if (updateAdminPassword($_POST['user_id'], $data)) 
            {
                $message = 'Password Changes Successfully!!';
            }
        }
    }       
?>