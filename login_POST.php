<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' &&
    isset($_POST['frmUsername']) &&
    isset($_POST['frmPass'])
    ){
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); // Chỉ khởi động session nếu chưa có session nào chạy
        }
        require "DB/db.php";
        $frmUsername = htmlspecialchars($_POST['frmUsername']);
        $frmPass = ($_POST['frmPass']);
        $sql = "SELECT * FROM tblUser where fldUserName = '" . $frmUsername . "'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) != 1){
            $_SESSION["ErrorMessage"] = "Wrong Username or Password";
            header('location:login.php');
            exit();
        }
        $user = mysqli_fetch_assoc($result);
        if(password_verify($frmPass,$user['fldPassword'])){
            $_SESSION["UserLogin"] = $user['fldUsername'];
            $_SESSION["NameLogin"] = $user['fldFullname'];
            $_SESSION["RoleLogin"] = $user['fldRole'];
            $_SESSION["IDLogin"] = $user['fldId'];
            if($user['fldRole'] == 0){
                header('location:user/home.php');
            }else{
                header('location:admin/home.php');
            }
           
            exit();
        }else{
            $_SESSION["ErrorMessage"] = "Wrong Username or Password";
            header('location:login.php');
            exit();
        }
    }
?>