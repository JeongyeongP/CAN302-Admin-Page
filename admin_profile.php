<?php 
    session_start();
    if ($_SESSION['is_admin']) { 
?>

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

<body class="bg-gradient-primary">
   
   <div class="container-fluid" id="intro" style="margin-top: 20px;background-attachment: fixed;">
        <header>
            <!--Logo-->
            <div class="sidebar-brand-text mx-3">
                <a href="dashboard.php">
                    <img src="images/supermarket.png" width="150px">
                </a>
            </div>
            <!-- Back arrow-->
            <a href="dashboard.php" style="position: absolute; top: 20px; right: 20px;">
                <img src="images/back-arrow.png" width="40px">
            </a>
            
        </header>
        
        <!--Profile Card start-->
        <div class="container" style="margin-top:220px; padding-top: 150px;">
            <div class="profile_image">
                <img src="images/admin.jpeg" alt="Profile Pic" style="position: absolute; transform: translateX(-50%); top: -100px; border: 5px solid #4e73df; border-radius: 10px;" >
                <span></span>
            </div>
            <h2><b><?php echo $_SESSION['name']; ?></b></h2>
            <p><?php echo $_SESSION['email']; ?></p>
            <p>Contact Number</p>
            <button class="btn btn-primary btn-edit-profile">Edit</button>
        </div>
        <!--Profile Card end-->



   </div>
</body>

<style>
    #intro {
      background-image: url(images/background.png);
      height: 100vh;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }

    @media screen and (min-width: 900px) {
        .split-screen{
            flex-direction: row;
            height: 100vh;
        }
        .left,
        .right{
            display: flex;
            width: 50%;
            height: auto;
        }
    }

    .header {
        width: 100%;
        min-height: calc(75px + 15vw);

    }
    .container{
        padding: 80px 20px;
        text-align: center;
        width: 100%;
        position: relative;
        margin: 0 auto;
        background: white;
    }


    .header_wrapper .container .profile_image{
        z-index: 1;
        width: 120px;
        height: 120px;
        position: relative;
        display: block;
        margin-top: -75px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 100px;
        border: 10px solid #4e73df;

    }

    .btn{
        display: block;
        width: 25%;
        background-color: var(#E2E5FF);
        color: white; 
        font-weight: 700;
        border: none;
        padding: 0.75rem;
        border-radius: 5px;
        font-size: 0.75rem;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    /* Align the button to the center */
    .btn-edit-profile {
        display: block;
        margin: 0 auto;
        text-align: center;
    }
    .bg-gradient-primary {
    background-color: #E2E5FF;
    }

  </style>


</html>

<?php 
    } else {
        header('location: login_page.php');
    }
    ?>