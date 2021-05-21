<?php include ('../database/connection.php');?>
<?php  include('../admin/php_code.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

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

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
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
          <span>Add</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="viewDashboard.php">
          <i class="fas fa-eye"></i>
          <span>View</span>
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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->

            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="../images/admin-img.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="login.html" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="width: 1300px;">
          <!-- Page Heading -->
          <center>
            <h1 class="h3 mb-1 text-gray-800">Add Vehicle</h1>
          </center>

          <form method="post" action="viewDashboard.php" enctype="multipart/form-data">
            <div class="row">

              <div class="col-md-offset-1 col-md-6">

                <div class="col-15">
                  <label for="img">Vehicle Image</label>
                  <input type="file" class="form-control" name="img" value="" >
                </div><br>

                <div class="col-15">
                  <label>Model</label>
                  <input type="text" name="model" class="form-control" value="">
                  <span style="color: blue;">Ex: Allion</span>
                </div><br>

                <div class="col-15">
                  <label>Model Year</label>
                  <input type="number" class="form-control" name="year" value="">
                </div><br>

                <div class="col-15">
                  <label>Engine Capacity (CM3)</label>
                  <input type="number" name="engine" class="form-control" value="">
                </div><br>

                <div class="col-15">
                  <label>Rental Per Day ($)</label>
                  <input type="number" class="form-control" name="rental" value="">
                </div><br>

                <div class="col-15">
                  <label>No of Passengers</label>
                  <input type="number" class="form-control" name="passenger" value="">
                </div><br>

                <div class="col-15">
                  <label>No of Luggage</label>
                  <input type="number" class="form-control" name="luggage" value="">
                </div><br>

              </div>

              <div class="col-md-offset-1 col-md-6" style="bottom: -32px;">
                <div class="col-15">
                  <select class="form-control" id="make" name="make" style="height: 50px;">
                    <option selected disabled="disabled">All Makes</option>
                    <option value="Honda">Honda</option>
                    <option value="Mitshubishi">Mitshubishi</option>
                    <option value="Kia">Kia</option>
                    <option value="Perodua">Perodua</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Suzuki">Suzuki</option>
                  </select>
                </div><br>

                <div class="col-15">
                  <select class="form-control" id="transmission" name="transmission" style="height: 50px;">
                    <option selected disabled="disabled">All Transmissions</option>
                    <option value="Automatic">Automatic</option>
                    <option value="Manual">Manual</option>
                    <option value="Semi-Automatic">Semi-Automatic</option>
                  </select>
                </div><br>

                <div class="col-15">
                  <select class="form-control" id="fuel" name="fuel" style="height: 50px;">
                    <option selected disabled="disabled">Fuel Type</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Diesol">Diesol</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Plugin Electric">Plugin Electric</option>
                    <option value="Petrol + CNG">Petrol + CNG</option>
                    <option value="LPG">LPG</option>
                  </select>
                </div><br>

                <div class="col-15" style="bottom: -30px;">
                  <select class="form-control" id="door" name="door" style="height: 50px;">
                    <option selected disabled="disabled">No of Doors</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div><br>
                <hr><br>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="musicOn" value="Yes" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Music Player - YES
                  </label>
                </div><br>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="musicOn" value="No">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Music Player - NO
                  </label>
                </div><br>
                <hr><br>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="ac" value="A/C" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    A/C
                  </label>
                </div><br>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="ac" value="non A/C">
                  <label class="form-check-label" for="flexRadioDefault2">
                    non A/C
                  </label>
                </div><br>
                <hr><br>

              </div>
            </div>

            <div class="col-md-20">
              <button type="submit" name="save" class="btn btn-primary">Add</button>
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

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button -->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="newlogin.php">Logout</a>
            </div>

          </div>
        </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>