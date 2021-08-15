<?php
    require_once '../model/db_connect.php';
    session_start();

    $message = '';  

        if(isset($_POST["login"]))  
        {  
            $conn = db_conn();
            $selectQuery = "SELECT * FROM admininfo WHERE username = :username";  
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
                    $_SESSION["user_id"] = $row['user_id'];
                    $_SESSION["name"] = $row['name'];
                    $_SESSION["email"] = $row['email'];
                    $_SESSION["username"] = $row['username'];
                    $_SESSION["password"] = $row['password'];
                    $_SESSION["address"] = $row['address'];
                    $_SESSION["phone"] = $row['phone'];
                    $_SESSION["usertype"] = $row['usertype'];
                    $_SESSION["gender"] = $row['gender'];
                    $_SESSION["dob"] = $row['dob'];
                    $_SESSION["image"] = $row['image'];

                    if(password_verify($_POST["password"], $_SESSION["password"]))
                    {
                        header("location: ../view/dashboard.php");
                        if(empty($_POST["remember"])) 
                        {
                            setcookie("adminusername","");
                            setcookie("adminpassword","");
                        } 
                        else 
                        {
                            setcookie ("adminusername",$_POST["username"],time() + 86400);
                            setcookie ("adminpassword",$_POST["password"],time() + 86400);
                        }
                    }
                    else  
                    {  
                        $message = '⚠ Incorrect Password ⚠';   
                    }
                } 
                else  
                {  
                    $message = '⚠⚠⚠<br> [' .$_POST["username"].'] -- This Username not Exist!';     
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