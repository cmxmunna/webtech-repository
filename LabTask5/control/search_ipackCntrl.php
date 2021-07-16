<?php
    require_once '../model/model.php';

    $message ='';
    if (isset($_POST['searchipack'])) 
    {
	    $message = $_POST['name'];
    }
    try 
    {
    	$allSearchedIpack = searchipack($_POST['name']);
        require_once '../view/view_searchipack.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

