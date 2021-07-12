<?php include "../control/edit_profileCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Edit Profile</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../control/panelCntrl.php'); ?>
        <section>
            <form method="post" action="">
                <div>
                    <h1 align="center"><legend>EDIT PROFILE</legend></h1>
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
                            <td><label for="username">Username</label></td>
                            <td>: <input type="text" id="username" name="username" value="<?php if(isset($User)) { echo $User; } ?>">
                            <span class="error"> <?php echo $userErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label></td>
                            <td>: <input type="text" id="address" name="address" value="<?php if(isset($Address)) { echo $Address; } ?>">
                            <span class="error"> <?php echo $addressErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone</label></td>
                            <td>: <input type="text" id="phone" name="phone" value="<?php if(isset($Phone)) { echo $Phone; } ?>">
                            <span class="error"> <?php echo $emailErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="usertype">User type</label></td>
                            <td>: <label> <?php if(isset($Type)) { echo $Type; } ?> </label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>: 
                            <input type="radio" name="gender" value="Male" <?php if (isset($Gender) && $Gender=="Male") echo "checked";?>>Male
                            <input type="radio" name="gender" value="Female" <?php if (isset($Gender) && $Gender=="Female") echo "checked";?>>Female
                            <input type="radio" name="gender" value="Other" <?php if (isset($Gender) && $Gender=="Other") echo "checked";?>>Other
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
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <input type="submit" name="update" value="Update" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td class="green" colspan="2">
                                <?php  
                                    if(isset($message))  
                                    {  
                                        echo $message;  
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