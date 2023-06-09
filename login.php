<?php include('loginData.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" />
    <!--link rel="stylesheet" href="css/sb-admin-2.css"-->
    <title>Super Market</title>
    
    <!-- Custom fonts for this template-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">  
</head>
<body>
  <section class="vh-100">
    <div class="login-contents">
      <!-- Left-->
      <div class="row">
        <div class="col-sm-4 px-50 d-none d-sm-block" style= "background-color: white;">
          <img src="images/background.png"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>

        <!-- Right -->
        <div class="col-sm-4 px-50 d-none d-sm-block" style="width:50%; margin:auto">

  

            <form class="login-form  user justify-content-center" method="POST" style="border-radius: 10px;">
              <h1 class="h4 text-gray-900 mb-4 font-weight-bold" style="text-align:center">Welcome!</h1>
              <!-- Email -->
              <div class="form-group mb-4">
                <input type="email" name="email" id="email" required placeholder="Email Address" class="form-control form-control-lg" />
              </div>
              <!-- Password -->
              <div class="form-group mb-4">
                <input type="password" name="password" id="password" required placeholder="Password" class="form-control form-control-lg" />
              </div>
              <p class="small text-right"><a class="text-muted" href="#">Forgot password?</a></p>
              <!-- Login Button -->
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" style="background-color: #96A1FE; color: white;" name="login_user" id="login_user" type="submit">Login</button>
              </div>
              <!-- Register Account -->
              <div class="text-center">
                You don't have an account?
                <a href="register.php" class="register-link"> Register here! </a>
              </div>
            </form>
          
        </div>
      </div>
    </div>
  </section>
</body>

</html>