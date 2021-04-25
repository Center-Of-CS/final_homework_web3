<?php

session_start();

if(!isset($_SESSION['name']) and !isset($_SESSION['user_id']) and $_SESSION['auth'] != "afg_time" ){
    header("location:login.php");
    exit;
}

if(isset($_GET['logout'])){
    if($_GET['logout']=='ok'){
        include_once 'app/users.php';
        $obj=new user();
        $obj->logout();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once("_heade.php") ?>

    <style>

    .required {
        color:red
    }

    </style>
</head>

<body>

<div id="wrapper" class="wrapper animsition">
    <!-- Navigation -->
    <?php include_once("_nav.php") ?>
    <!-- / Sideer -->
    <?php include_once("_sidebar.php") ?>

    <div class="control-sidebar-bg"></div>
    <!-- Page Content -->
    <div id="page-wrapper">
        <!-- main content -->
            <?php

                $page = (!empty($_GET['page'])) ? $_GET['page'] : 'index';
                
                switch ($page) {

                    case 'index':
                        include_once("view/index.php");
                        break;

                    case 'addContact':
                        include_once("view/addContact.php");
                        break;

                    case 'listContact':
                        include_once("view/listContact.php");
                        break;

                    case 'index3':
                        include_once("index.php");
                        break;

                    default:
                        include_once("view/index.php");
                      
                  }
            ?>
        <!-- /.main content -->
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<?php include_once("_script.php") ?>
<?php require_once ('_alert.php'); ?>
</body>
</html>
