<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<aside class="menu bottom-mar-500">
    <div class="font-size-30 m-l-10 pad-10">Admin Account</div>
    <div class="top-mar-10 user-area">
        <i class="fas fa-address-card font-size-20 bottom-mar-10"></i></i><strong> Profile Settings</strong><br>
        <a href="../view/dashboard.php"><i class="fas fa-tablet-alt"></i> Dashboard</a> <br>
        <a href="../admin_view/view_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-id-card"></i> View Profile</a> <br>
        <a href="../admin_view/update_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-user-edit"></i> Update Profile</a> <br>
        <a href="../admin_view/update_adminSessionImage.php?user_id=<?php echo $user_id ?>"><i class="fas fa-camera-retro"></i> Change Profile Picture</a> <br>
        <a href="../admin_view/update_adminSessionPassword.php?user_id=<?php echo $user_id ?>"> <i class="fas fa-key"></i> Change Password</a> <br>
    </div>
    <div class="admin-area">
        <i class="fas fa-user-shield font-size-20 bottom-mar-10"></i><strong> Administration</strong><br>
        <a href="../admin_view/view_all_admins.php"><i class="fas fa-users-cog"></i> Admins Control</a> <br>
        <a href="../mod_view/view_all_mods.php"><i class="fas fa-users-cog"></i> Moderator Control</a> <br>
        <a href="#"><i class="fas fa-users-cog"></i> Employee Control</a> <br>
        <a href="../user_view/view_all_users.php"><i class="fas fa-users"></i> User Control</a>
    </div>
    <div class="ipack-area">
        <i class="fab fa-internet-explorer font-size-20 bottom-mar-10"></i><strong> Internet Package</strong></a> <br>
        <a href="../internetpack_view/view_all_internetpacks.php"><i class="fab fa-internet-explorer"></i> View All Internet Pack</a> <br>
        <a href="../internetpack_view/add_internetpack.php"><i class="fas fa-plus-square"></i> Add Internet Pack</a> <br>
        <a href="../internetpack_view/search_internetpack.php"><i class="fab fa-searchengin"></i> Search Internet Pack</a>
    </div>
    <div class="payment-area">
        <i class="fas fa-file-invoice-dollar font-size-20 bottom-mar-10"></i><strong> Track Payment</strong></a> <br>
        <a href="../view/Track_userPayment.php"><i class="fas fa-file-invoice-dollar"></i> User Payment</a>
    </div>
    <p class="m-l-10 pad-10"><a href="../controller/logout.php"><i class="fas fa-sign-out-alt bottom-mar-50"></i> Logout</a></p>
</aside>