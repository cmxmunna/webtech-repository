<?php
    session_start();

    if (isset($_SESSION['user'])) 
    {
        session_destroy();
        header("location: ../view/login.php");
        
    }
    else
    {
        header("location: ../view/login.php");
    }
    
?>