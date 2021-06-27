<?php
    $currPassErr = $newPassErr = $cnewPassErr ="";
    $currPass = $newPass = $cnewPass ="";
    $message = '';  

    if(isset($_POST["submit"]))  
    {  
        if(empty($_POST["currPass"]))  
        {  
            $currPassErr = "Current Pass Required!";  
        } 
        else if($currPass == $currPass)
        {
           echo "Current Password Mached";
        }
        else
        {
            $currPassErr = "Current password isn't maching!";
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
        else 
        {
            if($_POST["currPass"] == $_POST["newPass"]) 
            {
                $newPassErr = "New Password cannot be the same as current Password!";
            }
        }
      
        if(empty($_POST["cnewPass"])) 
        {
            $cnewPassErr = "Retype New password required!";
        } 
        else if($_POST["newPass"] !== $_POST["cnewPass"]) 
        {
            $cnewPassErr = "Confirm password dose not mached!";
        }
        else
        {
            $message = "<strong>Password Changed Successfuly!</strong>";
        }
    }
?>