<?php
    $currPassErr = $newPassErr = $cnewPassErr ="";
    $newPass = $cnewPass ="";
    $message = ''; 

    include('session.php');

    if(isset($_POST["submit"]))  
    {  
        if(empty($_POST["currPass"]))  
        {  
            $currPassErr = "Current Password Required!";  
        } 
        else if($_POST['currPass'] !== $Pass)
        {
            $currPassErr = "Current password isn't maching!";
        }
        else
        {
            if(empty($_POST["newPass"]))
            {
                $newPassErr ="New Password Required!";
            }
            else if($_SESSION['pass'] == $_POST["newPass"]) 
            {
                $newPassErr = "New Password cannot be the same as current Password!";
            }

            $newPass= $_POST['newPass'];
            if(empty($_POST["newPass"]))
            {
                $newPassErr ="New Password Required!";
            }
            else if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$newPass))
            {
                $newPassErr ="Password must contain Alphabets,Numbers,Special Charecter!";
            }
        
            if(empty($_POST["cnewPass"])) 
            {
                $cnewPassErr = "Retype New password required!";
            } 
            else if($_POST["newPass"] !== $_POST["cnewPass"]) 
            {
                $cnewPassErr = "Confirm password dose not mached with new Password!";
            }
            else
            {
                $message = "<strong>Password Changed Successfuly!</strong>";
            }
        }
    }       
?>