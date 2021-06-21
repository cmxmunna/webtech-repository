<?php
    $currPassErr = $newPassErr = $cnewPassErr ="";
    $newPass = $cnewPass ="";
    $currPass = 'abc@1234';
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

        // if(empty($_POST["newPass"]))  
        // {  
        //     $newPassErr = "New Password Required!";  
        // } 
        if($_POST["currPass"] != $_POST["newPass"]) 
        {
            $newPassErr = "New Password cannot be the same as current Password!";
        }

        if(empty($newPass) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$newPass))
        {
            $newPassErr ="Password must contain Alphabets,Numbers,Special Charecter!";
        }
      
        if(empty($_POST["cnewPass"])) 
        {
            $cnewPassErr = "Retype New password!";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        .error {color: #FF0000;}
        .font {font-family: 'Courier New', Courier, monospace; color: white;}
        body {background-color: #202020;}
    </style>
</head>
<body class="font">
        <form method="post" action="">
            <fieldset>
                <legend><strong>CHANGE PASSWORD</strong></legend>
                <table>
                    <tr>
                        <td><label for="currPass">Current Password</label></td>
                        <td>:<input type="text" id="currPass" name="currPass" placeholder="abc@1234" value="">
                        <span class="error"> <?php echo $currPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="newPass">New Password</label></td>
                        <td>:<input type="text" id="newPass" name="newPass" placeholder="Type New Password" value="<?php echo $newPass; ?>">
                        <span class="error"> <?php echo $newPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cnewPass"> Retype New Password</label></td>
                        <td>:<input type="text" id="cnewPass" name="cnewPass" placeholder="Retype New Password" value="<?php echo $cnewPass; ?>">
                        <span class="error"> <?php echo $cnewPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php  
                                if(isset($message))  
                                {
                                echo "<br>" .$message;
                                } 
                            ?>
                        </td>
                    </tr>
                </table> 
                <br>
                <input type="submit" name="submit" value="Submit" style="font-size: 15px;">
            </fieldset>
        </form>      
    </body>
</html>