<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<aside class="menu bottom-mar-500">
    <div class="font-size-30 m-l-10 pad-10">User Account</div>
    <div class="top-mar-10 user-area">
        <i class="fas fa-address-card font-size-20 bottom-mar-10"></i></i><strong> Profile Settings</strong><br>
        <a href="../view/dashboard.php"><i class="fas fa-tablet-alt"></i> Dashboard</a> <br>
        <a href="../user_view/view_userSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-id-card"></i> View Profile</a> <br>
        <a href="../user_view/update_userSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-user-edit"></i> Update Profile</a> <br>
        <a href="../user_view/update_userSessionImage.php?user_id=<?php echo $user_id ?>"><i class="fas fa-camera-retro"></i> Change Profile Picture</a> <br>
        <a href="../user_view/update_userSessionPassword.php?user_id=<?php echo $user_id ?>"> <i class="fas fa-key"></i> Change Password</a> <br>
    </div>
    <div class="ipack-area">
        <i class="fab fa-internet-explorer font-size-20 bottom-mar-10"></i><strong> Internet Package</strong></a> <br>
        <a href="../internetpack_view/subscribe_internetpack.php"><i class="fab fa-internet-explorer"></i> Subscribe Package</a>
    </div>
    <div class="payment-area">
        <i class="fas fa-file-invoice-dollar font-size-20 bottom-mar-10"></i><strong> Transection History</strong></a> <br>
        <a href="../view/recent_paymentHistory.php"><i class="fas fa-file-invoice-dollar"></i> Recent Subscription</a> <br>
        <a href="../view/user_paymentHistory.php?user_id=<?php echo $user_id ?>"><i class="fas fa-file-invoice-dollar"></i> History</a>
    </div>
    <p class="m-l-10 pad-10"><a href="../controller/logout.php"><i class="fas fa-sign-out-alt bottom-mar-50"></i> Logout</a></p>
</aside>