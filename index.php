<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Villa Charlenne | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<style>
    /* .nav-brand img {
        height: 100px;
    } */
</style>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php
    include('inc/header.php');
    ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">The Vacation Heaven</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
                                    Discover beautifully curated stays designed for comfort, relaxation, and unforgettable experiences. Book your perfect getaway and enjoy world-class hospitality in stunning destinations.</p>
                                <a href="about-us" class="btn palatin-btn mt-50 text-light" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">A place to remember</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
                                    Find unique accommodations tailored to every traveler. From luxury villas to cozy apartments, experience stays that turn every trip into a lasting memory.</p>
                                <a href="about-us" class="btn palatin-btn mt-50 text-light" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-9">
                            <!-- Slide Content -->
                            <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                                <div class="line" data-animation="fadeInUp" data-delay="300ms"></div>
                                <h2 data-animation="fadeInUp" data-delay="500ms">Enjoy your life</h2>
                                <p data-animation="fadeInUp" data-delay="700ms">
                                    Escape the ordinary and explore exceptional places to stay. Enjoy comfort, style, and seamless booking designed to make every moment of your journey special.</p>
                                <a href="about-us" class="btn palatin-btn mt-50 text-light" data-animation="fadeInUp" data-delay="900ms">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="#">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Check In</label>
                                <select class="form-control" id="select1">
                                    <option>19 June</option>
                                    <option>20 June</option>
                                    <option>21 June</option>
                                    <option>22 June</option>
                                    <option>23 June</option>
                                    <option>24 June</option>
                                    <option>25 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Check Out</label>
                                <select class="form-control" id="select2">
                                    <option>20 June</option>
                                    <option>21 June</option>
                                    <option>22 June</option>
                                    <option>23 June</option>
                                    <option>24 June</option>
                                    <option>25 June</option>
                                    <option>26 June</option>
                                    <option>27 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Adults</label>
                                <select class="form-control" id="select3">
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Childrens</label>
                                <select class="form-control" id="select4">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <button type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="about-text text-center mb-100">
                        <div class="section-heading text-center">
                            <div class="line-"></div>
                            <h2>A Place to Remember</h2>
                        </div>

                        <p>
                            Discover exceptional accommodations designed to make every stay unforgettable.
                            From elegant apartments to luxurious villas, our carefully selected properties
                            offer comfort, style, and the perfect atmosphere for relaxation. Whether you
                            are traveling for leisure or business, find a space that truly feels like home.
                        </p>

                        <div class="about-key-text">
                            <h6><span class="fa fa-check"></span> Handpicked luxury apartments and villas</h6>
                            <h6><span class="fa fa-check"></span> Secure and seamless booking experience</h6>
                            <h6><span class="fa fa-check"></span> Prime locations in top travel destinations</h6>
                        </div>

                        <a href="rooms" class="btn palatin-btn mt-50 text-light">Explore Rooms</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail homepage mb-100">
                        <!-- First Img -->
                        <div class="first-img wow fadeInUp" data-wow-delay="100ms">
                            <img src="img/bg-img/5.jpg" alt="">
                        </div>
                        <!-- Second Img -->
                        <div class="second-img wow fadeInUp" data-wow-delay="300ms">
                            <img src="img/bg-img/6.jpg" alt="">
                        </div>
                        <!-- Third Img-->
                        <div class="third-img wow fadeInUp" data-wow-delay="500ms">
                            <img src="img/bg-img/7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Pool Area Start ##### -->
    <section class="pool-area section-padding-100 bg-img bg-fixed" style="background-image: url(img/bg-img/4.png);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-7">
                    <div class="pool-content text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="section-heading text-center white">
                            <div class="line-"></div>
                            <h2>Luxury Relaxation Experience</h2>
                            <p>
                                Enjoy a relaxing escape with world-class amenities designed for comfort
                                and unforgettable moments. From refreshing poolside experiences to
                                beautiful outdoor spaces, our accommodations provide the perfect
                                setting to unwind and recharge during your stay.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-cocktail-1"></i>
                                    <p>Poolside Bar</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-swimming-pool"></i>
                                    <p>Luxury Swimming Pool</p>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4">
                                <div class="pool-feature">
                                    <i class="icon-beach"></i>
                                    <p>Private Sun Loungers</p>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <a href="services" class="btn palatin-btn mt-50 text-light">Explore Amenities</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Pool Area End ##### -->

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Explore Our Featured Stays</h2>
                        <p>
                            Discover a selection of comfortable and stylish accommodations designed
                            to suit every traveler. Whether you're looking for luxury, space, or a
                            cozy retreat, find the perfect place to relax and enjoy your stay.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Property -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>

                        <p class="price-from">From $150 / night</p>

                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Luxury Deluxe Suite</h4>
                            <p>
                                Enjoy a spacious and elegantly designed suite featuring modern
                                amenities, comfortable bedding, and beautiful surroundings for a
                                truly relaxing stay.
                            </p>
                        </div>

                        <a href="#" class="book-room-btn btn palatin-btn text-light">View Details</a>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="300ms">
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/8.jpg);"></div>

                        <p class="price-from">From $180 / night</p>

                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Executive Double Suite</h4>
                            <p>
                                Perfect for couples or small families, this suite offers generous
                                space, stylish interiors, and a relaxing atmosphere for a memorable stay.
                            </p>
                        </div>

                        <a href="#" class="book-room-btn btn palatin-btn text-light">View Details</a>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-rooms-area wow fadeInUp" data-wow-delay="500ms">
                        <div class="bg-thumbnail bg-img" style="background-image: url(img/bg-img/9.jpg);"></div>

                        <p class="price-from">From $100 / night</p>

                        <div class="rooms-text">
                            <div class="line"></div>
                            <h4>Cozy Single Room</h4>
                            <p>
                                A comfortable and affordable option for solo travelers looking
                                for a peaceful space with essential amenities and modern comfort.
                            </p>
                        </div>

                        <a href="#" class="book-room-btn btn palatin-btn text-light">View Details</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <section class="container section-padding-100">
        <!-- Section Title -->
        <div class="col-12">
            <div class="elements-title text-center mb-5">
                <h2>Our Performance Metrics</h2>
                <p>See how we deliver exceptional experiences and trusted stays for travelers worldwide.</p>
            </div>
        </div>

        <div class="col-12">
            <!-- Loaders Area Start -->
            <div class="our-skills-area">
                <div class="row">

                    <!-- Single Metric -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-skils-area mb-100 text-center">
                            <div id="circle" class="circle" data-value="0.95">
                                <div class="skills-text">
                                    <span>95%</span>
                                    <p>Guest Satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Metric -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-skils-area mb-100 text-center">
                            <div id="circle2" class="circle" data-value="0.85">
                                <div class="skills-text">
                                    <span>85%</span>
                                    <p>Repeat Guests</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Metric -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-skils-area mb-100 text-center">
                            <div id="circle3" class="circle" data-value="1">
                                <div class="skills-text">
                                    <span>100%</span>
                                    <p>Booking Success</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Metric -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-skils-area mb-100 text-center">
                            <div id="circle4" class="circle" data-value="0.90">
                                <div class="skills-text">
                                    <span>90%</span>
                                    <p>Verified Hosts</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area d-flex flex-wrap align-items-center section-padding-100 bg-light">

        <!-- Map -->
        <div class="home-map-area wow fadeInLeft" data-wow-delay="100ms">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.257218738205!2d3.424395614332403!3d6.437712824269739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf9b8d9f12345%3A0xabcdef1234567890!2sLekki%2C%20Lagos%2C%20Nigeria!5e0!3m2!1sen!2sng!4v1580000000000"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

        <!-- Contact Info -->
        <div class="contact-info wow fadeInRight" data-wow-delay="200ms">
            <div class="section-heading">
                <div class="line-"></div>
                <h2>Contact Us</h2>
                <p>
                    Have questions or need assistance with your booking? Our team is ready to help
                    you find the perfect stay and ensure a smooth experience from start to finish.
                </p>
            </div>

            <!-- Address & Contact -->
            <h4 class="mt-4">Lekki, Lagos, Nigeria</h4>
            <h5>+234 800 123 4567</h5>
            <h5>info@techbyfrancis.com</h5>

            <!-- Social Links -->
            <div class="social-info mt-4">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>

    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
    include('inc/footer.php');
    ?>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>