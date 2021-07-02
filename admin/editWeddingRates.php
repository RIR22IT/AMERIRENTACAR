<?php include('../database/connection.php'); ?>
<?php include('../admin/php_code.php'); ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
?>

<?php
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM weddingrates WHERE id=$id");
    if ($record->num_rows > 0) {
        while ($n = $record->fetch_assoc()) {
            $category = $n['category'];
            $vehicle = $n['vehicle'];
            $twohourand30Km = $n['2hourand30Km'];
            $fourhourand40Km = $n['4hourand40Km'];
            $eighthourand80Km = $n['8hourand80Km'];
            $excessHours = $n['excessHours'];
            $excessMileage = $n['excessMileage'];
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        form {
            width: 45%;
            margin: 50px auto;
            text-align: left;
            padding: 20px;
            border: 1px solid #bbbbbb;
            border-radius: 5px;
        }

        .msg {
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }
    </style>

    <title>ADMIN PANEL</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminPanel.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="adminDashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ADMIN PANEL</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="adminDashboard.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add Vehicle</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="selfDriverRates.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add Self Driver Rates</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="withDriverRates.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add With Driver Rates</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="adminweddingRates.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add Wedding Car Rates</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminBikeRates.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add Motorbike Rates</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="viewDashboard.php">
                    <i class="fas fa-eye"></i>
                    <span>View Vehicle Details</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="viewBillingDetails.php">
                    <i class="fas fa-eye"></i>
                    <span>View Billing Details</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="viewSelfDriver.php">
                    <i class="fas fa-eye"></i>
                    <span>View Self Driver Details</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="viewWithDriver.php">
                    <i class="fas fa-eye"></i>
                    <span>View With Driver Details</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="viewWeddingRates.php">
                    <i class="fas fa-eye"></i>
                    <span>View Wedding Rates</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewbikeRate.php">
                    <i class="fas fa-eye"></i>
                    <span>View Motorbike Rates</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../images//admin-img.jpg">
                            </a>
                        </li>
                        <!--logout btn-->
                        <li class="nav-item dropdown no-arrow" style="padding-top:15px; ">
                            <a href="logout.php?logout" class="btn btn-outline-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </li>

                    </ul>

                </nav>

                <body>


                    <!-- Begin Page Content -->
                    <div class="container-fluid" style="width: 1300px;">
                        <!-- Page Heading -->
                        <center>
                            <h1 class="h3 mb-1 text-gray-800">Update Wedding Rates</h1>
                        </center>

                        <form method="post" action="viewWeddingRates.php">
                            <div class="row">

                                <div class="col-md-offset-1 col-md-6">

                                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                                    <div class="col-15">
                                        <select class="form-control" id="category" name="category" style="height: 50px;" required>
                                            <option selected disabled="disabled">Select Category</option>

                                            <option value="LUXARY CARS" <?php
                                                                        if ($category == 'LUXARY CARS') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>LUXARY CARS</option>

                                            <option value="VINTAGE & CLASSIC CARS" <?php
                                                                                    if ($category == 'VINTAGE & CLASSIC CARS') {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>>VINTAGE & CLASSIC CARS</option>
                                            <option value="PREMIUM CARS" <?php
                                                                            if ($category == 'PREMIUM CARS') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>PREMIUM CARS</option>


                                        </select>
                                    </div><br>

                                    <div class="col-15">
                                        <label>Vehicle</label>
                                        <input type="text" name="vehicle" class="form-control" value="<?php echo $vehicle; ?>" required>
                                    </div><br>

                                    <div class="col-15">
                                        <label>2 Hours & 30kms</label>
                                        <input type="text" name="2hourand30Km" class="form-control" value="<?php echo $twohourand30Km; ?>" required>
                                    </div><br>

                                    <div class="col-15">
                                        <label>4 Hours & 40kms</label>
                                        <input type="text" class="form-control" name="4hourand40Km" value="<?php echo $fourhourand40Km; ?>" required>
                                    </div><br>

                                </div>

                                <div class="col-md-offset-1 col-md-6" style="bottom: -22px;">
                                    <div class="col-15">
                                        <label>8 Hours & 80kms</label>
                                        <input type="text" class="form-control" name="8hourand80Km" value="<?php echo $eighthourand80Km; ?>" required>
                                    </div><br>
                                    <div class="col-15">
                                        <label>Excess Hours</label>
                                        <input type="text" class="form-control" name="excessHours" value="<?php echo $excessHours; ?>" required>
                                    </div><br>

                                    <div class="col-15">
                                        <label>Excess Mileage</label>
                                        <input type="text" class="form-control" name="excessMileage" value="<?php echo $excessMileage; ?>" required>
                                    </div><br>

                                    <?php if ($update == true) : ?>
                                        <button class="btn btn-primary" type="submit" name="wedUpdate">update</button>
                                    <?php else : ?>
                                        <button class="btn" type="submit" name="wedding">Update</button>
                                    <?php endif ?>


                                </div>

                            </div>

                        </form>

                        <div class="card-body">
                            <?php
                            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                                echo '<h2 class = "bg-primary text-white"> ' . $_SESSION['success'] . '</h2>';
                                unset($_SESSION['success']);
                            }

                            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                                echo '<h2 class = "bg-primary text-white"> ' . $_SESSION['status'] . '</h2>';
                                unset($_SESSION['status']);
                            }

                            ?>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                        </div>
                        <!-- End of Main Content -->

                    </div>
                    <!-- End of Content Wrapper -->

                    <!-- Scroll to Top Button -->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Bootstrap core JavaScript-->
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

                </body>

</html>