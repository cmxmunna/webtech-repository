<?php
    require_once '../model/ipack_model.php';

    $message ='';
    if (isset($_POST['searchipack'])) 
    {
	    $message = $_POST['name'];
    }
    try 
    {
    	$allSearchedIpack = searchipack($_POST['name']);
        require_once '../internetpack_view/view_searchIpackResult.php';
    } 
    catch (Exception $e) 
    {
    	echo $e->getMessage();
    }
?>

