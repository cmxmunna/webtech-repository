<?php 
    include '../control/session.php';
    include '../control/edit_userprofileCntrl.php';
    require_once '../control/userinfoCntrl.php';
    $user = fetchuser($_GET['id']);
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
    <?php include('../control/panelCntrl.php'); ?>
        <section>
            <form method="post" action="" enctype="multipart/form-data">
                <div>
                    <h1 class="color-cyan">EDIT USER PROFILE</h1>
                    <table>
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td style="width: 250px;">: <input type="text" id="name" name="name" value="<?php echo $user['name'] ?>"> <br>
                            <span class="error"> <?php echo $nameErr; ?></span>
                            </td>
                            <td rowspan="9">
                                <img width="200px" src="../resources/img/user_img/<?php echo $user['image'] ?>"
                                alt="<?php echo $user['name'] ?>"> <br>
                                <input type="file" name="image">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>: <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>"><br>
                            <span class="error"> <?php echo $emailErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="username">Username</label></td>
                            <td>: <input type="text" id="username" name="username" value="<?php echo $user['username'] ?>"><br>
                            <span class="error"> <?php echo $userErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td>: <input type="text" id="password" name="password" value="<?php echo $user['password'] ?>"><br>
                            <span class="error"> <?php echo $addressErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label></td>
                            <td>: <input type="text" id="address" name="address" value="<?php echo $user['address'] ?>"><br>
                            <span class="error"> <?php echo $addressErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone</label></td>
                            <td>: <input type="text" id="phone" name="phone" value="<?php echo $user['phone'] ?>"><br>
                            <span class="error"> <?php echo $emailErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="usertype">User type</label></td>
                            <td class="usr-type">
                                <input type="radio" name="usertype" value="Admin" <?php if (isset($user['usertype']) && $user['usertype']=="Admin") echo "checked";?>><span class="red"> Admin</span> <br>
                                <input type="radio" name="usertype" value="Moderator" <?php if (isset($user['usertype']) && $user['usertype']=="Moderator") echo "checked";?>><span class="yellow"> Moderator</span><br>
                                <input type="radio" name="usertype" value="Home" <?php if (isset($user['usertype']) && $user['usertype']=="Home") echo "checked";?>><span class="green"> Home Internet</span><br>
                                <input type="radio" name="usertype" value="Corporate" <?php if (isset($user['usertype']) && $user['usertype']=="Corporate") echo "checked";?>><span class="green"> Corporate Internet</span><br>
                                <input type="radio" name="usertype" value="Student" <?php if (isset($user['usertype']) && $user['usertype']=="Student") echo "checked";?>><span class="green"> Student Internet</span><br>
                                <input type="radio" name="usertype" value="IPTelephony" <?php if (isset($user['usertype']) && $user['usertype']=="IPTelephony") echo "checked";?>><span class="green"> IP Telephony</span><br>
                                <input type="radio" name="usertype" value="Host&Develope" <?php if (isset($user['usertype']) && $user['usertype']=="Host&Develope") echo "checked";?>><span class="green"> Hosting & Developement</span>
                                <span class="error"> <?php echo $typeErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>: 
                            <input type="radio" name="gender" value="Male" <?php if (isset($user['gender']) && $user['gender']=="Male") echo "checked";?>>Male
                            <input type="radio" name="gender" value="Female" <?php if (isset($user['gender']) && $user['gender']=="Female") echo "checked";?>>Female
                            <input type="radio" name="gender" value="Other" <?php if (isset($user['gender']) && $user['gender']=="Other") echo "checked";?>>Other
                            <br><span class="error"> <?php echo $genderErr;?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">Date of Birth</label></td>
                            <td>: <input type="text" id="dob" name="dob" value="<?php echo $user['dob'] ?>"><br>
                            <span class="error"> <?php echo $dobErr; ?></span>
                        </tr>
                        <tr>
                            <td></td>
                            <td><span>&nbsp;&nbsp;<i>(yyyy-mm-dd)</i></span></td></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <input type="submit" name="updateuser" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td class="green top-mar-20" colspan="2">
                                <span style="font-size: 20px"><?php if(isset($message)) { echo $message; }?></span>
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