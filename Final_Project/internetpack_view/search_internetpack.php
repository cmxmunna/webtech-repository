<?php 
    include '../controller/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Search Internet Pack</title>
</head>

<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <form method="post" action="../internetpack_controller/search_ipackCntrl.php">
                <h1 class="color-cyan">
                    <legend>SEARCH INTERNET PACK</legend>
                </h1>
                <table>
                    <tr>
                        <td><input type="text" name="name" class="srch-usr"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="searchipack" value="Search" class="btn"></td>
                    </tr>
                </table>
            </form>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>