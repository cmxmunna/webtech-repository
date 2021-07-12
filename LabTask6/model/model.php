<?php 

require_once 'db_connect.php';

// function ckecklogin($username,$password)
// {
// 	$conn = db_conn();
//     $selectQuery = "SELECT * FROM userinfo WHERE username = :username AND password = :password";
//     try
//     {
//         $stmt = $conn -> prepare($selectQuery);
//         $stmt->execute(
//             array(  
//                 'username'     =>     $_POST["username"],  
//                 'password'     =>     $_POST["password"]  
//            )
//         );
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);
//         $name = $row['name'];
//         $email = $row['email'];
//         $username = $row['username'];
//         $password = $row['password'];
//         $address = $row['address'];
//         $phone = $row['phone'];
//         $usertype = $row['usertype'];
//         $gender = $row['gender'];
//         $dob = $row['dob'];
//         $image = $row['image'];
//         $count = $stmt->rowCount();  
//         if($count > 0)  
//         {  
//             $_SESSION["name"] = $name;
//             $_SESSION["email"] = $email;
//             $_SESSION["username"] = $username;
//             $_SESSION["password"] = $password;
//             $_SESSION["address"] = $address;
//             $_SESSION["phone"] = $phone;
//             $_SESSION["usertype"] = $usertype;
//             $_SESSION["gender"] = $gender;
//             $_SESSION["dob"] = $dob;
//             $_SESSION["image"] = $image;
//         }  
//         else  
//         {  
//             $message = '<label>Invalid Username and Password!</label>';  
//         }
//     }
//     catch(PDOException $e)
//     {
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }

function showallusers()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `userinfo` ';
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showuser($id)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `userinfo` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchuser($user_name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `userinfo` WHERE username LIKE '%$user_name%'";

    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function adduser($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into userinfo (name, email, username, password, phone, address, usertype, gender, dob, image)
    VALUES (:name, :email, :username, :password, :phone, :address, :usertype, :gender, :dob, :image)";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':username' => $data['username'],
        	':password' => $data['password'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':usertype' => $data['usertype'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
        	':image' => $data['image']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateuser($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE userinfo SET name = ?, email = ?, username = ?, address = ?, phone = ?, gender = ?, dob = ? where id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['name'], $data['email'], $data['username'], $data['address'], $data['phone'], $data['gender'], $data['dob'], $id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteuser($id)
{
	$conn = db_conn();
    $selectQuery = "DELETE FROM `userinfo` WHERE `id` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}