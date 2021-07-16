<?php
    require_once '../model/model.php';
    $nameErr = $usertypeErr = $conntypeErr = $priceErr ="";
    $name = $usertype = $conntype = $price ="";
    $message = '';
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        if(empty($_POST["name"]) || empty($_POST["price"]) || empty($_POST["usertype"]) || empty($_POST["conntype"]))
        {
            $error = "Fill up all field first!";
            if(empty($_POST["name"]))  
            {  
                $nameErr = "Name is Required!";  
            }

            if (empty($_POST["usertype"])) 
            {
                $usertypeErr = "User Type is Required";
            }
            
            if(empty($_POST["conntype"]))  
            {  
                $conntypeErr = "Connection Type is Required!";
            }

            if (empty($_POST["price"])) 
            {
                $emailErr = "Price is required";
            } 
        }
        else
        {
            if(isset($_POST['addipack'])) 
            {
                $data['name']     = $_POST['name'];
                $data['speed']    = $_POST['speed'];
                $data['usertype'] = $_POST['usertype'];
                $data['conntype'] = $_POST['conntype'];  
                $data['time']     = $_POST['time'];
                $data['support']  = $_POST['support'];
                $data['included'] = $_POST['included'];
                $data['price']    = $_POST['price'];
                $data['display']  = $_POST['display'];
                $data['image']    = basename($_FILES["image"]["name"]);
                $target_dir = "../resources/img/ipack/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
                {
                    $message = "Photo Uploaded Successful";
                } 
                else
                {
                    $error = "Sorry, there was an error uploading your file.";
                }

                if (addipack($data)) 
                {
                    $message = "<i>Internet Pack Added Successfully</i>";
                }
            } 
        }
    } 
?>