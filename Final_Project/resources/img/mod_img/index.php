<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Access Denied</title>
</head>
<body>
    <?php include('../header_footer/header_before_login.php'); ?>
    <div class="m-l-30 top-mar-40">
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
        <h2 class="color-cyan">Access Denied</h2>
        <table>
            <tr>
                <td><span class="error font-size-20">404 Error!</label></td>
            </tr>
            <tr>
                <td><label>You cannot access this directory.</label></td>
            </tr>
        </table>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>