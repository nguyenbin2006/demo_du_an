<?php

if (isset($_POST['frmName'])) {
    include "DB/db.php";
    $frmName = $_POST['frmName'];
    $frmUsername = $_POST['frmUsername'];
    $frmPass = $_POST['frmPass'];
    $hashPass = password_hash($frmPass, PASSWORD_DEFAULT);
    $frmRole = isset($_POST['frmRole']) ? 1 : 0;
    $sql = "INSERT INTO tbluser (fldFullName, fldUsername, fldPassword, fldRole) 
            VALUES ('$frmName', '$frmUsername', '$hashPass', '$frmRole')";
    // echo $sql;
    // die;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location:index.php");
} else {
    die("Wrong open page");
}