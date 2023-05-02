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
// REGISTER USER
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

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // if (empty($first_name)) { array_push($errors, "First name is required");}
  // if (empty($last_name)) { array_push($errors, "Last name is required"); }
  // if (empty($email)) { array_push($errors, "Email is required"); }
  // if (empty($password)) { array_push($errors, "Password is required"); }
  // if ($password != $cpassword) {
	//   array_push($errors, "The two passwords do not match");
  // }

  // // first check the database to make sure 
  // // a user does not already exist with the same email
  // $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
  // $result = mysqli_query($conn, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['email'] === $email) {
  //     array_push($errors, "Email already exists");
  //   }
  // }

  // // Finally, register user if there are no errors in the form
  // if (count($errors) == 0) {
  // 	$password = md5($password);//encrypt the password before saving in the database

  // 	$query = "insert into user (`user_id`, `user_email`, `first_name`, `last_name`, `password`) values('0', '$email', '$first_name', '$last_name', '$password')";
  //   mysqli_query($conn, $query);
  // 	// if (mysqli_query($conn, $query)){
  //   //   $_SESSION['email'] = $email;
  //   //   $_SESSION['success'] = "Please Log In!";
  //   //   header('location: login_page.php');
  //   // }


  // }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    session_start();

    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
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
  

  // $email = mysqli_real_escape_string($conn, $_POST['email']);
  // $password = mysqli_real_escape_string($conn, $_POST['password']);

  // if (empty($email)) {
  // 	array_push($errors, "Email is required");
  // }
  // if (empty($password)) {
  // 	array_push($errors, "Password is required");
  // }

  // if (count($errors) == 0) {
  // 	$password = md5($password);
  // 	$query = "SELECT * FROM user_regist WHERE email='$email' AND password='$password'";
  // 	$results = mysqli_query($conn, $query);
  // 	if (mysqli_num_rows($results) == 1) {
  // 	  $_SESSION['email'] = $email;
  // 	  $_SESSION['success'] = "You are now logged in";
  // 	  header('location: dashboard.php');
  // 	}else {
  // 		array_push($errors, "Wrong username/password combination");
  // 	}
  // }
}

?>

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>