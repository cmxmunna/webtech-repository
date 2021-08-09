<?php
    require_once '../model/admin_model.php';

    $message ='';
    if (isset($_POST['searchuser'])) 
    {
	    $message = $_POST['user_name'];
    }
    try 
    {
    	$allSearchedUsers = searchadmin($_POST['user_name']);
        require_once '../admin_view/view_adminSearchResult.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

