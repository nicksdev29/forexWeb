<?php include 'header.php';
include 'connection.php';
?>
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
                                            <h1 class="display-3 text-white mb-3 animated slideInDown">TRAIN BOOKING</h1>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb justify-content-center text-uppercase">
                                                    <li class="text-white">When you are planning to travel by train pls think of us . We will ... book your tickets according to your train choice.
                                 We book Hill Trains (Ooty, Darjeeling etc) Luxury Train Palace on wheels, Deccan Queen, Rajdhani, Satabdi etc,</li>
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
         Booking End---->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Train</span></h1>
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
                                    <!--<h5>RESERVATION DETAIL</h5>
                                    <h6>Contact person</h6>
                                    
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Reservation quota</label>
                                        </div>
                                    </div>----->
                                    
                                    
                                    
                                    <h5>RESERVATION DETAIL</h5>
                                    <h6>Contact person</h6>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Pasanger name</label>
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
                                        <input type="text" name="quota" class="form-control" id="quota" placeholder="Reservation quota">
                                            <label for="quota">Reservation quota</label>
                                           </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="train" class="form-control" id="train" placeholder="Train name or Number">
                                            <label for="train">Train name or Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="city1" class="form-control" id="city1" placeholder="Journey from">
                                            <label for="city1">Journey from</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="city" class="form-control" id="city" placeholder="Journey To">
                                            <label for="city">Journey To</label>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="date" name="jdate" class="form-control datetimepicker-input" id="jdate" placeholder="Departure or Journey Date" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="jdate">Departure or Journey Date</label>
                                        </div>
                                    </div>
                                    <!----<div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="1">Lower Berth </option>
                                              <option value="2">Middle Berth </option>
                                              <option value="3">Upper Berth</option>
                                              <option value="1">Side Lower Berth </option>
                                              <option value="1">Side Upper Berth </option>
                                            </select>
                                            <label for="select1">Berth choice</label>
                                          </div>
                                    </div>----->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
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
                            $quota=$_POST["quota"];
                            $train=$_POST["train"];
                            $city1=$_POST["city1"];
                            $city=$_POST["city"];
                            $jdate=$_POST["jdate"];
                            $phone=$_POST["phone"];
                            $childcount=$_POST["childcount"];
                            $adultcount=$_POST["adultcount"];
                            $msg=$_POST["msg"];
                            $q="select * from users where email_id='$email'";
                            $result1=mysqli_query($con,$q);
                            $user_id=null;
                            while ($row=$result1->fetch_assoc()){
                                if( isset($row))
                                {
                                    // print_r($row);
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
                            $q1="insert into train_booking (user_id,reservation_quota,train_number,journey_from,journey_to,journey_date,child_count,adult_count,spcl_request,mobile_no) values ('$user_id','$quota','$train', '$city1','$city','$jdate','$phone','$childcount','$adultcount','$msg')";
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
</div>

        <!-- Booking End -->


        <?php include 'footer.php'?>