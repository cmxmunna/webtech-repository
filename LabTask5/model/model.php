<?php 

require_once 'db_connect.php';

// // LOGIN FUNCTION START
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
// // LOGIN FUNCTION END

// USER CRUD START
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
    $selectQuery = "UPDATE userinfo SET name = ?, email = ?, username = ?, password = ?, phone = ?, address = ?, usertype = ?, gender = ?, dob = ?, image = ? where id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['name'], $data['email'], $data['username'], $data['password'], $data['phone'], $data['address'], $data['usertype'], $data['gender'], $data['dob'], $data['image'], $id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function updateprofile($id, $data)
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
// USER CRUD END

// INTERNET PACK CRUD START
function showallipack()
{
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `internetpack` ';
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

function showipack($id)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `internetpack` where id = ?";

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

function searchipack($name)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `internetpack` WHERE name LIKE '%$name%'";

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

function addipack($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into internetpack (name, speed, usertype, conntype, time, support, included, image, price, display)
    VALUES (:name, :speed, :usertype, :conntype, :time, :support, :included, :image, :price, :display)";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':speed' => $data['speed'],
        	':usertype' => $data['usertype'],
        	':conntype' => $data['conntype'],
            ':time' => $data['time'],
            ':support' => $data['support'],
            ':included' => $data['included'],
            ':image' => $data['image'],
            ':price' => $data['price'],
        	':display' => $data['display']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateipack($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE internetpack SET name = ?, speed = ?, usertype = ?, conntype = ?, time = ?, support = ?, usertype = ?, included = ?, image = ?, price = ?, display = ? where id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['name'], $data['speed'], $data['usertype'], $data['conntype'], $data['time'], $data['support'], $data['usertype'], $data['included'], $data['image'], $data['price'], $data['display'], $id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteipack($id)
{
	$conn = db_conn();
    $selectQuery = "DELETE FROM `internetpack` WHERE `id` = ?";
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

// INTERNET PACK CRUD END