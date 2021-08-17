<?php
    require_once '../model/mod_model.php';
    
    $nameErr = $emailErr = $userErr = $passErr = $phoneErr = $addressErr = $typeErr = $genderErr = $dobErr ="";
    $name = $email = $user = $pass = $phone = $address = $type = $gender = $dob ="";
    $username = '';
    $message = '';
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        if(empty($_POST["name"]))  
        {  
            $nameErr = "Name is Required!";  
        }
        else if(str_word_count($_POST["name"]) <2)
        {
            $nameErr = "Name can not contain less then two wards!";
        }
        else
        {   
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z ]*$/",$name))
            {
                $nameErr = "Only letter and spcae alowed!";
            }
        }

        if (empty($_POST["email"])) 
        {
            $emailErr = "Email is required";
        } 
        else 
        {   
            $email= $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $emailErr = "Your Email is Invalid!!";
            }
            // $email= $_POST['email'];
            // if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,25})$/i",$email)) 
            // {
            //     $emailErr = "Your Email is Invalid!!";
            // }
        }
            
        if(empty($_POST["username"]))  
        {  
            $userErr = "Username is Required!";
        }
        else
        {
            $user = $_POST['username'];
            if(!preg_match("/^[a-zA-Z0-9_ .-]*$/",$user))
            {
                $userErr = "User Name can contain alpha numeric characters, period, dash or underscore only!";
            }
        }
            
        if(empty($_POST["password"]))  
        { 
            $passErr = "Password is Required!";  
        }
        else 
        {
            $pass = $_POST['password'];
            if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$pass) || strlen($pass) <8)
            {
                $passErr = "Password must contain Alphabets,Numbers,Special Charecter!";
            }
        }

        if(empty($_POST["phone"]))  
        {  
             $phoneErr = "Phone Number Required!";  
        }

        if(empty($_POST["address"]))  
        {  
            $addressErr = "Write your address where you want internet connection!!";  
        }

        if(empty($_POST["usertype"]))  
        {  
            $typeErr = "User Type Required!";  
        }

        if(!isset($_POST["gender"]))  
        {  
            $genderErr = "Select your gender(Required)!";  
        } 

        if(empty($_POST["dob"]))  
        {  
            $dobErr = "Pick Your Birthday Date!";  
        }
        
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["phone"]) ||
        empty($_POST["address"]) || empty($_POST["usertype"]) || empty($_POST["dob"]) || !isset($_POST["gender"]))
        {
            $error = "Fill up all field first!";
        }
        else
        {
            if(isset($_POST['addUser'])) 
            {
                $conn = db_conn();
                $selectQuery = "SELECT * FROM modinfo WHERE username = :username";  
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
                        $error = "Username is already Taken!";
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
                            $target_dir = "../resources/img/mod_img/";
                            $target_file = $target_dir .$new_img_name;

                            $data['user_id']     = md5($ran_id);
                            $data['name']     = $_POST['name'];
                            $data['email']    = $_POST['email'];
                            $data['username'] = $_POST['username'];
                            $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
                            $data['phone']    = $_POST['phone'];
                            $data['address']  = $_POST['address'];
                            $data['usertype'] = $_POST['usertype'];
                            $data['gender']   = $_POST['gender'];
                            $data['dob']      = $_POST['dob'];
                            $data['image'] = $new_img_name;

                            if(move_uploaded_file($tmp_name, $target_file))
                            {
                                if (addmod($data)) 
                                {
                                    $message = "<i>New Record Inserted by $Name</i>";
                                }
                                else
                                {
                                    $error = "<i>Dada was not saved!</i>";
                                }
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
        }
    } 
?>