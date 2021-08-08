<?php
    include "../control/session.php" ;
    include "../admin_controller/update_adminPasswordCntrl.php";
    require_once '../admin_controller/admininfoCntrl.php';
    $admin = fetchadmin($_GET['user_id']);
    
    if($_SESSION['usertype'] == "Admin"){}
    else{header("location: ../control/hackerCntrl.php");}
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
    <?php include('../control/panelCntrl.php'); ?>
        <section>
        <h1 ><a href="../admin_view/view_adminProfile.php?user_id=<?php echo $admin['user_id'] ?>" class="link-hvr"><i class="fas fa-arrow-left"></i> Back</a></h1>
        <form method="post" action="">
            <div class="top-mar-50">
                <h1 align="center"><legend>CHANGE ADMIN PASSWORD</legend></h1>
                <table align="center">
                    <tr>
                        <td colspan="2"><span class="font-size-20">Admin Name: &nbsp;&nbsp; <span class="green"> <?php echo $admin['name']?></span></span> </td> 
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
                    <tr>
                        <td colspan="2" class="green">
                            <?php  
                                if(isset($message))  
                                {
                                echo "<br>" .$message;
                                } 
                            ?>
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