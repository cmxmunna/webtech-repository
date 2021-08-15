<?php 
    require_once '../model/ipack_model.php';

    if(deleteipack($_GET['pack_id'])) 
    {
        header('Location: ../internetpack_view/view_all_internetpacks.php');
    }
?>