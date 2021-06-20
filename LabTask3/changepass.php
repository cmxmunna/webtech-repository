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
           
        }
        else
        {
            $currPassErr = "Current password isn't maching!";
        }


        if(empty($_POST["newPass"]))  
        {  
            $newPassErr = "New Password Required!";  
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
    <title>Login</title>
    <style>
        .error {color: #FF0000;}
        .font {font-family: 'Courier New', Courier, monospace; color: white;}
        .area {width: 420px;}
        .dob-cell {width: 50%;}
        body {background-color: #202020;}
    </style>
</head>
<body class="font">
        <form method="post" class="area">
            <fieldset>
                <legend><strong>CHANGE PASSWORD</strong></legend>
                    <div>
                        <label for="currPass">Current Password:</label>
                        <input type="text" id="currPass" name="currPass" placeholder="abc@1234" value="">
                        <span class="error"> <?php echo "<br>".$currPassErr; ?></span>
                        </div>
                    <div style="margin-top: 4px; ">
                        <label for="newPass">New Password:&nbsp;</label>
                        <input type="text" id="newPass" name="newPass" placeholder="Type New Password" value="<?php echo $newPass; ?>">
                        <span class="error"> <?php echo "<br>".$newPassErr; ?></span>
                    </div>
                    <div style="margin-top: 4px">
                        <label for="cnewPass"> Retype New Password:</label>
                        <input type="text" id="cnewPass" name="cnewPass" placeholder="Retype New Password" value="<?php echo $cnewPass; ?>">
                        <span class="error"> <?php echo "<br>".$cnewPassErr; ?></span>
                    </div> 
                <?php  
                    if(isset($message))  
                    {
                        echo "<br>" .$message;
                    } 
                ?> 
                <br>
                <input type="submit" name="submit" value="Submit" style="font-size: 15px;">
            </fieldset>
        </form>      
    </body>
</html>