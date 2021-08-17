<?php
    require_once '../model/user_model.php';

    $message ='';
    if (isset($_POST['searchuser'])) 
    {
	    $message = $_POST['user_name'];
    }
    try 
    {
    	$allSearchedUsers = searchuser($_POST['user_name']);
        require_once '../user_view/view_userSearchResult.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

