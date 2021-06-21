<?php
$message="";
if (isset($_POST["upload"])) 
{
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    if (! in_array($file_extension, $allowed_image_extension)) 
    {
        $response = array(
            "type" => "error",
            "message" => "Upload valid images. Only PNG,JPG and JPEG are allowed."
        );
        echo $result;
    }    
    else if (($_FILES["file-input"]["size"] > 4000000)) 
    {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 4MB"
        );
    } 
    else 
    {
        $messge = "Image uploaded successfully.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .error {color: #FF0000;}
        .font {font-family: 'Courier New', Courier, monospace; color: white;}
        body {background-color: #202020;}
    </style>
</head>
<body class="font">
        <form method="post" action="">
            <fieldset>
                <legend><strong>PROFILE PICTURE</strong></legend>
                <table>
                    <tr>
                        <td colspan="2"><img src="https://masged.net/wp-content/themes/cera-child/assets/images/avatars/user-avatar.png" alt="sampleImage" height="180px"></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="file-input" value="Choose File" style="font-size: 15px;"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <?php  
                                if(isset($message))  
                                {
                                    echo "<br>" .$message;

                                } 
                            ?>
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="upload" value="Submit" style="font-size: 15px;">
            </fieldset>
        </form>      
    </body>
</html>