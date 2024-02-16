<?php include 'header.php'?>
<!-- Foundation CSS Stylesheet -->
	<link rel="stylesheet"
		href= 
"https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css"> 

	<!-- jQuery CDN -->
	<script src= 
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> 
	</script> 

	<!-- Foundation CSS JavaScript -->
	<script src= 
"https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js"> 
	</script> 
</head>

<?php
            $content = null;
            $queryPackage = "select * from packages where `id` = ".$_REQUEST['package'];
            $resultP = mysqli_query($con, $queryPackage);
            while( $package = $resultP->fetch_assoc() ) {
?>
 <div class="container-xxl py-5">
            <div class="container">
                <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                     <h6 class="section-title text-center text-primary text-uppercase">Our service</h6> -->
                    <!-- <h1 class="display-3 text-black mb-4">MEMORABLE  <span class="text-primary text-uppercase">VIETNAM</span></h1> -->
                </div>
                <div class="row g-16">
                    <div class="col-lg-16 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                
                                <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                	</div>
                <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousal-12.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <!-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6> -->

                                <?php
                                    $title = explode(' ', $package['package_title']);
                                    $titleStr1 = $title;
                                    if(count($title) > 1) {
                                        $titleStr1 = substr($package['package_title'], 0, strrpos($package['package_title'], ' '));
                                    }
                                ?>
                                <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo substr($package['package_title'], 0, strrpos($package['package_title'], ' ')); ?>  <span class="display-3 mb-3 animated slideInDown text-primary text-uppercase" ><?php echo substr($package['package_title'], strrpos($package['package_title'], ' '), strlen($package['package_title'])); ?></span></h1>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousal-11.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <!-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6> -->
                                <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo substr($package['package_title'], 0, strrpos($package['package_title'], ' ')); ?>  <span class="display-3 mb-3 animated slideInDown text-primary text-uppercase" ><?php echo substr($package['package_title'], strrpos($package['package_title'], ' '), strlen($package['package_title'])); ?></span></h1>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
        <!-- Carousel End -->

        <ul class="accordion" data-responsive-accordion-tabs="accordion large-tabs">
        <?php
            $contents = json_decode( $package['content_json'] );
            $count = 0;
            foreach ($contents as $key => $value) {
                foreach ($value as $objKey => $objValue) {
                    if(strpos($objKey, 'title') > -1) {
                    ?>
                    <li class="accordion-item <?php echo ($count === 0) ? 'is-active': ''; ?>" data-accordion-item>
                        <a href="#" class="text-primary text-uppercase"> 
                            <h6><b><?php echo $objValue; ?></b></h6> 
                        </a>
                    <?php
                    } else if(strpos($objKey, 'package') > -1) {
                    ?>
                        <div class="accordion-content"
                            data-tab-content>
                            <?php echo $objValue; ?>
                        </div>
                    <?php
                        $count++;
                    }
                }
            }
        ?>
        </ul>
                                    <!-- <h5 class="mb-0">MEMORABLE VIETNAM</h5></div> -->
				            
                            <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <!--<h6 class="section-title text-start text-primary text-uppercase">Missions</h6>--->
                        <h2 class="mb-4">Explore <span class="text-primary text-uppercase">Vietnam</span></h2>
                        <p class="mb-4"><form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="veg or Non veg" placeholder="veg or Non veg">
                                            <label for="veg or Non veg">veg or Non veg</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="numbers" class="form-control" id="person-count" placeholder="No. of Person">
                                            <label for="No. of Person">No. of Person</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="numbers" class="form-control" id="days-count" placeholder="No. of Days">
                                            <label for="No. of Days">No. of Days</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="traveling-date" placeholder="Date of traveling">
                                            <label for="Date of traveling">Date of traveling</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <!-- <input type="text" class="form-control" id="Hotel Rating" placeholder="Hotel-Rating">
                                            <label for="Hotel Rating">Select Hotel Category</label> -->
                                            <select>
                                            <option value="4star">Select Hotel Category</option>
                                                <option value="4star">5star</option>
                                                <option value="3star">4star</option>
                                                <option value="5star">3star</option>
                                                <option value="Economy class">Economy class</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </p></div>
                     <!---------   <div class="row g-3 pb-4">
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
                    </div>---------->
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
                </div>
            </div>
        </div>
                            
			<!-- </li>


			<li class="accordion-item"
				data-accordion-item> 
				<a href="#"
				class="accordion-title"> 
					<h6>Reactjs</h6> 
				</a> 
				<div class="accordion-content"
					data-tab-content> 
					<p>React is a declarative, efficient, and flexible 
						JavaScript library for building user interfaces. 
						It’s ‘V’ in MVC. ReactJS is an open-source, 
						component-based front-end library responsible only 
						for the view layer of the application. It is 
						maintained by Facebook.</p> 

				</div> 
			</li> 
		</ul> --> 
	</div> 
	<script> 
		$(document).foundation(); 
	</script>
                        </div>

                    

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php } include 'footer.php'?>