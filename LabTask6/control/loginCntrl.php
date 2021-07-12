<?php
    require_once '../model/db_connect.php';
    session_start();

    $userErr = $passErr ="";
    $user = $pass ="";
    $message = '';  

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {  
        if(empty($_POST["username"]))  
        {  
            $userErr = "User Name Required!";  
        }
        else if(strlen($_POST["username"]) <2)
        {
            $userErr = "User Name must contain at least two (2) characters";
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
            $passErr = "Password Required!";  
        }  
        else if(strlen($_POST['password']) <8)
        {
            $passErr = "Password can not be less than eight (8) characters";
        }  

        if(isset($_POST["login"]))  
        {  
            $conn = db_conn();
            $selectQuery = "SELECT * FROM userinfo WHERE username = :username AND password = :password";  
            try
            {
                $stmt = $conn-> prepare($selectQuery);  
                $stmt->execute(  
                    array(  
                        'username'     =>     $_POST["username"],  
                        'password'     =>     $_POST["password"]  
                    )  
                );  
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $username = $row['username'];
                $password = $row['password'];
                $address = $row['address'];
                $phone = $row['phone'];
                $usertype = $row['usertype'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $image = $row['image'];
                $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                    $_SESSION["id"] = $id;
                    $_SESSION["name"] = $name;
                    $_SESSION["email"] = $email;
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;
                    $_SESSION["address"] = $address;
                    $_SESSION["phone"] = $phone;
                    $_SESSION["usertype"] = $usertype;
                    $_SESSION["gender"] = $gender;
                    $_SESSION["dob"] = $dob;
                    $_SESSION["image"] = $image;
                    header("location: ../view/dashboard.php");  
                }  
                else  
                {  
                    $message = '<label>Invalid Username and Password!</label>';  
                }
            }   
            catch(PDOException $e)
            {
              echo $e->getMessage();
            }
            $conn = null;
            return true;   
        }  
         

        // // Login session using json
        // $data = file_get_contents("../resources/files/data.json");
        // $data = json_decode($data, true);  

        // session_start();
            
        // if (isset($_POST['login'])) 
        // {               
        //     foreach($data as $row)
        //     {
        //         if($row["username"] == $_POST['username'] && $row["password"] == $_POST['password'])
        //         {
        //             $_SESSION['name'] = $row["name"];
        //             $_SESSION['email'] = $row["e-mail"];
        //             $_SESSION['username'] = $row["username"];
        //             $_SESSION['password'] = $row["password"];
        //             $_SESSION['phone'] = $row["phone"];
        //             $_SESSION['address'] = $row["address"];
        //             $_SESSION['usertype'] = $row["user-type"];
        //             $_SESSION['gender'] = $row["gender"];
        //             $_SESSION['dob'] = $row["dob"];

        //             header("location: ../view/dashboard.php");
        //         }
        //         else
        //         {
        //             $message = "Invalid Username or Password!";
        //         }
        //     } 
        // }
        
    } 
    if(!empty($_POST["remember"])) 
    {
        setcookie ("username",$_POST["username"],time()+3600);
        setcookie ("password",$_POST["password"],time()+3600);
    } 
    else 
    {
        setcookie("username","");
        setcookie("password","");
    }

    
?>