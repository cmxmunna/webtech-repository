<?php 
    require_once '../model/user_model.php';
    
    if(deleteuser($_GET['user_id'])) 
    {
        header('Location: ../user_view/view_all_users.php');
    }
?>