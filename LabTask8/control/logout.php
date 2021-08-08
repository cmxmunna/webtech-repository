<?php
    session_start();

    if (isset($_SESSION['username'])) 
    {
        session_destroy();
        header("location: ../user_view/userlogin.php");
        
    }
    else
    {
        header("location: ../user_view/userlogin.php");
    }
    
?>