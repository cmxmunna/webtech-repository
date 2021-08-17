<?php
    require_once '../model/db_connect.php';

    $emailErr ="";
    $email ="";
    $user_id = '';
    $error = '';

    if($_SERVER["REQUEST_METHOD"] == "POST")  
    {  
        $email= $_POST['email'];
        if (empty($_POST["email"])) 
        {
            $emailErr = "Email is Required!!!";
        } 
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $emailErr = "Your Email Format is Invalid!!";
        }
        else if(isset($_POST['submit']))
        {
            $conn = db_conn();
            $selectQuery = "SELECT * FROM userinfo WHERE email = :email";  
            try
            {
                $stmt = $conn-> prepare($selectQuery);  
                $stmt->execute(  
                    array(  
                        'email'     =>     $_POST["email"], 
                    )  
                );  
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                    $user_id = $row['user_id'];
                    header("location: ../user_view/recover_userPassword.php?user_id=$user_id");
                }  
                else  
                {  
                    $error = '<label>This Email not found in Database!</label>';  
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
?>