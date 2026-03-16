<?php
session_start();
include('connection/connect.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: suites.php");
    exit;
}

$decoded_id = base64_decode($_GET['id']);

// Make sure it is a valid integer
$id = intval($decoded_id);

$stmt = $db->prepare("SELECT * FROM suites WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Suite not found!";
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
    <title><?php echo htmlspecialchars($suite['name']); ?> - Suite Details</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.tailwindcss.com"></script>

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
            <h2>Suite Details</h2>
        </div>
    </section>


    <div class="container mx-auto px-4 py-8">

        <!-- Suite Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-4"><?php echo htmlspecialchars($suite['name']); ?></h1>

        <!-- Image Gallery -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <?php
            $images = [$suite['image1'], $suite['image2'], $suite['image3'], $suite['image4'], $suite['image5'], $suite['image6']];
            foreach ($images as $img): ?>
                <?php if ($img): ?>
                    <div class="rounded-lg overflow-hidden shadow-lg">
                        <img src="./cooladmin/uploads/<?php echo $img; ?>" alt="<?php echo htmlspecialchars($suite['name']); ?>" class="w-full h-64 object-cover">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- Suite Info -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-2xl font-semibold mb-4">About this Suite</h2>
            <p class="text-gray-700 mb-4"><?php echo nl2br(htmlspecialchars($suite['description'])); ?></p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6z" />
                    </svg>
                    <span>Max Occupancy: <?php echo $suite['max_occupancy']; ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5z" />
                    </svg>
                    <span>Total Rooms: <?php echo $suite['total_rooms']; ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 3h12v14H4V3z" />
                    </svg>
                    <span>Available Rooms: <?php echo $suite['available_rooms']; ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 100 12A6 6 0 0010 2z" />
                    </svg>
                    <span>Status: <?php echo $suite['availability_status']; ?></span>
                </div>
            </div>
        </div>

        <!-- Pricing -->
        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h2 class="text-2xl font-semibold mb-4">Pricing</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 border rounded-lg bg-gray-50 text-center">
                    <h3 class="font-semibold">Single Room</h3>
                    <p class="text-xl font-bold">$<?php echo number_format($suite['single_price'], 2); ?></p>
                </div>
                <div class="p-4 border rounded-lg bg-gray-50 text-center">
                    <h3 class="font-semibold">Shared Room</h3>
                    <p class="text-xl font-bold">$<?php echo number_format($suite['shared_price'], 2); ?></p>
                </div>
            </div>
        </div>

        <br>
        <!-- Book Now Button -->
        <div class="text-center">
            <a href="book-room.php?suite_id=<?php echo $suite['id']; ?>" class="bg-[#87ceeb] hover:bg-black text-white font-semibold py-3 px-6 rounded-lg transition">
                Book Now
            </a>
        </div>
        <br>

    </div>
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