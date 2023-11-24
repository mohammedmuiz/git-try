<?php 
session_start();
include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pre-owned Car Selling Management </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">


</head>


<body>
  


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <h3>
                <a class="fw-bold navbar-brand text-success align-self-center" href="index.php">
                    Pre-owned Car Selling Management 
                </a>
            </h3>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cars.php">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        
                        <?php
                        if(isset($_SESSION['userid']))
                        { 
                            $sql = mysqli_query($con,"SELECT * FROM tbluser WHERE id = '$_SESSION[userid]' ");
                            $row = mysqli_fetch_array($sql);		
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $row['f_name'].' '.$row['l_name'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="user/dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="user/logout.php">Logout</a></li>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Signup/Sign In
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                                <li><a class="dropdown-item" href="register.php">Sign Up</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
               
                <a href="admin/login.php"><button class="btn btn-danger">Admin Login</button></a>
                       
            </div>

        </div>
    </nav>
    <!-- Close Header -->
