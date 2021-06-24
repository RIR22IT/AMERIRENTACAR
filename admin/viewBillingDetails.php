<?php include '../database/connection.php'; ?>
<?php include '../admin/php_code.php'; ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html>

<head>

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>View Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">

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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminDashboard.php">
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
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="adminDashboard.php">
                    <i class="fas fa-plus-square"></i>
                    <span>Add</span>
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

        </ul>

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

                <center>
                    <h1 class="h3 mb-1 text-gray-800">View Billing Details</h1>
                </center><br>

                <center>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>TYPE</th>
                                    <th>MODEL</th>
                                    <th>PICK DATE</th>
                                    <th>DROP DATE</th>
                                    <th>QTY</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>COMPANY NAME</th>
                                    <th>COUNTRY</th>
                                    <th>STREET</th>
                                    <th>UNIT</th>
                                    <th>CITY</th>
                                    <th>POST CODE</th>
                                    <th>CONTACT</th>
                                    <th>EMAIL</th>
                                    <th>INFORMATION</th>
                                    <th>SUB TOTAL</th>
                                </tr>
                            </thead>

                            <?php
                            $i   = 1;
                            $qry = "select checkout.pickDate,checkout.dropDate,checkout.qty,checkout.firstname,checkout.lastname,checkout.companyname,checkout.country,checkout.streat,checkout.unit,checkout.city,checkout.postcode,checkout.phone,checkout.emailaddress,checkout.information,checkout.subTot, car.type, car.model 
                                    from checkout 
                                    inner join car on checkout.vehicleId = car.id";
                            $run = $db->query($qry);
                            if ($run->num_rows > 0) {
                                while ($row = $run->fetch_assoc()) {
                            ?>

                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $row['type']; ?></td>
                                        <td><?php echo $row['model']; ?></td>
                                        <td><?php echo $row['pickDate']; ?></td>
                                        <td><?php echo $row['dropDate']; ?></td>
                                        <td><?php echo $row['qty']; ?></td>
                                        <td><?php echo $row['firstname']; ?></td>
                                        <td><?php echo $row['lastname']; ?></td>
                                        <td><?php echo $row['companyname']; ?></td>
                                        <td><?php echo $row['country']; ?></td>
                                        <td><?php echo $row['streat']; ?></td>
                                        <td><?php echo $row['unit']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['postcode']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['emailaddress']; ?></td>
                                        <td><?php echo $row['information']; ?></td>
                                        <td><?php echo $row['subTot']; ?></td>
                                    </tr>

                                    <?php ?>

                            <?php
                                }
                            }
                            ?>

                        </table>
                    </div>
                </center>

                <?php if (isset($_SESSION['message'])) : ?>
                    <div class="msg">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif ?>

                <!-- Bootstrap core JavaScript-->
                <script src="../vendor/jquery/jquery.min.js"></script>
                <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- prevent form resubmission -->
                <script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }
                </script>

                <!-- Core plugin JavaScript-->
                <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->


</body>

</html>