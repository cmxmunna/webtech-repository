<?php
    $userErr = $passErr ="";
    $user = $pass ="";
    $message = '';  

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
        if(empty($_POST["user"]))  
        {  
            $userErr = "User Name Required!";  
        }
        else if(strlen($_POST["user"]) <2)
        {
            $userErr = "User Name must contain at least two (2) characters";
        }
        else
        {
            $user = $_POST['user'];
            if(!preg_match("/^[a-zA-Z0-9_ .-]*$/",$user))
            {
                $userErr = "User Name can contain alpha numeric characters, period, dash or underscore only!";
            }

        }
        
        if(empty($_POST["pass"]))  
        {  
            $passErr = "Password Required!";  
        }  
        else if(strlen($_POST['pass']) <8)
        {
            $passErr = "Password must not be less than eight (8) characters";
        }  
        else  
        {  
            $message = "<strong>Congratulations! Login Success</strong>";
        }  
    }  
?>