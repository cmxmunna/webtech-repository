<?php
    require_once 'db_connect.php';

    // Update Admin Profile
    function updateModProfile($user_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE modinfo SET name = ?, email = ?, username = ?, phone = ?, address = ?, gender = ?, dob = ? where user_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['name'], $data['email'], $data['username'], $data['phone'], $data['address'], $data['gender'], $data['dob'], $user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }

    // Admin Profile Image Change
    function updateModImage($user_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE modinfo SET image = ? where user_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['image'], $user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }

    //Admin Password Change
    function updateModPassword($user_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE modinfo SET password = ? where user_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['password'], $user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }


    // Admin CRUD START
    function showallmods()
    {
        $conn = db_conn();
        $selectQuery = 'SELECT * FROM `modinfo` ';
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
    
    function showmod($user_id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `modinfo` where user_id = ?";
    
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$user_id]);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row;
    }
    
    function addmod($data)
    {
        $conn = db_conn();
        $selectQuery = "INSERT into modinfo (user_id, name, email, username, password, phone, address, usertype, gender, dob, image)
        VALUES (:user_id, :name, :email, :username, :password, :phone, :address, :usertype, :gender, :dob, :image)";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':user_id' => $data['user_id'],
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
    
    function updatemod($user_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE modinfo SET name = ?, email = ?, username = ?, password = ?, phone = ?, address = ?, usertype = ?, gender = ?, dob = ?, image = ? where user_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['name'], $data['email'], $data['username'], $data['password'], $data['phone'], $data['address'], $data['usertype'], $data['gender'], $data['dob'], $data['image'], $user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    function deletemod($user_id)
    {
        $conn = db_conn();
        $selectQuery = "DELETE FROM `modinfo` WHERE `user_id` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    function searchmod($user_name)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `modinfo` WHERE username LIKE '%$user_name%'";
    
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
    // USER CRUD END
?>