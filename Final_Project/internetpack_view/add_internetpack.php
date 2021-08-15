<?php 
    include '../controller/session.php';
    include '../internetpack_controller/add_ipackCntrl.php';
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
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return ipackAddValidation()" method="post" enctype="multipart/form-data">
                <div class="better-view m-l-20">
                    <h1 class="color-cyan">ADD NEW INERNET PACK</h1>
                    <table>
                        <tr>
                            <td><label for="name">Pack Name</label></td>
                            <td>: <input type="text" id="name" name="name" >
                            <span id="nameErr" class="error">*</span></td>
                        </tr>
                        <tr>
                            <td><label for="speed">Speed</label></td>
                            <td>: <input type="text" id="speed" name="speed">
                            <span id="speedErr" class="error">*</span></td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td><label for="usertype">User type</label></td>
                            <td>
                                <input type="radio" id="Home" name="usertype" value="Home"><label for="Home" class="green"> Home Internet</label> <br>
                                <input type="radio" id="Corporate" name="usertype" value="Corporate"><label for="Corporate" class="green"> Corporate Internet</label><br>
                                <input type="radio" id="Student" name="usertype" value="Student"><label for="Student" class="green"> Student Internet</label><br>
                                <input type="radio" id="IPTelephony" name="usertype" value="IPTelephony"><label for="IPTelephony" class="green"> IP Telephony</label><br>
                                <input type="radio" id="Host&Develope" name="usertype" value="Host&Develope"><label for="Host&Develope" class="green"> Hosting & Developement</label>
                                <br><span id="usertypeErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td><label for="conntype">Connection Type</label></td>
                            <td>
                                <input type="radio" id="FiberOptics" name="conntype" value="Fiber Optics"><label for="FiberOptics" class="red"> Fiber Optics</label><br>
                                <input type="radio" id="Cat6Cable" name="conntype" value="Cat6 Cable"><label for="Cat6Cable" class="green"> CAT6 Cable</label><br>
                                <input type="radio" id="Wireless" name="conntype" value="Wireless"><label for="Wireless" class="yellow"> Wireless</label><br>
                                <input type="radio" id="connTypeOther" name="conntype" value="Other"><label for="connTypeOther" class="color-cyan"> Other</label>
                                <br><span id="conntypeErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td>
                                <label for="time">Using Time</label>
                            </td>
                            <td>
                                <input type="radio" id="any" name="time" value="24 Hour Unlimited"><label for="any" class="green"> 24 Hour Unlimited</label><br>
                                <input type="radio" id="day" name="time" value="Day Time Only"><label for="day" class="yellow"> Day Time Only</label><br>
                                <input type="radio" id="night" name="time" value="Night Time Only"><label for="night" class="red"> Night Time Only</label><br>
                                <input type="radio" id="OtherTime" name="time" value="Other"><label for="OtherTime" class="color-cyan"> Other</label>
                                <br><span id="timeErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr><td></td><td class="red">---------------------------------</td></tr>
                        <tr>
                            <td>
                                <label for="support">Support</label>
                            </td>
                            <td>
                                : <input type="text" id="support" name="support">
                                <span id="supportErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="included">Included</label>
                            </td>
                            <td>
                                : <input type="text" id="included" name="included">
                                <span id="includedErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="price">Price</label>
                            </td>
                            <td>
                                : <input type="text" id="price" name="price">
                                <span id="priceErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="display">Display?</label></td>
                            <td>: 
                            <input type="radio" id="yes" name="display" value="Yes"><label for="yes" class="green"> Yes</label>
                            <input type="radio" id="no" name="display" value="No"><label for="no" class="red"> No</label>
                            <span id="displayErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                <legend>User Image</legend>
                                <input type="file" name="image" id="image">
                                <span id="imageErr" class="error">*</span>
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
        <br><br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
    <script src="../resources/js/ife.js?v=<?php echo time(); ?>"></script>
</body>
</html>