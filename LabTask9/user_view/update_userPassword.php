<?php
    include "../controller/session.php" ;
    include "../user_controller/update_userPasswordCntrl.php";
    require_once '../user_controller/userinfoCntrl.php';
    $user = fetchuser($_GET['user_id']);
    
    if($_SESSION['usertype'] == "Admin"){}
    else if($_SESSION['usertype'] == "Moderator"){}
    else{header("location: ../controller/hackerCntrl.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Change Password</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <div class="center green"><span><?php if(isset($message)) { echo $message; }?></span></div>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
        <form method="post" action="">
            <div class="top-mar-50">
                <h1 align="center"><legend>CHANGE USER PASSWORD</legend></h1>
                <table align="center">
                    <tr>
                        <td colspan="2"><span class="font-size-20">User Name: &nbsp;&nbsp; <span class="green"> <?php echo $user['name']?></span></span> </td> 
                    </tr>
                    <tr>
                        <td><label for="newPass">New Password</label></td>
                        <td>: <input type="text" id="newPass" name="newPass" placeholder="Type New Password">
                        <span class="error">* <?php echo $newPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cnewPass"> Retype New Password &nbsp;&nbsp;&nbsp;</label></td>
                        <td>: <input type="text" id="cnewPass" name="cnewPass" placeholder="Retype New Password" >
                        <span class="error">* <?php echo $cnewPassErr; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                            <input type="submit" name="change" value="Chanage" class="top-mar-30 btn">
                        </td>
                    </tr>
                </table>
            </div>
        </form> 
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>