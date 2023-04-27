<?php

$conn = mysqli_connect('localhost', 'root', '', 'can302')

?>

<?php

if(isset($_POST['submit'])){

    
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST($user_type);

    $select = " SELECT * FROM user_regist WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result)> 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:dashboard.php');

        }elseif($row['user_type'] == 'user'){
            $_SESSION['user_name'] = $row['name'];
            header('location:usermsg_page.php');
        } 
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <!--link rel="stylesheet" href="css/sb-admin-2.css"-->
    <title>Super Market</title>
</head>
<body>
    <div class="split-screen">
        <!--Left Screen-->
        <div class="left">
            <section class="copy">
                <h1>Super Market</h1>
            </section>

        </div>
        <!--Right Screen-->
        <div class="right">
             <form>
                <h2>Welcome!</h2>
                <section class="copy">
                    <!--Email Box-->
                    <div class="form-input">
                        <input id="email" name="email" type="email" placeholder="Email Address" required>
                    </div>
                    <!--Password Box-->
                    <div class="form-input">
                        <input id="password" name="password" type="password" placeholder="Password"required>
                        <i class="far fa-eye-slash"></i>
                    </div>
                    <!--Forgot Password Link-->
                    <div class="text-right">
                        <a href="#" class="forget-link">
                            Forgot Password?
                        </a>
                    </div>
                    <!--Login Button-->
                    <div class="text-center">
                        <button type="submit" class="btn text-center">
                            Login
                        </button>
                    </div>
                     <!--Register Link-->
                    <div class="text-center">
                        You don't have an account?
                        <a href="register.php" class="register-link">
                            Register here!
                        </a>
                    </div>
                </section>
             </form>
        </div>
    </div>
</body>
</html>