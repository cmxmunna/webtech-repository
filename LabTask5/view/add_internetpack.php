<?php 
    include '../control/session.php';
    include '../control/add_ipackCntrl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Add Internet Pack</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../control/panelCntrl.php'); ?>
        <section>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <div class="better-view">
                    <h1 class="color-cyan">ADD NEW INERNET PACK</h1>
                    <table>
                        <tr>
                            <td><label for="name">Pack Name</label></td>
                            <td>: <input type="text" id="name" name="name" >
                            <span class="error">* <?php echo $nameErr; ?></span></td>
                        </tr>
                        <tr>
                            <td><label for="speed">Speed</label></td>
                            <td>: <input type="text" id="speed" name="speed">
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td><label for="usertype">User type</label></td>
                            <td>
                                <input type="radio" id="Home" name="usertype" value="Home"><label for="Home" class="green" /> Home Internet</label> <br>
                                <input type="radio" id="Corporate" name="usertype" value="Corporate"><label for="Corporate" class="green"> Corporate Internet</label><br>
                                <input type="radio" id="Student" name="usertype" value="Student"><label for="Student" class="green"> Student Internet</label><br>
                                <input type="radio" id="IPTelephony" name="usertype" value="IPTelephony"><label for="IPTelephony" class="green"> IP Telephony</label><br>
                                <input type="radio" id="Host&Develope" name="usertype" value="Host&Develope"><label for="Host&Develope" class="green"> Hosting & Developement</label>
                                <br><span class="error"> <?php echo $usertypeErr; ?></span>
                            </td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td><label for="conntype">Connection Type</label></td>
                            <td>
                                <input type="radio" id="Fiber Optics" name="conntype" value="Fiber Optics"><label for="Fiber Optics" class="red"> Fiber Optics</label><br>
                                <input type="radio" id="Cat6 Cable" name="conntype" value="Cat6 Cable"><label for="Cat6 Cable" class="green"> CAT6 Cable</label><br>
                                <input type="radio" id="Wireless" name="conntype" value="Wireless"><label for="Wireless" class="yellow"> Wireless</label><br>
                                <input type="radio" id="Other" name="conntype" value="Other"><label for="Other" class="color-cyan"> Other</label>
                                <br><span class="error"> <?php echo $conntypeErr;?></span>
                            </td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td>
                                <label for="time">Using Time</label>
                            </td>
                            <td>
                                <input type="radio" id="24h" name="time" value="24 Hour Unlimited"><label for="24h" class="green"> 24 Hour Unlimited</label><br>
                                <input type="radio" id="day" name="time" value="Day Time Only"><label for="day" class="yellow"> Day Time Only</label><br>
                                <input type="radio" id="night" name="time" value="Night Time Only"><label for="night" class="red"> Night Time Only</label><br>
                                <input type="radio" id="Other2" name="time" value="Other"><label for="Other2" class="color-cyan"> Other</label>
                            </td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td>
                                <label for="support">Support</label>
                            </td>
                            <td>
                                : <input type="text" id="support" name="support">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="included">Included</label>
                            </td>
                            <td>
                                : <input type="text" id="included" name="included">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="price">Price</label>
                            </td>
                            <td>
                                : <input type="text" id="price" name="price">
                                <span class="error">* <?php echo $priceErr; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="display">Display?</label></td>
                            <td>: 
                            <input type="radio" id="yes" name="display" value="Yes"><label for="yes" class="green"> Yes</label>
                            <input type="radio" id="no" name="display" value="No"><label for="no" class="red"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                <legend>User Image</legend>
                                <input type="file" name="image">
                                <span><i>(optional)</i></span>
                                </fieldset> <br>
                            </td>
                        </tr>
                        </table>
                        <table >
                        <tr>
                            <td width="200px">
                                <input type="submit" name="addipack" value="Submit" class="btn">
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