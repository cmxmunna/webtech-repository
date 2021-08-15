<?php 

require_once 'db_connect.php';

// INTERNET PACK CRUD START
function showallipacks()
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

function showipack($pack_id)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `internetpack` where pack_id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$pack_id]);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

// Ipack Image Change
function updateInernetPackImage($pack_id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE internetpack SET image = ? where pack_id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['image'], $pack_id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
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
    $selectQuery = "INSERT into internetpack (pack_id, name, speed, usertype, conntype, time, support, included, image, price, display)
    VALUES (:pack_id, :name, :speed, :usertype, :conntype, :time, :support, :included, :image, :price, :display)";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':pack_id' => $data['pack_id'],
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

function updateipack($pack_id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE internetpack SET name = ?, speed = ?, usertype = ?, conntype = ?, time = ?, support = ?, usertype = ?, included = ?, price = ?, display = ? where pack_id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        $data['name'], $data['speed'], $data['usertype'], $data['conntype'], $data['time'], $data['support'], $data['usertype'], $data['included'], $data['price'], $data['display'], $pack_id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteipack($pack_id)
{
	$conn = db_conn();
    $selectQuery = "DELETE FROM `internetpack` WHERE `pack_id` = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$pack_id]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

// INTERNET PACK CRUD END