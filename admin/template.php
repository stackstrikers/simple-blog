<?php
include_once("includes/admin-head.php");
include_once("includes/admin-header.php");
?>
<body class="sb-nav-fixed">
<?php
include_once("includes/admin-top-navbar.php");
include_once("includes/admin-sidenav.php");
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <?php if(isset($view)){
                    if($view == "dashboard"){
                        include_once ("view/admin-dashboard-view.php");
                    }
                }

                ?>
            </div>
        </main>
<?php
include_once "includes/admin-footer.php";
include_once "includes/admin-script.php";
?>
