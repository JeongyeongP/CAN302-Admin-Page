<?php include('config.php')?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super Market</title>

    <!-- Custom fonts for this template-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<section class="vh-100">
    <div class="container-fluid" >

      <!-- Left-->
      <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block color= " >
            <img src="images/background.png"
              alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>

        <!-- Right -->
        <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form style="margin: 0 auto; width: 23rem user justify-content-center text-center;" action="config.php" method="POST">
              <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Welcome!</h1>
              <div class="form-group mb-4">
                  <input type="email" id="email" name="email" placeholder="Email Address" class="form-control form-control-lg" />
              </div>
              <div class="form-group mb-4">
                  <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg" />
              </div>
              <p class="small text-right"><a class="text-muted" href="#">Forgot password?</a></p>
              <div class="pt-1 mb-4">
                  <button class="btn btn-info btn-lg btn-block" name="login_user" type="submit"> Login </button>
              </div>
              <div class="text-center">
                  You don't have an account?
                  <a href="register_page.php" class="register-link"> Register here! </a>
              </div>
          </form>
        </div>








  
      </div>
    </div>
  </section>
  
</html>