<?php
    if(!isset($_SESSION)){
        session_start();
    } 
    ob_start();
    session_regenerate_id(true);
    $id_session= session_id();
    $_SESSION['email']= "";
    $_SESSION= array();
    session_destroy();
    header("location:../resources/views")
?>
