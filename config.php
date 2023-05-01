<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'can302');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword= mysqli_real_escape_string($conn, $_POST['cpassword']);
  $is_admin = (int)mysqli_real_escape_string($conn, $_POST['is_admin']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First is required"); }
  if (empty($last_name)) { array_push($errors, "Last is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $cpassword) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM user_regist WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database
  	$query = "INSERT INTO user_regist (first_name, last_name, email, password, is_admin) 
  			  VALUES('$first_name', '$last_name', '$email', '$password', '$is_admin')";

  	mysqli_query($conn, $query);
  	#$_SESSION['email'] = $email;
  	$_SESSION['success'] = "Please Log In!";
    #$_SESSION['user_type'] = ""
  	header('location: login_page.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }


  if (count($errors) == 0) {
  	$hash = md5($password);
  	$query = "SELECT * FROM user_regist WHERE email='$email' AND password='$hash' LIMIT 1";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
      $row = mysqli_fetch_assoc($results);
      $_SESSION["name"] = $row['first_name'] . " " . $row['last_name'];
      $is_admin = $row['is_admin'];
      $_SESSION['is_admin'] = $is_admin;
      if ($is_admin == 1) {
        header('location: dashboard.php');
      } else {
        array_push($errors, "You are a User, not an Admin!");
      }
  	} else {
  		array_push($errors, "Wrong username/password combination");
  	}
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
