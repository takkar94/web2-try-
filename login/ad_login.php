<?php
    require_once '../includes/head.php';
    require_once '../includes/header.php';
    require_once '../includes/nav.php';
    require_once '../includes/sidebar.php';
?>

<div>
<link rel="stylesheet" href="../styles.css">
    <form class="login_user" method="POST" action="log_control.php">
        <label style="margin-left:35%; font-family:arial; font-weight:bold">Admin Login </label><br>
        <label> Username</label> <input type="text" class="name" name="ad_name">
        <label> Password</label> <input type="text" class="password" name="password_ad">
        <label style="margin-left:30%"><button type="submit" style="width:50%"> Submit </button></label>
    </form>
</div>

<?php
     require_once '../includes/footer.php';

?>