<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<aside class="menu">
    <h1 class="top-mar-20">Admin Account</h1><br>

    <i class="fas fa-address-card font-size-20"></i></i> Profile Settings<br>
    <div class="top-mar-10">
        <a href="../view/dashboard.php"><i class="fas fa-tablet-alt"></i> Dashboard</a> <br>
        <a href="../admin_view/view_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-id-card"></i> View Profile</a> <br>
        <a href="../admin_view/update_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-user-edit"></i> Update Profile</a> <br>
        <a href="../admin_view/update_adminSessionImage.php?user_id=<?php echo $user_id ?>"><i class="fas fa-camera-retro"></i> Change Profile Picture</a> <br>
        <a href="../admin_view/update_adminSessionPassword.php?user_id=<?php echo $user_id ?>"> <i class="fas fa-key"></i> Change Password</a> <br>
    </div>
    <br>
    <i class="fas fa-user-shield font-size-20"></i> Admin Control<br>
    <div class="top-mar-10">
        <a href="../admin_view/view_all_admins.php"><i class="fas fa-users-cog"></i> Admins Control</a> <br>
        <a href="../mod_view/view_all_mods.php"><i class="fas fa-users-cog"></i> Moderator Control</a> <br>
        <a href="../employee_view/view_all_employees.php"><i class="fas fa-users-cog"></i> Employee Control</a>
    </div>
    <br>
    <i class="fas fa-users-cog font-size-20"></i> User Control</a> <br>
    <div class="top-mar-10">
        <a href="../user_view/view_all_users.php"><i class="fas fa-users"></i> View All Users</a> <br>
    </div>
    <br>
    <i class="fab fa-internet-explorer font-size-20"></i> Internet Package</a> <br>
    <div class="top-mar-10">
        <a href="../internetpack_view/view_all_internetpacks.php"><i class="fab fa-internet-explorer"></i> View All Internet Pack</a> <br>
        <a href="../internetpack_view/add_internetpack.php"><i class="fas fa-plus-square"></i> Add Internet Pack</a> <br>
        <a href="../internetpack_view/delete_internetpack.php"><i class="fas fa-minus-square"></i> Delete Internet Pack</a> <br>
        <a href="../internetpack_view/search_internetpack.php"><i class="fab fa-searchengin"></i> Search Internet Pack</a> <br>
        <a href="../internetpack_view/update_internetpack.php"><i class="far fa-edit"></i> Update Internet Pack</a> <br>
        <a href="../payment/due_user_payment.php"><i class="fas fa-file-invoice-dollar font-size-20"></i>User Payment</a> <br>
        <p><a href="../control/logout.php"><i class="fas fa-sign-out-alt bottom-mar-50"></i> Logout</a></p>
    </div>
</aside>