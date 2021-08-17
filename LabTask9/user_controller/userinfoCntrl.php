<?php 

    require_once ('../model/user_model.php');

    function fetchallusers()
    {
        return showallusers();
    }
    function fetchuser($user_id)
    {
        return showuser($user_id);
    }
?>
