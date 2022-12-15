<?php
    ini_set('display_errors', 0);
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ERROR | E_WARNING | E_PARSE); 

    session_start();
    include_once "config/connection.php";
    if($_POST){       
        $layout = $_POST['layout'];
        include 'includes/layout/'.$layout.'/header.php';
        include 'includes/layout/'.$layout.'/content.php';
        include 'includes/layout/'.$layout.'/footer.php';
    } else if($_GET['login']){

        include 'includes/layout/auth/header.php';
        include 'includes/layout/auth/content.php';
        include 'includes/layout/auth/footer.php';
    }  else {
        if($_SESSION['isLogin']){
            
            if($_SESSION['role'] == 1){
                $_SESSION['page'] = 'dashboard';
                include 'includes/layout/admin/header.php';
                include 'includes/layout/admin/content.php';
                include 'includes/layout/admin/footer.php';
            } 
            // else if($_SESSION['role'] == 2) {
            //     $_SESSION['page'] = 'beranda';
            //     include 'includes/layout/user/header.php';
            //     include 'includes/layout/user/content.php';
            //     include 'includes/layout/user/footer.php';
            // }
        } else {            
                include 'includes/layout/user/header.php';
                include 'includes/layout/user/content.php';
                include 'includes/layout/user/footer.php';
        } 
        // else {
        //     include 'includes/layout/user/header.php';
        //     include 'includes/layout/user/content.php';
        //     include 'includes/layout/user/footer.php';
        // }
    }
?>
