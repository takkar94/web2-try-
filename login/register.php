<?php
    require_once '../includes/head.php';
    require_once '../includes/header.php';
    require_once '../includes/nav.php';
    require_once '../includes/sidebar.php';
    require './log_control.php'
?>

<?php
     if(isset($_POST["submit"])){

         $control = new Control();
         $msg = $control -> entry();
         echo $msg;

     }
?>

<div>
<link rel="stylesheet" href="../styles.css">
    <form  action="register.php" class="login_user" method="POST">
        <label style="margin-left:35%; font-family:arial; font-weight:bold">Register </label><br>
        <label> Username</label> <input type="text" class="name" name="reg_name">
        <label> Password</label> <input type="text" class="password" name="password_reg">
        <label style="margin-left:30%"><button type="submit" name="submit" style="width:50%"> Submit </button></label>
    </form>
</div>

<?php
     require_once '../includes/footer.php';
?>