<?php include 'header.php'?>

        <!-- Header End -->


        <!-- Carousel Start -->



        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" id="video">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 800px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">
                                SAM FOREIGN EXCHANGE AND TRAVELS SERVICES PVT. LTD.</h6>

                                <h3 class="display-3 text-white mb-4 animated slideInDown">WELCOME TO <span class="text-primary text-uppercase">SAMFXT</span></h3>
                                <h5 class="text-white">Buy Currency Before You Travel</h5><br>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Foreign Exchange</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Travel Services</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img class="w-100" src="img/carousel-4.jpg" alt="Image"> 
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">
                                SAM FOREIGN EXCHANGE AND TRAVELS SERVICES PVT. LTD.</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown"><span class="text-primary text-uppercase">TRAVEL</span> WITH US</h1>
                                <h4 class="text-white">Book International / Domestic Air Tickets, Train Tickets, Hotel, Tours & Foregin Exchange.</h4><br>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Foreign Exchange</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Travel Services</a>
                            </div>
                        </div>
                    </div>

                    <?php
                        $query = "select * from banners where `banner_place` = 'HOME_SLIDER' and `visibility`='VISIBLE' order by created_at";
                        $result = mysqli_query($con, $query);
                        while( $bannersList = $result->fetch_assoc() ) {
                    ?>
                            <div class="carousel-item">
                                    <?php echo $bannersList['content']; ?>
                            </div>
                    <?php
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


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

<!--home-box-open--><br>
 <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="#">
                <div class="#">
                    <div class="row g-2">
                        <div class="col-md-12">
                            <div class="row g-2">
                                <div class="col-md-5">
                                <div class="date" id="date1" data-target-input="nearest"> 
                                    <h4 class="mb-5" align="center">CURRENCY <span class="text-primary text-uppercase">Notes </span></h4>
                                    <p align="center"> <img src="img/pngegg (17).png" alt="currency note" width="60%" ></p>
                                    <p align="center"><b> </b><h1 align="center">FOREIGN EXCHANGE
                                        
                                    </h1>
                                    <p align="center">Competitive rate for popular currencies when you buy or sell. Our spreads are low , no commission and no hidden charges. Best rate for Corporate Sector &amp; group
                                                        tours.
                                    </p>
                                    <p align="center">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="" style="background-color: #FEA116; border: 0px;">Book Now</a>
                                    </p>  
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="date" id="date1" data-target-input="nearest">
                                    <h4 class="mb-4" align="center">TRAVEL PLAN <span class="text-primary text-uppercase">Services</span></h4>
                                    <p align="center"><img src="img/transportation2.png" alt="currency note" width="94%" align="center"></p>
                                    <p align="center"> <b> </b><h1 align="center"> INTERNATIONAL</h1></p>
                                    <p align="center">Vietnam/Cambodia,
Malaysia/Singapore, China
Hong Kong; Macau, Dubai, Egypt,
Europe and African Safari etc.</p>
                                    <p align="center">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="" style="background-color: #FEA116; border: 0px;">Book Now</a>
                                    </p>
                                </div>
                                </div>
                                <div class="col-md-3">
                                    
                                <p align="center" > 
                                       <ul class="forex bg-dark text-light" style="list-style-type:none;">
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> <a>Directors</a></li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Documents</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Map/Location</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Financial report</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Share Capital </li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Number of Employees</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Certificate</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> We accept - Card and Cash</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Awards & Recognition</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i>Become our agent</li> 
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Feedback</li>
                                          <li><i class="fa fa-paper-plane text-primary me-2"></i> Blogs</li>
                                    </ul>
                                 </p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <!-- <img src="img/team-11.jpg"> -->
                        <p>Text</p>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;"> -->
                            <div class="ps-3">
                                <!-- <h6 class="fw-bold mb-1">VIETNAM MEMORIES</h6> -->
                                <!-- <small>Samfxt user</small> -->
                            </div>
                        </div>
                        <!-- <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i> -->
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <!-- <img src="img/team-12.jpg"> -->
                        <!-- <p>Text</p> -->
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                             -->
                            <div class="ps-3">
                                <!-- <h6 class="fw-bold mb-1">SRI LANKA</h6> -->
                                <!-- <small>Profession</small> -->
                            </div>
                        </div>
                        <!-- <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i> -->
                    </div>
                    <div class="testimonial-item">
                        <!-- <img src="img/team-13.jpg">
                        <p>Text</p> -->
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;"> -->
                            <div class="ps-3">
                                <!-- <h6 class="fw-bold mb-1">GOA</h6> -->
                                <!-- <small>Profession</small> -->
                            </div>
                        </div>
                        <!-- <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i> -->
                    </div>

                    <?php
                        $queryPackage = "select * from packages order by created_at desc";
                        $resultP = mysqli_query($con, $queryPackage);
                        while( $package = $resultP->fetch_assoc() ) {
                    ?>
                        <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                            <img src="<?php echo $package['feature_img_url']; ?>" alt="<?php echo $package['feature_img_url']; ?>" />
                            <div class="d-flex align-items-center">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1"><?php echo $package['package_title']; ?></h6>
                                </div>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
<!--home-box-close-->

        <!-- About Start 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">SAM FXT</span></h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/cr2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/cr1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/cr3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our service</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Service</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-1.jpg" alt="">
                                <!--<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>-->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5>
                                    <!--<div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>-->
                                </div>
                                <!--<div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>-->
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-2.jpg" alt="">
                                <!--<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>-->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <!--<div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>-->
                                </div>
                                <!--<div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>-->
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/room-3.jpg" alt="">
                                <!--<small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>-->
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Super Deluxe</h5>
                                    <!--<div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>-->
                                </div>
                                <!--<div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>-->
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">Forex market</h6>
                        <h1 class="text-white mb-4">Forex the world biggest market</h1>
                        <p class="text-white mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Explore More</a>
                        <a href="contact.php" class="btn btn-light py-md-3 px-md-5">Contact us</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=ig_EO805rpA" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ig_EO805rpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


        <!-- Service Start -->
        

        <!--------<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                    
                    <h6 class="text-primary text-uppercase">Foreign Exchange</h6>
                      <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6> We are dealing with all major currencies of the world including Miscellaneous currencies like Thai Bhat, Philippine Peso, Indonesian Rupiya etc. We are offering you very competitive rates while buying and selling currencies.</h6>
                    </div>
                    </div>
                    <br>
                    <h6 class="text-primary text-uppercase">Flights </h6>
                      <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6>  We will book your flight tickets for your Travel anywhere both Domestic and International</h6>
                    </div>
                    </div>
                    <br>
                    <h6 class="text-primary text-uppercase">Train Booking </h6>
                      <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6>  When you are planning to travel by train pls think of us . We will book your tickets according to your train choice. We book Hill Trains (Ooty, Darjeeling etc) Luxury Train Palace on wheels, Deccan Queen, Rajdhani, Satabdi etc,</h6>
                    </div>
                    </div>
                    <br>
                    <h6 class="text-primary text-uppercase">Room & Apartment </h6>
                      <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6>  We will take care of your hotels when you are planning to go for an official trip or leisure holidays . We book all star hotels and non star hotels.</h6>
                    </div>
                    </div>
                    <br>
                    <h6 class="text-primary text-uppercase">Bus and Car Rentals </h6>
                      <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6>  For group Travels we book luxury buses and cars all over India . Therefore contact us for any kind of bookings.</h6>
                    </div>
                    </div>
                    <br>
                    <h6 class="text-primary text-uppercase">Customized Tours </h6>
                      <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h6>   Our Travel experts will guide your tour packages within India or abroad when you make a plan for a leisure holidays. So contact us and according to your choice we will make your trip comfortable and happy.</h6>
                    </div>
                    </div>
                    <br>
                </div>
                <br>---------------->

                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="forex.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-dollar" style="font-size:36px"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Foriegn exchange</h5>
                            <p class="text-body mb-0"> We are dealing with all major currencies of the world including 
                                <span id="dots"><b>...Read more</b></span><span id="more"></p></p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="Flight.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-plane fa-2x" aria-hidden="true"></i>

                                </div>
                            </div>
                            <h5 class="mb-3">Flight (Domestic and International)</h5>
                            <p class="text-body mb-0">We will book your flight tickets for your Travel anywhere both Domestic<span id="dots"><b>...Read more</b></span><span id="more"></p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="Train.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-train fa-2x" aria-hidden="true"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Train Booking</h5>
                            <p class="text-body mb-0">When you are planning to travel by train pls think of us . We will book your tickets<span id="dots"><b>...Read more</b></span><span id="more"></p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="Hotels.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-building fa-2x" aria-hidden="true"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rooms and appartment</h5>
                            <p class="text-body mb-0">We will take care of your hotels when you are planning to go for an official trip or <span id="dots"><b>...Read more</b></span><span id="more"></p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="BUS AND CAR RENTALS.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-bus" style="font-size:36px"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Bus & car Rentals</h5>
                            <p class="text-body mb-0">For group Travels we book luxury buses and cars all over India . Therefore <span id="dots"><b>...Read more</b></span><span id="more"></p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="CUSTOMISED TOURS.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-briefcase" style="font-size:36px"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Customized Tours</h5>
                            <p class="text-body mb-0">Our Travel experts will guide your tour packages within India or abroad when <span id="dots"><b>...Read more</b></span><span id="more"></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service End -->



        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>I traveled to Simla Kulu Manali with Sam FX and Travel and it was an wonderful trip. My Hotels were excellent , car came on time and chauffeur was very friendly. I recommended my friends to travel with SAM fxt next time.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Shyamal Singh</h6>
                                <small>Samfxt user</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="staffs/supratim.jpg" alt="">
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
                    <div class="col-lg-4 col-md-8 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="staffs/mithu.jpg" alt="">
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
                    <div class="col-lg-4 col-md-8 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="staffs/neeraj.jpg" alt="">
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
                    </div> -->
                    <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="samfxt-staffs-photo/it-advisor-neeraj-dhopte.jpeg" alt="">
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
                    </div> -->
                </div>
            </div>
        </div>
    </p>
</div>

        <!-- Team End -->


       <?php include 'footer.php'?>