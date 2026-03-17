<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>News | Villa Charlenne</title>

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
                        <a href="index" class="nav-brand"><img src="img/core-img/" alt=""></a>

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
                                    <li class=""><a href="home">Home</a></li>
                                    <li><a href="/VillaCharlenne/about-us">About Us</a></li>
                                    <li><a href="services">Services</a></li>
                                    <li><a href="rooms">Rooms</a></li>
                                    <li style="background-color: #2FA4C7;"><a href="news" class='text-light'>News</a></li>
                                    <!-- <li><a href="contact">Contact</a></li> -->
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="contact" class="btn p-3" style="background-color:#2FA4C7;">Make a Reservation</a>
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="bradcumbContent">
            <h2>News</h2>
        </div>
    </section>
    <br><br><br>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="palatin-blog-posts">

                        <?php
                        include('connection/connect.php');

                        // Fetch latest 5 news/blogs
                        $query = "SELECT * FROM news ORDER BY date_created DESC LIMIT 5";
                        $result = $db->query($query);

                        if ($result->num_rows > 0):
                            while ($row = $result->fetch_assoc()):
                                $blog_id    = $row['id'];
                                $title      = htmlspecialchars($row['title']);
                                $description = htmlspecialchars($row['description']);
                                $image      = 'cooladmin/uploads/' . $row['blog_img'];
                                $date       = date("F d, Y", strtotime($row['date_created']));
                        ?>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb">
                                        <img src="<?= $image ?>" alt="<?= $title ?>">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <!-- Post Date-->
                                        <a href="view_news.php?id=<?= $blog_id ?>" class="post-date btn palatin-btn"><?= $date ?></a>
                                        <!-- Post Title -->
                                        <a href="view_news.php?id=<?= $blog_id ?>" class="post-title"><?= $title ?></a>
                                        <div class="post-meta d-flex justify-content-center"></div>
                                        <!-- Post Excerpt -->
                                        <p><?= substr($description, 0, 150) ?>...</p>
                                    </div>
                                </div>


                        <?php
                            endwhile;
                        else:
                            echo "<p>No news/blogs available yet.</p>";
                        endif;
                        ?>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ##### Blog Area End ##### -->

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