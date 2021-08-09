<?php 
    include "../control/session.php" ;
    include "../user_controller/update_userSessionImageCntrl.php" ;
    require_once '../user_controller/userinfoCntrl.php';
    $user = fetchuser($_GET['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Profile Image</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../control/panelCntrl.php'); ?>
        <section>
        <h1 ><a href="../user_view/view_userProfile.php?user_id=<?php echo $user['user_id'] ?>" class="link-hvr"><i class="fas fa-arrow-left"></i> Back</a></h1>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="top-mar-50">
                    <h1><legend>PROFILE PICTURE EDIT</legend></h1>
                    <table>
                        <tr>
                            <td colspan="2"><img  src="../resources/img/user_img/<?php echo $user['image'] ?>" alt="<?php echo $user['name'] ?>" height="200px"></td>
                        </tr>
                        <tr>
                            <td><input type="file" name="image" style="font-size: 15px;"></td>
                        </tr>
                        <tr colspan="2">
                            <td><span class="error"><?php echo $uploadErr; ?></span></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                            <td><input type="submit" value="upload" name="upload" class="btn"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="green">
                                <?php  
                                    if(isset($message))  
                                    {
                                        echo $message;

                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </form>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>