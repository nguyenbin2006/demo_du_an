<?php
include "Layout/header.php"; 
?>
<div class="panel panel-success">
    <div class="panel-heading">Thêm người dùng</div>
    <div class="panel-body">
        <form action="adduser_POST.php" method="POST">
            <div class="form-group">
                <label for="frmName">Họ và Tên:</label>
                <input id="frmName" name="frmName" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmUsername">Tên người dùng:</label>
                <input id="frmUsername" name="frmUsername" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmPass">Mật khẩu </label>
                <input id="frmPass" name="frmPass" type="Password" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmRole">Là quản trị ?</label>
                <input id="frmRole" name="frmRole" type="checkbox" text="Là Quản Trị"
                    value="Admin" class="btn-check">
            </div>
            <div class="form-group">
                <input id="frmsubmit" name="frmsubmit" type="Submit"
                    class="btn  btn-primary btn-bg-success bt" value="Thêm Người DÙng Mới">
            </div>


        </form>
    </div>
</div>
<?php
include "layout/footer.php"; ?>
