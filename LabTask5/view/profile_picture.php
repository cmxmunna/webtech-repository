<?php include "../control/profile_picCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Profile Picture</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../control/panelCntrl.php'); ?>
        <section>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="top-mar-50">
                    <h1 align="center"><legend>PROFILE PICTURE EDIT</legend></h1>
                    <table align="center">
                        <tr>
                            <td colspan="2"><img  src="../resources/img/user_img/<?php if(isset($Image)) {echo $Image;} ?>" alt="profileImage" height="200px"></td>
                        </tr>
                        <tr>
                            <td><input type="file" name="fileupload" value="No file chosen"  style="font-size: 15px;"></td>
                        </tr>
                        <tr colspan="2">
                            <td><span class="error"><?php echo $uploadErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Submit"  class="btn"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
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
                <table class="center">
                    <tr>
                        <td>
                            <?php  
                                if(isset($uploadSuccess))  
                                {
                                    echo $uploadSuccess;

                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                if(isset($successImg))  
                                {
                                    echo $successImg;

                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>