<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Check if session data exists
if (!isset($_SESSION['mobilenumber']) || !isset($_SESSION['email'])) {
    echo "<script>alert('Session data is missing. Please try again.');</script>";
    exit;
}

if (isset($_POST['submit'])) {
    // Get data from session
    $mobno = $_SESSION['mobilenumber'];
    $email = $_SESSION['email'];

    // Ensure the new password matches the confirmation password
    if ($_POST['newpassword'] !== $_POST['confirmpassword']) {
        echo "<script>alert('New Password and Confirm Password do not match');</script>";
        return;
    }

    // Hash the new password
    $newpassword = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);

    // Escape inputs to prevent SQL injection
    $mobno = mysqli_real_escape_string($con, $mobno);
    $email = mysqli_real_escape_string($con, $email);

    // Run the update query
    $query = mysqli_query($con, "UPDATE tbladmin SET Password = '$newpassword' WHERE Email = '$email' AND MobileNo = '$mobno'");

    // Check if the query was successful
    if ($query) {
        $_SESSION['msg'] = "Password successfully changed";
        session_destroy();
        header('location: index.php');
    } else {
        $_SESSION['msg'] = "Failed to change the password. Please try again.";
    }
}
?>








<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>VSMS | Reset Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>

<script type="text/javascript">
function checkpass()
{
if(document.resetpassword.newpassword.value!=document.resetpassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.resetpassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h3 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span>VSMS | Reset Password</span>
                                </a>
                            </h3>
                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

                            <form class="" action="" name="resetpassword" method="post" onSubmit="return checkpass();">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">New Password</label>
                                        <input class="form-control" type="password" id="newpassword" name="newpassword" required="" >
                                    </div>
                                </div>
                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Confirm Password</label>
                                        <input class="form-control" type="password" id="confirmpassword" name="confirmpassword" required="" >
                                    </div>
                                </div>

                                
                               

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="submit">Reset</button>
                                    </div>
                                </div>

                            </form>

                                                      <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">For Existing User!! <a href="index.php" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2020 © Vehicle Service Managment System</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>