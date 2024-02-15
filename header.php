<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SAM FOREIGN EXCHANGE AND TRAVELS SERVICES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="Flight, Group tavel, Hotel, Tour, Currency Exchange, Customized Tour, flight Reservation, Flight Reservation, Flight Ticket, Foriegn Exchange, luxury buses  ">
    <meta content="" name="
SAM FXT – book your tickets, hotels and tours from us. we give you all type of pakages: budget friendly or luxurious tours according to your choice">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
<?php include 'env.php'?>
<?php include 'connection.php'?>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                       <div><img src="img/samfxt logo2.png"> <p class="text-white logo-text">SAM FOREIGN EXCHANGE AND TRAVELS SERVICES PVT. LTD.</p></div>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-12 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">INFO@SAMFXT.IN</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-square text-primary me-2" aria-hidden="true"></i> 
                                <p class="mb-0"></p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2 ms-3"> 
                                <p class="mb-0"><strong>RBI Approved License:</strong> BLR-FFMC-0247-2023</p>
                            </div>
                        </div>
                        <!--<div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>

                            </div>
                        </div>-->
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase animate__bounce">SAM FXT</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <div class="nav-item dropdown">
                                    <a href="about.php" class="nav-item nav-link">About us</a>
                                    <!--<div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.php" class="dropdown-item">Mission</a>
                                        <a href="team.php" class="dropdown-item">Vision</a>
                                    </div>-->
                            </div>
                                <a href="service.php" class="nav-item nav-link">Services</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Travel</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="Holidays.php" class="dropdown-item">Holidays</a>
                                        
                                        <a href="Shortbreak.php" class="dropdown-item">Short Break</a>
                                        <a href="Flight.php" class="dropdown-item">Flight</a>
                                        <a href="Hotels.php" class="dropdown-item">Hotel</a>
                                        <a href="Train.php" class="dropdown-item">Train</a>
                                        <a href="Religioustour.php" class="dropdown-item">Tour</a>
                                        <a href="Otherservice.php" class="dropdown-item">Other Services</a>
                                        
                                    </div>
                            </div>
                                <a href="forex.php" class="nav-item nav-link">forex</a>
                                
                                <!--<div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">LIST</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.php" class="dropdown-item">Directors</a>
                                        <a href="team.php" class="dropdown-item">Documents</a>
                                        <a href="testimonial.php" class="dropdown-item">Financial report</a>
                                        <a href="testimonial.php" class="dropdown-item">Share Capital and number of Employees</a>
                                        <a href="testimonial.php" class="dropdown-item">Certificate</a>
                                        <a href="testimonial.php" class="dropdown-item">We accept - Card and Cash</a>
                                        <a href="testimonial.php" class="dropdown-item">Awards & Recognition</a>
                                        <a href="testimonial.php" class="dropdown-item">Feedback</a>
                                        <a href="testimonial.php" class="dropdown-item">Blogs</a>                               
                                   </div>
                                </div>---->
                                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                                
                                <a href="career.php" class="nav-item nav-link">Career</a>
                                <a href="login.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Login | Registration<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>