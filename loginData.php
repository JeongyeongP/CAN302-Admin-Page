<?php


// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'can302');

function mypost($str) {
  $val = !empty($_POST[$str]) ? $_POST[$str] : '';
  return $val;
}

//receive query parameters
$first_name = mypost('first_name');
$last_name = mypost('last_name');
$email = mypost('email');
$password = mypost('password');
$cpassword = mypost('cpassword');
$phone = mypost('phone');

// User Registration
if (isset($_POST['reg_user'])) {

  
  if (!empty($email) && !empty($first_name) && !empty($last_name) && !empty($password)){

    if ($password == $cpassword) {
      $password = md5($password);
      $query = "insert into `user` (`user_id`, `user_email`, `first_name`, `last_name`, `password`, `phone_number`) values('0', '$email', '$first_name', '$last_name', '$password', '$phone')";
      mysqli_query($conn, $query);
      echo '<script language="javascript">';
      echo 'alert("Successfully Registered!")';
      echo '</script>';
      header('location: login.php');
    } else {
      echo '<script language="javascript">';
      echo 'alert("Passwords do not match")';
      echo '</script>';
    }
  
  
  }

}

// User Login
if (isset($_POST['login_user'])) {
    session_start();

    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($password);
    $query = "SELECT * FROM user WHERE user_email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['password']==$password && $row['is_admin']==1) {
            print("password check");
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: dashboard.php');
        } elseif($row['password']==$password && $row['is_admin']==0){
            $error = "You have no right to access admin page!";
            header('location: user-page.html');
        }
        else {
            $error = "Your Password is incorrect!";
            print($error);
        }
    } else {
    $error = "Your Email doesn't exist! Please Register first!";
    print($error);
    }
}

?>

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>