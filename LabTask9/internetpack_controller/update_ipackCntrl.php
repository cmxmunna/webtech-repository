<?php  
require_once '../model/ipack_model.php';

    $message = '';

    if(isset($_POST['updateipack']))
    {  
        $data['name']     = $_POST['name'];
        $data['speed']    = $_POST['speed'];
        $data['usertype'] = $_POST['usertype'];
        $data['conntype'] = $_POST['conntype'];  
        $data['time']     = $_POST['time'];
        $data['support']  = $_POST['support'];
        $data['usertype'] = $_POST['usertype'];
        $data['included'] = $_POST['included'];
        $data['price']    = $_POST['price'];
        $data['display']  = $_POST['display'];
        if (updateipack($_POST['pack_id'], $data)) 
        {
            $message = "✔ Internet Pack Updated Successfully by ".$Name." ✩";
        }
        else
        {
            $message = "Problem occured while updaing...";
        }
    }
?>