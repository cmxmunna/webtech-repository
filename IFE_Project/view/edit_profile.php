<?php include "../control/edit_profileCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>Edit Profile</title>
</head>
<body>
    <?php include('header_after_login.php'); ?>
    <div class="main">
    <?php include('menu.php'); ?>
        <section>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <fieldset>
                    <legend>PROFILE</legend>
                    <table align="center">
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td>: <input type="text" id="name" name="name" value="<?php if(isset($Name)) { echo $Name; } ?>">
                            <span class="error"> <?php echo $nameErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>: <input type="email" id="email" name="email" value="<?php if(isset($Email)) { echo $Email; } ?>">
                            <span class="error"> <?php echo $emailErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>: 
                            <input type="radio" name="gender" value="<?php if(isset($Gender)) { echo $Gender; } ?>">Male
                            <input type="radio" name="gender" value="<?php if(isset($Gender)) { echo $Gender; } ?>">Female
                            <input type="radio" name="gender" value="<?php if(isset($Gender)) { echo $Gender; } ?>">Other
                            <span class="error"> <?php echo $genderErr;?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">Date of Birth</label></td>
                            <td>: <input type="text" id="dob" name="dob" value="<?php if(isset($DOB)) { echo $DOB; } ?>">
                            <span class="error"> <?php echo $dobErr; ?></span>
                            <br><span>&nbsp;&nbsp;<i>(yyyy-mm-dd)</i></span></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" id="submit" name="submit" value="Submit" style="font-size: 15px;">
                            </td>
                            <td>
                            <?php  
                                if(isset($message))  
                                {  
                                    echo $message;  
                                }  
                            ?>
                        </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </section>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>