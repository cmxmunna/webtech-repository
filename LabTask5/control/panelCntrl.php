<?php
    if($Type=="Admin")
    {
        include('../panel/adminpanel.php');
    }
    else if($Type=="Mod")
    {
        include('../panel/modpanel.php');
    } 
    else if($Type=="Home")
    {
        include('../panel/userpanel.php');
    }
    else if($Type=="Corporate")
    {
        include('../panel/userpanel.php');
    }
    else if($Type=="Student")
    {
        include('../panel/userpanel.php');
    }
    else if($Type=="IPTelephony")
    {
        include('../panel/userpanel.php');
    }
    else if($Type=="Host&Develope")
    {
        include('../panel/userpanel.php');
    }
?>