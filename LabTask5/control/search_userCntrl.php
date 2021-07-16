<?php
    require_once '../model/model.php';

    $message ='';
    if (isset($_POST['searchuser'])) 
    {
	    $message = $_POST['user_name'];
    }
    try 
    {
    	$allSearchedUsers = searchuser($_POST['user_name']);
        require_once '../view/view_searchuser.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

