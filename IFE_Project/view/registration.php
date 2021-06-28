<?php include "../control/registrationCntrl.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>IFE Registration</title>
</head>
<body class="font">
    <?php include('header_before_login.php'); ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <fieldset style="margin-top: 20px;">
            <legend>REGISTRATION</legend>
                <table align="center">
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>:<input type="text" id="name" name="name" >
                        <span class="error">* <?php echo $nameErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>:<input type="email" id="email" name="email">
                        <span class="error">* <?php echo $emailErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="user">User Name</label></td>
                        <td>:<input type="text" id="user" name="user">
                        <span class="error">* <?php echo $userErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="pass">Password</label></td>
                        <td>:<input type="text" id="pass" name="pass">
                        <span class="error">* <?php echo $passErr; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="cpass">Confirm Password &nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                        <td>:<input type="text" id="cpass" name="cpass" >
                        <span class="error">* <?php echo $cpassErr; ?></span></td>
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
                            <legend>Date of Birth</legend>
                            <input type="date" date_format="dd/mm/yyy" id="dob" name="dob" min="1953-01-01" max="1998-12-31">
                            <span class="error">* <?php echo $dobErr; ?></span>
                            </fieldset> <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit" style="font-size: 15px;">
                            <input type="reset" value="Reset" style="font-size: 15px;">
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
        <?php include('footer.php'); ?>
</body>
</html>