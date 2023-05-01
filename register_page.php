<?php include('config.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market</title>

   <!-- Custom fonts for this template-->

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <header>
    <!--Logo-->
        <div class="sidebar-brand-text mx-3"><img src="images/supermarket.png" width="150px"></div>    
    </header>
    
</head>
<body>
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">

          <!--Left-->
          <div class="col-sm-6 px-0 d-none d-sm-block color= " >
              <img src="images/background.png"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
          
          <!-- Right -->   
          
            <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

              <form class="width: 23rem; user justify-content-center" action="config.php" method="POST">
    
                  <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Register an Account!</h1>
    
                  <div class="form-group mb-4">
                    <input type="first_name" id="first_name" name="first_name" placeholder="First Name" class="form-control form-control-lg" />
                  </div>

                  <div class="form-group mb-4">
                    <input type="last_name" id="last_name" name="last_name" placeholder="Last Name" class="form-control form-control-lg" />
                  </div>

                  <div class="form-group mb-4">
                    <input type="email" id="email" name="email" placeholder="Email Address" class="form-control form-control-lg" />
                  </div>

                  <div class="form-group mb-4">
                      <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg" />
                  </div>

                  <div class="form-group mb-4">
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control form-control-lg" />
                  </div>

                  <!--Select type of user-->
                  <div>
                    <select name="is_admin" id="is_admin">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                  </div>
      
                  <div class="pt-1 mb-4">
                      <button class="btn btn-info btn-lg btn-block" name="reg_user" type="button">Register</button>
                  </div>

                  <div class="text-center">
                      Already have an account?
                      <a href="login_page.php" class="register-link"> Login here! </a>
                  </div>
    
              </form>
    
            </div>
    
          
        </div>
      </div>
    </section>
</body>
</html>
