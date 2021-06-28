<?php include "../control/dashboardCntrl.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/ife.css" rel="stylesheet">
    <title>Logged In Dashboard</title>
    <style>
        h2 {padding: 5px; color: #accad6; font-size: 40px;}
    </style>
</head>
<body>
    <?php include('header_after_login.php'); ?>
    <div class="main">
    <?php include('menu.php'); ?>
        <section>
        <h1>Welcome </h1>
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
    <?php include('footer.php'); ?>
</body>
</html>