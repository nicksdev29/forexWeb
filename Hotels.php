<?php include 'header.php';
include 'connection.php';?>

        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <?php
                        $query = "select * from banners where `banner_place` = 'TRAVELS_HEADER' and `visibility`='VISIBLE' order by created_at desc";
                        $result = mysqli_query($con, $query);
                ?>
                        <div class="container text-center pb-5">
                            
                                <?php if( $result->fetch_assoc() !== null && count( $result->fetch_assoc() ) > 0 ) echo $result->fetch_assoc()['content']; else {
                                    ?>

                                        <div class="container text-center pb-5">
                                            <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms & Appartment</h1>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb justify-content-center text-uppercase">
                                                    <li class="text-white">We will take care of your hotels when you are planning to go for an ...
                            <br>official trip or leisure holidays . We book all star hotels and non star hotels.</li>
                                                    <!--<li class="breadcrumb-item"><a href="#">Pages</a></li>
                                                    <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>----->
                                                </ol>
                                            </nav>
                                        </div>
                                    <?php
                                } ?>
                        </div>

            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Hotel</span></h1>
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
                            <form action="#" method="post">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <!--<div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>--------->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="childcount" class="form-control" id="childcount" placeholder="Number of child">
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
                                            <input type="text"name="selectclass"  class="form-control" id="selectclass" placeholder="Select Class">
                                            <label for="selectclass">Select Class</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="city1" class="form-control" id="city1" placeholder="Destination city">
                                            <label for="city1">Destination city</label>
                                        </div>
                                    </div>
                                                                    
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="date" name="checkin" class="form-control datetimepicker-input" id="checkin" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="date"name="checkout"  class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Check Out</label>
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
                            $email=$_POST["email"];
                            $childcount=$_POST["childcount"];
                            $adultcount=$_POST["adultcount"];
                            $selectclass=$_POST["selectclass"];
                            $city1=$_POST["city1"];
                            $checkin=$_POST["checkin"];
                            $checkout=$_POST["checkout"];
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
                            $q1="insert into hotel_booking (user_id,child_count,adult_count,class,dest_city,check_in,check_out,spcl_request) values ('$user_id','$childcount','$adultcount', '$selectclass','$city1','$checkin','$checkout','$msg')";
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


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Mr. Supratim Roy</h5>
                                Director cum Fxchange<br><small>Supratim Roy has more than 28 years of experience in Foreign Exchange. He started his career in Thomas Cook India and later he joined American Experience . He also worked in Hong Kong , Singapore and Australia for 17 years.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Mr. Mithu Roy</h5>
                                Director<br><small>Mithu Roy has experienced in Travel and Tourism Management. She is also involved in Equity Trading. At SAM FXT she is looking after the travel part.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Mr. Neeraj Dhopte</h5>
                                IT Advisor<br><small>M.Tech-– Electrical Engineering
Indian Institute of Technology, Roorkee ( IIT Roorkee) Co-Founder & CTO Translab Technologies, Bangalore
</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                Designation<small></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </p>
</div>
        <!-- Team End -->


        <?php include 'footer.php'?>