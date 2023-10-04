<?php include 'header.php';
include 'connection.php';?>

        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">FLIGHTS</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="text-white">We will book your flight tickets for your Travel anywhere both ... Domestic and International</li>
                            <!--<li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>----->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Booking End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Flight</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action='#' method="post">
                                <div class="row g-3">
                                    <h5>RESERVATION DETAIL</h5>
                                    <h6>Contact person</h6>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="date" name='journeydate' class="form-control datetimepicker-input" id="journeydate" placeholder="journeydate" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="journeydate">Date of Journey</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Name">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="address" class="form-control" id="address" placeholder="address">
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">State</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Postal Cod</label>
                                        </div>
                                    </div>----->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                           <input type="text" name="flight" class="form-control" id="flight" placeholder="Flight">
                                            <label for="flight">Select Flight</label>
                                          </div>
                                    </div>
                                    <!---<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Passport / ID Number</label>
                                        </div>
                                    </div>---->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="childcount" class="form-control" id="name" placeholder="Number of child">
                                            <label for="childcount">Number of child</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="adultcount" class="form-control" id="adultcount" placeholder="Number of Adult">
                                            <label for="adultcount">Number of Adult</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="selectclass" class="form-control" id="selectclass" placeholder="Select a Class">
                                            <label for="selectclass">Select a Class</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="city" class="form-control" id="city" placeholder="Select a city">
                                            <label for="city">Departure City</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" name="city1" class="form-control" id="city1" placeholder="Destination City">
                                            <label for="city1">Destination City</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="msg" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                            <?php 
                            $name=$_POST["name"];
                            $journeydate=$_POST["journeydate"];
                            $email=$_POST["email"];
                            $phone=$_POST["phone"];
                            $address=$_POST["address"];
                            $flight=$_POST["flight"];
                            $childcount=$_POST["childcount"];
                            $adultcount=$_POST["adultcount"];
                            $selectclass=$_POST["selectclass"];
                            $city=$_POST["city"];
                            $city1=$_POST["city1"];
                            $msg=$_POST["msg"];
                            $q="select * from users where email_id='$email'";
                            $result1=mysqli_query($con,$q);
                            $user_id=null;
                            while ($row=$result1->fetch_assoc()){
                                if( isset($row))
                                {
                                    print_r($row);
                                 $user_id=$row['id'];
                                }
                            }
                            if ($user_id === null)
                            { 
                                $password=substr(md5(time()),0,6);
                                $q2="insert into users (user_role,email_id,full_name,password,status) values ('2','$email','$name','$password','INACTIVE')";
                                $result2=mysqli_query($con,$q2);
                                if ($result2 > 0 )
                                {
                                 $user_id=mysqli_insert_id($con);
                                }
                            }
                            $q1="insert into flight_booking (user_id,doj,phone_no,address,select_flight,child_count,adult_count,class,depar_city,dest_city,spcl_request) values ('$user_id','$journeydate','$phone', '$address','$flight','$childcount','$adultcount','$selectclass','$city','$city1','$msg')";
                            $result=mysqli_query($con,$q1);
                            if ($result > 0 )
                            {
                                echo 'booking request submitted';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->



        <?php include 'footer.php'?>