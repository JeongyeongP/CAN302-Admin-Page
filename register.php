<?php include('loginData.php')?>

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

  
    
</head>
<body>
    <section class="vh-100">
      <div class="contents-register">
        <div class="row">

          <!--Left-->
          <div class="col-sm-4 px-50 d-none d-sm-block" style= "background-color: white;">
              <img src="images/background.png"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
          
          <!-- Right -->   
          
          <div class="col-sm-4 px-50 d-none d-sm-block" style="width:50%; margin:auto">


              <form class="width: 23rem; user justify-content-center" action="" method="POST">
    
                  <h1 class="h4 text-gray-900 mb-4 font-weight-bold" style="text-align:center">Register an Account!</h1>
    
          
                    <input type="first_name" id="first_name" name="first_name" style="margin-bottom: 10px;" required placeholder="First Name" class="form-control form-control-lg" />
                    <input type="last_name" id="last_name" name="last_name" style="margin-bottom: 10px;" required placeholder="Last Name" class="form-control form-control-lg" />
                    <input type="email" id="email" name="email" style="margin-bottom: 10px;" required placeholder="Email Address" class="form-control form-control-lg" />
                    <input type="password" id="password" name="password" style="margin-bottom: 10px;" required placeholder="Password" class="form-control form-control-lg" />
                    <input type="password" id="cpassword" name="cpassword" style="margin-bottom: 10px;" required placeholder="Confirm Password" class="form-control form-control-lg" />
                    <input type="tel" id="phone" name="phone" style=" margin-bottom: 10px;" required placeholder="Phone Number" class="form-control form-control-lg" />      
                    <button class="btn btn-info btn-lg btn-block"  style="background-color: #96A1FE; color: white; margin-bottom: 5px;" name="reg_user" id="reg_user" type="submit">Register</button>
                

                  <div class="text-center">
                      Already have an account?
                      <a href="login.php" class="register-link"> Login here! </a>
                  </div>
    
              </form>
    
            </div>
    
          
        </div>
      </div>
    </section>
</body>
</html>
