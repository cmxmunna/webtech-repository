<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<aside class="menu">
    <h1 class="top-mar-20">User Account</h1><br>

    <i class="fas fa-address-card font-size-20"></i></i> Profile Settings<br>
    <div class="top-mar-10">
        <a href="../view/dashboard.php"><i class="fas fa-tablet-alt"></i> Dashboard</a> <br>
        <a href="../user_view/view_userSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-id-card"></i> View Profile</a> <br>
        <a href="../user_view/update_userSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-user-edit"></i> Update Profile</a> <br>
        <a href="../user_view/update_userSessionImage.php?user_id=<?php echo $user_id ?>"><i class="fas fa-camera-retro"></i> Change Profile Picture</a> <br>
        <a href="../user_view/update_userSessionPassword.php?user_id=<?php echo $user_id ?>"> <i class="fas fa-key"></i> Change Password</a> <br>
    </div>
</aside>