<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Automatically set session variables for testing
$_SESSION['eid'] = 1; // Assume the user ID is 1 for testing purposes
$_SESSION['Email'] = 'testuser@example.com'; // Set a test email
header('location:welcome.php'); // Redirect to the welcome page
exit(); // Stop script execution after redirection
?>

<!doctype html>
  <html lang="en">

      <head>
          <meta charset="utf-8" />
          <title>VSMS | Employee Login</title>
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



      <body class="account-pages">

          <!-- Begin page -->
          <div class="accountbg" style="background: url('assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>

          <div class="wrapper-page account-page-full">

              <div class="card">
                  <div class="card-block">

                      <div class="account-box">

                          <div class="card-box p-5">
                              <h3 class="text-uppercase text-center pb-4">
                                  <a href="../index.php" class="text-success">
                                      <span>VSMS | Employee Login</span>
                                  </a>
                              </h3>
                              <p style="font-size:16px; color:red" align="center"> <?php if($msg){
      echo $msg;
    }  ?> </p>


    <form class="" action="#" name="login" method="post">

      <div class="form-group m-b-20 row">
          <div class="col-12">
              <label for="emailaddress">Email address</label>
              <input class="form-control" type="text" id="emailcont" name="emailcont" required="" placeholder="Registered Email or Contact Number">
          </div>
      </div>

        <div class="form-group row m-b-20">
            <div class="col-12">
                <a href="forget-password.php" class="text-muted float-right"><small>Forgot your password?</small></a>
                <label for="password">Password</label>
                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
            </div>
        </div>

        <div class="form-group row m-b-20">
            <div class="col-12">

            </div>
        </div>

        <div class="form-group row text-center m-t-10">
            <div class="col-12">
                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="login">Sign In</button>
            </div>
        </div>

    </form>



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
