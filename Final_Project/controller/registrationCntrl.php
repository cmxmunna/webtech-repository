<?php
    require_once '../model/model.php';
    $usernameExist = $genderErr ="";
    $username = '';
    $message = '';
    $error = '';

    if(isset($_POST['userreg'])) 
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM userinfo WHERE username = :username";
        try
        {
            $stmt = $conn-> prepare($selectQuery);  
            $stmt->execute(  
                array(  
                    'username'     =>     $_POST["username"], 
                )  
            );  
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();  
            if($count > 0)  
            {  
                $username = $row['username'];
            }  
            if($username == $_POST['username'])
            {
                $usernameExist = "⚠ Username ".$_POST['username']." is already Taken!";
            }
            else
            {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode);
                $extensions = ["jpeg", "png", "jpg"];
                if(in_array($img_ext, $extensions) === true)
                {
                    $ran_id = rand(time(), 18360251);
                    $time = time();
                    $new_img_name = $time.$img_name;
                    $target_dir = "../resources/img/user_img/";
                    $target_file = $target_dir .$new_img_name;

                    $data['user_id']     = md5($ran_id);
                    $data['name']     = $_POST['name'];
                    $data['email']    = $_POST['email'];
                    $data['username'] = $_POST['username'];
                    $data['phone']    = $_POST['phone'];
                    $data['address']  = $_POST['address'];
                    $data['usertype'] = $_POST['usertype'];
                    $data['gender']   = $_POST['gender'];
                    $data['dob']      = $_POST['dob'];
                    $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
                    $data['image'] = $new_img_name;

                        
                    if(move_uploaded_file($tmp_name, $target_file)){}
                    if (userRegistration($data)) 
                    {
                        $message = "<i>Registration Dada Saved Successfully</i>";
                    }
                    else
                    {
                        $message = "⚠ Registration Dada was not saved ⚠";
                    }
                }
            } 
        }  
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
?>