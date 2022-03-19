<?php
include_once "class/function.php";
session_start();
$id = $_SESSION['adminId'];
if ($id==null){
    header("location: index.php?status=notloggedin");
}

?>

<?php
include_once("includes/admin-head.php");
include_once("includes/admin-header.php");
?>
<div class="sb-nav-fixed">
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
                    elseif ($view == "add_cat"){
                    include_once ("view/admin-add-category-view.php");
                }
                    elseif ($view == "manage_cat"){
                        include_once ("view/admin-manage-category-view.php");
                    }
                    elseif ($view == "add_post"){
                        include_once ("view/admin-add-post-view.php");
                    }
                    elseif ($view == "edit_post"){
                        include_once ("view/admin-edit-post-view.php");
                    }
                    elseif ($view == "delete_post"){
                        include_once ("view/admin-delete-post-view.php");
                    }
                }

                ?>
            </div>
        </main>

<?php include_once "includes/admin-footer.php"; ?>
    </div>
</div>
<?php include_once "includes/admin-script.php"; ?>
