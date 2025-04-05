<?php include_once "Layout/header.php"?>
 <?php       require_once "DB/db.php";
        $sql = "SELECT * FROM tblUser";
        $userlist = mysqli_query($conn,$sql);
?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Danh sach nguoi dung</div>
  </div>
    <!-- Table -->
  <table class="table">
   <thead>
    <tr>
        <td>#</td>
        <td>Ho Ten</td>
        <td>Ten nguoi dung</td>
        <td>La Admin ?</td>
        <td>Action</td>
    </tr>
   </thead>
   <tbody>
    <?php foreach ($userlist as $item) {
            ?>
            <tr>
                <td><?= $item['fldId'] ?></td>
                <td><?= $item['fldFullName'] ?></td>
                <td><?= $item['fldUsername'] ?></td>
                <td>
                <?php if ($item['fldRole'] == 1){
                    echo ("YES");
                } else {
                    echo ("NO");
                } ?>
                </td>
                <td>
                        <form 
                            action="actionUserDelete.php" 
                            method="POST" id="frmDeleteUser_<?= $item['fldId'] ?>"
                            style="display: inline-block;">
                            <input name="frmDeleteId" 
                            type="hidden" value="<?= $item['fldId'] ?>">
                            <i class="fa-solid fa-trash" 
                            onclick="confirmDeleteUser(<?= $item['fldId'] ?>)"></i>
                        </form>

                    <!--Update-->
                    <form 
                            action="actionUserUpdate.php" 
                            method="POST" id="frmUpdateUser_<?= $item['fldId'] ?>"
                            style="display: inline-block;">
                            <input name="frmUpdateId" 
                            type="hidden" value="<?= $item['fldId'] ?>">
                            <i class="fa-solid fa-upload"
                            onclick="confirmUpdateUser(<?= $item['fldId'] ?>)"></i>
                    </form>
                    </td>
                </tr>
            <?php
            }
            ?>
   </tbody>
  </table>
</div>
<script>
    function confirmDeleteUser(userId){
        if(confirm("Do you want to delete user? ")){
            document.getElementById("frmDeleteUser_" + userId).submit();
        }
    }
    function confirmUpdateUser(userId){
        if(confirm("Do you want to Update user? ")){
            document.getElementById("frmUpdateUser_" + userId).submit();
        }
    }
</script>
<?php include_once "Layout/footer.php"?>    