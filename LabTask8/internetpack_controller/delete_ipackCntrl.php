<?php 
    require_once '../model/model.php';

    if(deleteipack($_GET['id'])) 
    {
        header('Location: ../view/view_all_internetpack.php');
    }
?>