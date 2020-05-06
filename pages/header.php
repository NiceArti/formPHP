<?php
if (!isset($_SESSION["registred_user"])) {
    if (!isset($_POST['goBtn'])) {
?>
        <div class="row mt-2">
            <div class="col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <form method="post">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" id="login" placeholder="Enter login" name="login">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="col">
                            <input type="submit" class="btn btn-primary" value="go" name="goBtn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4"></div>
        </div>
<?php
    } else {
        if (is_login($_POST['login'], $_POST['pswd'])) {
            include_once('pages/wellcome.php');
        } else {
            echo 'Wrong Wrong Wrong, little liаr!';
        }
    }
} else {
    include_once('pages/wellcome.php');
}
?>