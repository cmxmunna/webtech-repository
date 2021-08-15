<?php 

    require_once ('../model/ipack_model.php');

    function fetchallipacks()
    {
        return showallipacks();
    }
    function fetchipack($pack_id)
    {
        return showipack($pack_id);
    }
?>
