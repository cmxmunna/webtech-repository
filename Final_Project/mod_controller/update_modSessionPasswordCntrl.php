<?php
    require_once '../model/mod_model.php';

    $currPassErr = $newPassErr = $cnewPassErr ="";
    $newPass = $cnewPass ="";
    $message = ''; 

    if(isset($_POST["change"]))  
    {  
        $tempPass = $_POST["tempPass"];
        $verified_password = password_verify($_POST["currPass"], $tempPass);

        if(empty($_POST["currPass"]))  
        {  
            $currPassErr = "Current Password Required!";  
        } 
        else if($verified_password) 
        {
            $newPass= $_POST['newPass'];
            if(empty($_POST["newPass"]))
            {
                $newPassErr ="New Password Required!";
            }
            else if($_POST["currPass"] == $_POST["newPass"]) 
            {
                $newPassErr = "New Password cannot be the same as current Password!";
            }
            else if(empty($_POST["newPass"]))
            {
                $newPassErr ="New Password Required!";
            }
            else if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$newPass))
            {
                $newPassErr ="Password must contain Alphabets,Numbers,Special Charecter!";
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
                
                if (updateModPassword($_POST['user_id'], $data)) 
                {
                    $message = 'Password Changes Successfully!!';
                }
            }
        }
        else
        {
            $currPassErr = "Current password isn't maching!";
        }

        
    }       
?>