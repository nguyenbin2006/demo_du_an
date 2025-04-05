<?php
include "layout/headerlogin.php"; ?>
<div class="panel panel-success">
    <div class="panel-heading">Login</div>
    <?php
    if (isset($_SESSION['ErrorMessage'])) {
        echo "<div class='alert alert-danger'>" .
            $_SESSION['ErrorMessage']
            .
            "</div>";
        unset($_SESSION['ErrorMessage']);
    }
    ?>
    <div class="panel-body">
        <form action="login_POST.php" method="POST">
            <div class="form-group">
                <label for="frmUsername">Tên người dùng:</label>
                <input id="frmUsername" name="frmUsername" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmPass">Mật khẩu </label>
                <input id="frmPass" name="frmPass" type="Password" class="form-control">
            </div>
            <div class="form-group">
                <input id="frmsubmit" name="frmsubmit" type="Submit"
                    class="btn  btn-primary btn-bg-success bt" value="Login">
            </div>
        </form>
    </div>
</div>