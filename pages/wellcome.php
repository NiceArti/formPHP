<?php 
echo '
<form method="post">
    <span>You are Wellcome, ' . $_SESSION["registred_user"] . ' !</span>
    <button name="logout_btn" class="btn btn-primary btn-sm" value="true">LogOut</button>
</form>
';
if (isset($_POST['logout_btn'])) {
    session_destroy();
    echo ' <script>window.location = "index.php?page=1";</script>';
}
?>