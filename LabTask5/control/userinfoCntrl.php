<?php 

    require_once ('../model/model.php');

    function fetchallusers()
    {
        return showallusers();
    }
    function fetchuser($id)
    {
        return showuser($id);
    }
?>
