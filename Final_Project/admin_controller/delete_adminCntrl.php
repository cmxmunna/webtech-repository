<?php 
    require_once '../model/admin_model.php';

    if(deleteadmin($_GET['user_id'])) 
    {
        header('Location: ../admin_view/view_all_admins.php');
    }
?>