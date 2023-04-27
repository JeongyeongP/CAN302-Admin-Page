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

        $error[] = 'user already exists!';

    } else{

        if($password != $cpassword){
            $error[] = 'Password not matched!';
        }else{
            $insert = "INSERT INTO user_regist(first_name, last_name, email, password, is_admin) VALUES('$first_name', '$last_name', '$email', '$password', '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login.php');
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
    <title>Super Market</title>

    <!--Custom css file link-->
    <link rel="stylesheet" href="login.css">
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
                <h2>Register an Account!</h2>
                <section class="copy">


                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
                ?>
                    <!--First name-->
                    <div class="form-input">
                        <input id="first_name" name="first_name" type="first_name" placeholder="First name" required>
                    </div>
                    <!--Last name-->
                    <div class="form-input">
                        <input id="last_name" name="last_name" type="last_name" placeholder="Last name" required>
                    </div>
                    <!--Email Box-->
                    <div class="form-input">
                        <input id="email" name="email" type="email" placeholder="Email address" required>
                    </div>
                    <!--Password Box-->
                    <div class="form-input">
                        <input id="password" name="password" type="password" placeholder="Enter password"required>
                    </div>
                    <div class="form-input">
                        <input id="password" name="cpassword" type="password" placeholder="Confirm password"required>
                    </div>
                    <!--Select type of user-->
                    <select name="user_type" id="user_type">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <!--Register Button-->
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn text-center">
                            Register Account
                        </button>
                    </div>
                     <!--Login Link-->
                    <div class="text-center">
                        Already have an account?
                        <a href="login.php" class="register-link">
                            Login!
                        </a>
                    </div>
                </section>
             </form>
        </div>
    </div>
</body>
</html>