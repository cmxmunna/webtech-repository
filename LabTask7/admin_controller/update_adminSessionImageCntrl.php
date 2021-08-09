<?php
    require_once '../model/admin_model.php';
    
    $uploadErr="";
    $uploadSuccess="";
    $message="";
    $success="";
    $successImg="";

    if(isset($_POST['upload']))
    {
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true)
        {
            $time = time();
            $new_img_name = $time.$img_name;
            $target_dir = "../resources/img/admin_img/";
            $target_file = $target_dir .$new_img_name;
            $data['image'] = $new_img_name;
            if(move_uploaded_file($tmp_name, $target_file))
            {
                // $message = "upload Success";
                if (updateAdminImage($_POST['user_id'], $data)) 
                {
                    $message = "Image uploaded successfully.";
                }
            }
        }
        else
        {
            $message = "Please upload an image file - jpeg, png, jpg";
        }
    }