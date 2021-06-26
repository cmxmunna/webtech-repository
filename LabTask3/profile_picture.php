<?php
$uploadErr="";
$uploadSuccess="";
$message="";
$success="";
$successImg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{   
    $target_file="files/".$_FILES["fileupload"]["name"];
    $file_extension = pathinfo($_FILES["fileupload"]["name"], PATHINFO_EXTENSION);
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "PNG",
        "JPG",
        "JPEG"
    );
    if (!in_array($file_extension, $allowed_image_extension)) 
    {
        $uploadErr = "Upload valid images. Only PNG,JPG and JPEG are allowed.";
    } 
    else if(($_FILES["fileupload"]["size"] > 4000000)) 
    {
        $uploadErr= "Image size exceeds 4MB";
    } 
     
    else if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_file))
    {
       $uploadSuccess= "you have uploaded ".$_FILES["fileupload"]["name"];
       $successImg= "<img src=" .$target_file.">";
       $message = "Image uploaded successfully.";
    }
}
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Image</title>
    <style>
        .error {color: #FF0000;}
        .center {margin-left: auto; margin-right: auto; margin-top: 20px;}
        .font {font-family: 'Courier New', Courier, monospace; color: white;}
        body {background-color: #202020;}
    </style>
</head>
<body class="font">
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
    </body>
</html>