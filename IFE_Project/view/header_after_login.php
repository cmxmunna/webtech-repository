<div class="header">
        <a href="../index.php" class="logo"><img src="https://startechnetwork.xyz/LabTask4/resources/img/logo/ife-logo.gif" alt="IFE"></a>
            <div class="header-right">
            <span class="header-log-identity">Logged in as </span> 
            <a href="../view/profile.php">
                <?php
                    if(isset($User))
                    {
                        echo $User;
                    }
                ?>
            </a>
            <a href="../control/logout.php">Logout</a>
        </div>
    </div>