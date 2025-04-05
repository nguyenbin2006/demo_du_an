<?php
if (
    $_SERVER["REQUEST_METHOD"] == "POST" &&
    isset($_POST['frmDeleteId'])
    ) {
    include "DB/db.php";
    $frmUserId = $_POST['frmDeleteId'];
    

    $sql = "DELETE FROM tbluser WHERE frdId=" .$frmUserId;
    echo $sql;
    die;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location:index.php");
} else {
    die("Wrong open page");
}