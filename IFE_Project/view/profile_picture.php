<?php include "../control/profile_picCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>Profile Picture</title>
</head>
<body>
    <?php include('header_after_login.php'); ?>
    <div class="main">
    <?php include('menu.php'); ?>
        <section>
        <form method="post" action="" enctype="multipart/form-data">
            <fieldset>
                <legend><strong>PROFILE PICTURE</strong></legend>
                <table>
                    <tr>
                        <td colspan="2"><img src="https://masged.net/wp-content/themes/cera-child/assets/images/avatars/user-avatar.png" alt="sampleImage" height="180px"></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="fileupload" value="No file chosen"  style="font-size: 15px;"></td>
                    </tr>
                    <tr colspan="2">
                        <td><span class="error"><?php echo $uploadErr; ?></span></td>
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
                <input type="submit" value="Submit"  style="font-size: 15px;">
            </fieldset>
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
    <?php include('footer.php'); ?>
</body>
</html>