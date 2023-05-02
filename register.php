<?php include('config.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
          
            <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5" style="margin-left: 180px;">

              <form class="width: 23rem; user justify-content-center" action="" method="POST">
    
                  <h1 class="h4 text-gray-900 mb-4 font-weight-bold">Register an Account!</h1>
    
          
                    <input type="first_name" id="first_name" name="first_name" style="width: 522px; margin-bottom: 5px;" required placeholder="First Name" class="form-control form-control-lg" />
             

          
                    <input type="last_name" id="last_name" name="last_name" style="width: 522px; margin-bottom: 5px;" required placeholder="Last Name" class="form-control form-control-lg" />
               

     
                    <input type="email" id="email" name="email" style="width: 522px; margin-bottom: 5px;" required placeholder="Email Address" class="form-control form-control-lg" />
    
                      <input type="password" id="password" name="password" style="width: 522px; margin-bottom: 5px;" required placeholder="Password" class="form-control form-control-lg" />
          

         
                    <input type="password" id="cpassword" name="cpassword" style="width: 522px; margin-bottom: 5px;" required placeholder="Confirm Password" class="form-control form-control-lg" />
                    <input type="tel" id="phone" name="phone" style="width: 522px; margin-bottom: 5px;" required placeholder="Phone Number" class="form-control form-control-lg" />
            

                  <!--Select type of user-->
                  <div>
                    <select name="is_admin" id="is_admin" style="width: 522px; margin-bottom: 5px;">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                  </div>
      
              
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
