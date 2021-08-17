<?php 
    include '../controller/session.php';
    include '../admin_controller/add_adminCntrl.php';
    
    if($_SESSION['usertype'] == "Admin"){}
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
    <title>Add User</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <div class="better-view">
                    <h1 class="color-cyan">ADD NEW ADMIN</h1>
                    <table>
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td>: <input type="text" id="name" name="name" >
                            <span class="error">* <?php echo $nameErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td>: <input type="email" id="email" name="email">
                            <span class="error">* <?php echo $emailErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="username">User Name</label></td>
                            <td>: <input type="text" id="username" name="username">
                            <span class="error">* <?php echo $userErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td>: <input type="text" id="password" name="password">
                            <span class="error">* <?php echo $passErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone</label></td>
                            <td>: <input type="tel" id="phone" name="phone">
                            <span class="error">* <?php echo $phoneErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label></td>
                            <td>: <input type="text" id="address" name="address">
                            <span class="error">* <?php echo $addressErr; ?></span></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dob">Date of Birth</label></td>
                                <td>: <input type="date" date_format="dd/mm/yyy" id="dob" name="dob" min="1953-01-01" max="1998-12-31">
                                <span class="error">* <?php echo $dobErr; ?></span></td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                    <legend>User Type</legend>
                                    <span class="error">* <?php echo $typeErr; ?></span><br>
                                    <input type="radio" name="usertype" value="Admin"><span class="red"> Admin</span>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                <legend>Gender</legend>
                                <input type="radio" name="gender"  value="Male">Male
                                <input type="radio" name="gender"  value="Female">Female
                                <input type="radio" name="gender"  value="Other">Other  
                                <span class="error">* <?php echo $genderErr;?></span>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                <legend>User Image</legend>
                                <input type="file" name="image">
                                </fieldset> <br>
                            </td>
                        </tr>
                        </table>
                        <table >
                        <tr>
                            <td width="200px">
                                <input type="submit" name="addUser" value="Submit" class="btn">
                            </td>
                            <td>
                                <input type="reset" value="Reset" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="forgot green">
                                <?php  
                                    if(isset($message))  
                                    {  
                                        echo $message;  
                                    }  
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="error">
                                <?php  
                                    if(isset($error))  
                                    {  
                                        echo $error;  
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