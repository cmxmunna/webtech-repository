<?php 
    include "../controller/session.php" ;
    include "../user_controller/update_userProfileCntrl.php" ;
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
    <title>Edit Profile</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <div class="center green"><span><?php if(isset($message)) { echo $message; }?></span></div>
            <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <form method="post" action="">
                <div>
                    <h1><legend>EDIT PROFILE</legend></h1>
                    <table>
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td>: <input type="text" id="name" name="name" value="<?php echo $user['name'] ?>">
                            <span class="error"> <?php echo $nameErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>: <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>">
                            <span class="error"> <?php echo $emailErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="username">Username</label></td>
                            <td>: <input type="text" id="username" name="username" value="<?php echo $user['username'] ?>">
                            <span class="error"> <?php echo $userErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label></td>
                            <td>: <textarea id="address" name="address" rows="4" cols="23"><?php echo $user['address'] ?></textarea>
                            <span class="error"> <?php echo $addressErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone</label></td>
                            <td>: <input type="text" id="phone" name="phone" value="<?php echo $user['phone'] ?>">
                            <span class="error"> <?php echo $emailErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="usertype">User type</label></td>
                            <td>
                                <fieldset>
                                    <input type="radio" id="Home" name="usertype" value="Home" <?php if (isset($user['usertype']) && $user['usertype']=="Home") echo "checked";?>><label for="Home" class="green"> Home Internet</label> <br>
                                    <input type="radio" id="Corporate" name="usertype" value="Corporate" <?php if (isset($user['usertype']) && $user['usertype']=="Corporate") echo "checked";?>><label for="Corporate" class="green"> Corporate Internet</label><br>
                                    <input type="radio" id="Student" name="usertype" value="Student" <?php if (isset($user['usertype']) && $user['usertype']=="Student") echo "checked";?>><label for="Student" class="green"> Student Internet</label><br>
                                    <input type="radio" id="IPTelephony" name="usertype" value="IPTelephony" <?php if (isset($user['usertype']) && $user['usertype']=="IPTelephony") echo "checked";?>><label for="IPTelephony" class="green"> IP Telephony</label><br>
                                    <input type="radio" id="Host&Develope" name="usertype" value="Host&Develope" <?php if (isset($user['usertype']) && $user['usertype']=="Host&Develope") echo "checked";?>><label for="Host&Develope" class="green"> Hosting & Developement</label>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>: 
                            <input type="radio" name="gender" value="Male" <?php if (isset($user['gender']) && $user['gender']=="Male") echo "checked";?>>Male
                            <input type="radio" name="gender" value="Female" <?php if (isset($user['gender']) && $user['gender']=="Female") echo "checked";?>>Female
                            <input type="radio" name="gender" value="Other" <?php if (isset($user['gender']) && $user['gender']=="Other") echo "checked";?>>Other
                            <span class="error"> <?php echo $genderErr;?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">Date of Birth</label></td>
                            <td>: <input type="text" id="dob" name="dob" value="<?php echo $user['dob'] ?>">
                            <span class="error"> <?php echo $dobErr; ?></span>
                            <br><span>&nbsp;&nbsp;<i>(yyyy-mm-dd)</i></span></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
                                <input type="submit" name="update" value="Update" class="btn">
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