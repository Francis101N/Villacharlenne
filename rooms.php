<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Rooms | Villa Charlenne</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="index" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class=""><a href="index" class="text-dark">Home</a></li>
                                    <li><a href="/VillaCharlenne/about-us" class='text-dark'>About Us</a></li>
                                    <li><a href="services">Services</a></li>
                                    <li style="background-color: blue;"><a href="rooms" class='text-light'>Rooms</a></li>
                                    <li><a href="news">News</a></li>
                                    <!-- <li><a href="contact">Contact</a></li> -->
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="contact" class="btn p-3" style="background-color:blue;">Make a Reservation</a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-6.jpg);">
        <div class="bradcumbContent">
            <h2>Rooms</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

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

    <!-- ##### Rooms Area Start ##### -->
    <section class="rooms-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Choose Your Perfect Room</h2>
                        <p>Experience comfort and elegance at VillaCharlenne. Our rooms are designed to provide a relaxing atmosphere, modern amenities, and a memorable stay.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <?php
                include("connection/connect.php");

                $query = "SELECT * FROM suites ORDER BY id DESC";
                $result = mysqli_query($db, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="single-rooms-area wow fadeInUp">

                            <div class="bg-thumbnail bg-img"
                                style="background-image:url(./cooladmin/uploads/<?php echo $row['image1']; ?>);"></div>

                            <p class="price-from">
                                From $<?php echo $row['shared_price']; ?> / night
                            </p>

                            <div class="rooms-text">
                                <div class="line"></div>

                                <h4><?php echo $row['name']; ?></h4>

                                <p><?php echo substr($row['description'], 0, 120); ?>...</p>
                            </div>

                            <a href="suite-details.php?id=<?php echo $row['id']; ?>" class="book-room-btn btn palatin-btn text-light">
                                View Details
                            </a>

                        </div>

                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
    <!-- ##### Rooms Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
    include("inc/footer.php");
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