<?php 

    require_once ('../model/ipack_model.php');

    function fetchallipacks()
    {
        return showallipacks();
    }
    function fetchShowableIpacks()
    {
        return onlyShowableIpacks();
    }
    function fetchipack($pack_id)
    {
        return showipack($pack_id);
    }
?>
