<?php include "../controller/dashboardCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Logged In Dashboard</title>
    <style>
        h2 {padding: 5px; color: #accad6; font-size: 40px;}
    </style>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <span class="font-size-40">Welcome </span>
            <h2>
                <?php
                    if(isset($Name))
                    {
                        echo $Name;
                    }
                ?>
            </h2>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>