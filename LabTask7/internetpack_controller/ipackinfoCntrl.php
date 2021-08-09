<?php 

    require_once ('../model/ipack_model.php');

    function fetchallipacks()
    {
        return showallipacks();
    }
    function fetchipack($id)
    {
        return showipack($id);
    }
?>
