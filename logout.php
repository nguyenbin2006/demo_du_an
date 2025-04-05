<?php 
    if(session_status()== PHP_SESSION_NONE){
        session_start();//Chi khoi dong session neu chua co session nao chay
    }
    session_destroy();
    header('location:login.php');
?>
