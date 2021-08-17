<?php
    require_once '../model/ipack_model.php';

    $message = '';
    $error = '';

    if(isset($_POST['addipack'])) 
    {
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true)
        {
            $ran_id = rand(time(), 36025);
            $time = time();
            $new_img_name = $time.$img_name;
            $target_dir = "../resources/img/ipack_img/";
            $target_file = $target_dir .$new_img_name;

            $data['pack_id']  = md5($ran_id);
            $data['name']     = $_POST['name'];
            $data['speed']    = $_POST['speed'];
            $data['usertype'] = $_POST['usertype'];
            $data['conntype'] = $_POST['conntype'];  
            $data['time']     = $_POST['time'];
            $data['support']  = $_POST['support'];
            $data['included'] = $_POST['included'];
            $data['price']    = $_POST['price'];
            $data['display']  = $_POST['display'];
            $data['image'] = $new_img_name;

            if(move_uploaded_file($tmp_name, $target_file))
            {
                if(addipack($data)) 
                {
                    $message = "<i>New Package Inserted by $Name</i>";
                }
                else
                {
                    $error = "<i>Dada was not saved!</i>";
                }
            }
        } 
        else
        {
            $error = " Upload a valid Image ";
        }
    }
     
?>