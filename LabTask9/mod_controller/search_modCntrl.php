<?php
    require_once '../model/mod_model.php';

    $message ='';
    if (isset($_POST['searchuser'])) 
    {
	    $message = $_POST['user_name'];
    }
    try 
    {
    	$allSearchedUsers = searchmod($_POST['user_name']);
        require_once '../mod_view/view_modSearchResult.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

