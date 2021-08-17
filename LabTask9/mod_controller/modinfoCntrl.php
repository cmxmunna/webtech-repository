<?php 

    require_once ('../model/mod_model.php');

    function fetchallmods()
    {
        return showallmods();
    }
    function fetchmod($user_id)
    {
        return showmod($user_id);
    }
?>
