<?php 
    require_once '../model/mod_model.php';

    if(deletemod($_GET['user_id'])) 
    {
        header('Location: ../mod_view/view_all_mods.php');
    }
?>