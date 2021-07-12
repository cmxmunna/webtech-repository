<?php
    include('session.php');
    require_once '../model/model.php';
    
    $uploadErr="";
    $uploadSuccess="";
    $message="";
    $success="";
    $successImg="";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $target_file="../resources/img/user_img/".$_FILES["fileupload"]["name"];
        $file_extension = pathinfo($_FILES["fileupload"]["name"], PATHINFO_EXTENSION);
        $allowed_image_extension = array(
            "png",
            "jpg",
            "jpeg",
            "PNG",
            "JPG",
            "JPEG"
        );
        if (!in_array($file_extension, $allowed_image_extension)) 
        {
            $uploadErr = "Upload valid images. Only PNG,JPG and JPEG are allowed.";
        } 
        else if(($_FILES["fileupload"]["size"] > 4000000)) 
        {
            $uploadErr= "Image size exceeds 4MB";
        } 
        
        else if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_file))
        {
        $uploadSuccess= "you have uploaded ".$_FILES["fileupload"]["name"];
        $successImg= "<img src=" .$target_file.">";
        $message = "Image uploaded successfully.";
        }
    }
?>