<?php
session_start();
include('connection/connect.php');
include('fns.php');

$error = "";
$success = "";

if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}

$query = "select * from news order by id desc";
$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <title>News </title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../dist/images/BBR_logo-removebg-preview-removebg-preview.png" width="120px"
                                alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form action="" method="get" role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" name="search" placeholder="Search..." class="form-control mt-0">
                                <a href="proc-search" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin
                                    <?php echo $_SESSION['admin_user']; ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title p-2">News ( <span class="text-danger"><?= $num; ?></span> )</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>

                            <a href="add_news" class="btn" style="background-color: #2FA4C7; color: white;">ADD NEWS</a>


                            <br>


                        </div>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">

                            <?php if (!empty($_GET['error'])): ?>
                                <div class="alert alert-danger">
                                    <?php echo htmlspecialchars($_GET['error']); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($_GET['success'])): ?>
                                <div class="alert alert-success">
                                    <?php echo htmlspecialchars($_GET['success']); ?>
                                </div>
                            <?php endif; ?>


                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Blog Image</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $sn = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $sn++; ?></td>

                                                <td><?php echo htmlspecialchars($row['title']); ?></td>

                                                <td><?php echo htmlspecialchars($row['description']); ?></td>

                                                <td>
                                                    <?php if (!empty($row['blog_img'])): ?>
                                                        <img src="uploads/<?php echo $row['blog_img']; ?>" alt="Suite Image"
                                                            style="width:150px;height:100px;object-fit:cover;">
                                                    <?php else: ?>
                                                        <span class="text-muted">No image</span>
                                                    <?php endif; ?>
                                                </td>

                                                <td><?php echo htmlspecialchars($row['date_created']); ?></td>

                                                <td>
                                                    <a href="javascript:;" class="btn btn-info btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#viewSuiteModal<?php echo $row['id']; ?>">View</a>

                                                    <a href="delete_suite.php?id=<?php echo $row['id']; ?>"
                                                        onclick="return confirm('Are you sure you want to delete this suite?');"
                                                        class="btn btn-danger btn-sm">Delete</a>

                                                    <a href="javascript:;" class="btn btn-success btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#updateSuiteModal<?php echo $row['id']; ?>">
                                                        Update
                                                    </a>

                                                </td>
                                            </tr>

                                            <!-- Modal for Viewing Suite -->
                                            <div class="modal fade" id="viewSuiteModal<?php echo $row['id']; ?>"
                                                tabindex="-1" aria-labelledby="viewSuiteLabel<?php echo $row['id']; ?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-upsteamRed">
                                                            <h3 class="modal-title"
                                                                id="viewSuiteLabel<?php echo $row['id']; ?>">
                                                                <b>NEWS NAME:</b>
                                                                <?php echo htmlspecialchars($row['title']); ?>
                                                            </h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <b>NEWS IMAGE :</b>
                                                            <?php if (!empty($row['blog_img'])): ?>
                                                                <img src="uploads/<?php echo $row['blog_img']; ?>"
                                                                    class="img-fluid mb-3" alt="Suite Image"
                                                                    style="width:250px;height:200px;object-fit:cover;">
                                                            <?php endif; ?><br><br>
                                                            <p><b>DESCRIPTION:</b> <?php echo nl2br($row['description']); ?>
                                                            </p>
                                                            <p class="text-muted"><b>DATE CREATED:</b>
                                                                <?php echo htmlspecialchars($row['date_created']); ?></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal for Updating Suite -->
                                            <div class="modal fade" id="updateSuiteModal<?php echo $row['id']; ?>"
                                                tabindex="-1" aria-labelledby="updateSuiteLabel<?php echo $row['id']; ?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <div class="modal-header bg-upsteamRed">
                                                            <h3 class="modal-title"
                                                                id="updateSuiteLabel<?php echo $row['id']; ?>">
                                                                Update News: <?php echo htmlspecialchars($row['title']); ?>
                                                            </h3>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>

                                                        <form action="update_suite.php?id=<?php echo $row['id']; ?>"
                                                            method="POST" enctype="multipart/form-data">

                                                            <div class="modal-body">

                                                                <!-- Suite Name -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">News Name</label>
                                                                    <input type="text" name="suite_name"
                                                                        class="form-control"
                                                                        value="<?php echo htmlspecialchars($row['title']); ?>"
                                                                        required>
                                                                </div>

                                                                <!-- Suite Description -->
                                                                <div class="mb-3">
                                                                    <label
                                                                        class="form-label fw-semibold">Description</label>
                                                                    <textarea name="suite_description" class="form-control"
                                                                        rows="4"
                                                                        required><?php echo htmlspecialchars($row['description']); ?></textarea>
                                                                </div>

                                                                <!-- Image 1 -->
                                                                <div class="mb-3">
                                                                    <label class="form-label fw-semibold">Suite Image
                                                                        1</label>
                                                                    <input type="file" name="suite_image1"
                                                                        class="form-control">
                                                                    <?php if (!empty($row['blog_img'])): ?>
                                                                        <small class="text-muted">Current image:</small><br>
                                                                        <img src="uploads/<?php echo $row['blog_img']; ?>"
                                                                            class="img-fluid mt-1"
                                                                            style="width:200px;height:150px;object-fit:cover;">
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-success">
                                                                    Update Suite
                                                                </button>
                                                            </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>



                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include('footer.php'); ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!-- Datatables -->
    <script src="dist/datatables/js/dataTables.min.js"></script>
    <script src="dist/datatables/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="dist/datatables/css/dataTables.bootstrap5.min.css">
    <!-- Datatables -->

    <script>
        $(document).ready(function () {
            $('.table').DataTable();

        });
    </script>
    <!-- smart table -->

    <script>
        $(function () {

            $("#checkAll").click(function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });

        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>