<?php
include_once ("class/function.php");
$objone = new blogconn();

if(isset($_POST['admin_login'])){
$objone -> admin_login($_POST);
}


?>


<?php
include_once("includes/admin-head.php");
?>
<?php
include_once("includes/admin-header.php");
?>

<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <?php if (isset($_GET['status'])){
                                    if ($_GET['status'] == 'wrong'){
                                        echo ' <div class="container my-4 p-4 shadow text-center fw-bold"> Email or Password is wrong. Try Again </div>';
                                    }
                                    elseif ($_GET['status'] == 'notloggedin'){
                                        echo ' <div class="container my-4 p-4 shadow text-center fw-bold"> You need to login first to access this page </div>';
                            }
                                }

                                ?>
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Welcome to Blog</h3></div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" name="admin_email" placeholder="Enter email address" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="admin_pass" placeholder="Enter password" />
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <input type="submit" name="admin_login" value="Login" class="form-control btn btn-info" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php include_once("includes/admin-footer.php"); ?>
</div>
<?php include_once("includes/admin-script.php"); ?>