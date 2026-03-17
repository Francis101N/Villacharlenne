<?php
session_start();
include('connection/connect.php');

if (!isset($_GET['suite_id'])) {
    header("Location: rooms.php");
    exit;
}

$id = intval($_GET['suite_id']);

$stmt = $db->prepare("SELECT * FROM suites WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Suite not found";
    exit;
}

$suite = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Book <?php echo $suite['name']; ?></title>

    <script src="https://cdn.tailwindcss.com"></script>

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
                        <a href="index.php" class="nav-brand"><img src="img/core-img/" alt=""></a>

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
                                    <li><a href="services" class='text-dark'>Services</a></li>
                                    <li><a href="rooms">Rooms</a></li>
                                    <li><a href="news">News</a></li>
                                    <!-- <li style="background-color: #2FA4C7;"><a href="contact" class='text-light'>Contact</a></li> -->
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
    <section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">
            <h2>Book Now</h2>
        </div>
    </section>
    <br><br>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="max-w-7xl mx-auto p-6">

        <h1 class="text-3xl font-bold mb-6">Book <?php echo $suite['name']; ?></h1>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Suite Image -->
            <div>
                <img src="./cooladmin/uploads/<?php echo $suite['image1']; ?>" class="rounded-lg shadow">
            </div>

            <!-- Booking Form -->
            <div class="bg-white p-6 rounded-lg shadow">
                <!-- Suite Info (Name + Prices) -->
                <div class="bg-white p-6 rounded-lg shadow mb-6 text-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-md mx-auto">
                        <div class="p-4 border rounded-lg bg-gray-50">
                            <h3 class="font-semibold text-lg">Single Room</h3>
                            <p class="text-xl font-bold">$<?php echo number_format($suite['single_price'], 2); ?></p>
                        </div>
                        <div class="p-4 border rounded-lg bg-gray-50">
                            <h3 class="font-semibold text-lg">Shared Room</h3>
                            <p class="text-xl font-bold">$<?php echo number_format($suite['shared_price'], 2); ?></p>
                        </div>
                    </div>
                </div>
                <form action="proc-book-room.php" method="POST">

                    <input type="hidden" name="suite_id" value="<?php echo $suite['id']; ?>">

                    <div class="mb-4">
                        <label class="block font-semibold">Full Name</label>
                        <input type="text" name="name" required class="w-full border p-3 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold">Email</label>
                        <input type="email" name="email" required class="w-full border p-3 rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold">Phone</label>
                        <input type="text" name="phone" required class="w-full border p-3 rounded">
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">

                        <div>
                            <label class="block font-semibold">Check In</label>
                            <input type="date" name="checkin" required class="w-full border p-3 rounded">
                        </div>

                        <div>
                            <label class="block font-semibold">Check Out</label>
                            <input type="date" name="checkout" required class="w-full border p-3 rounded">
                        </div>

                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold">Guests</label>
                        <input type="number" name="guests" min="1" max="<?php echo $suite['max_occupancy']; ?>" required class="w-full border p-3 rounded">
                    </div>

                    <button class="w-full bg-[#87ceeb] hover:bg-black text-white font-semibold py-3 rounded">
                        Confirm Booking
                    </button>

                </form>

            </div>

        </div>

    </div>

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