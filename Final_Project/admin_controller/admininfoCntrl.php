<?php 

    require_once ('../model/admin_model.php');

    function fetchalladmins()
    {
        return showalladmins();
    }
    function fetchadmin($user_id)
    {
        return showadmin($user_id);
    }
?>
