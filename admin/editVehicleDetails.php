<?php include('../database/connection.php'); ?>
<?php include('../admin/php_code.php'); ?>

<?php
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $update = true;
  $record = mysqli_query($db, "SELECT * FROM car WHERE id=$id");
  if ($record->num_rows > 0) {
    while ($n = $record->fetch_assoc()) {
      $img = $n['img'];
      $model = $n['model'];
      $year = $n['year'];
      $engine = $n['engine'];
      $rental = $n['rental'];
      $passenger = $n['passenger'];
      $luggage = $n['luggage'];
      $make = $n['make'];
      $transmission = $n['transmission'];
      $fuel = $n['fuel'];
      $door = $n['door'];
      $musicOn = $n['musicOn'];
      $ac = $n['ac'];
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

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
                <img class="img-profile rounded-circle" src="../images//admin-img.jpg">
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

        <body>


          <!-- Begin Page Content -->
          <div class="container-fluid" style="width: 1300px;">
            <!-- Page Heading -->
            <center>
              <h1 class="h3 mb-1 text-gray-800">Update Vehicle</h1>
            </center>

            <form method="post" action="viewDashboard.php">
              <div class="row">

                <div class="col-md-offset-1 col-md-6">

                  <input type="hidden" name="id" value="<?php echo $id; ?>">

                  <div class="col-15">
                    <label>Model</label>
                    <input type="text" name="model" class="form-control" value="<?php echo $model; ?>">
                    <span style="color: blue;">Ex: Allion</span>
                  </div><br>

                  <div class="col-15">
                    <label>Model Year</label>
                    <input type="number" class="form-control" name="year" value="<?php echo $year; ?>">
                  </div><br>

                  <div class="col-15">
                    <label>Engine Capacity (CM3)</label>
                    <input type="number" name="engine" class="form-control" value="<?php echo $engine; ?>">
                  </div><br>

                  <div class="col-15">
                    <label>Rental Per Day ($)</label>
                    <input type="number" class="form-control" name="rental" value="<?php echo $rental; ?>">
                  </div><br>

                  <div class="col-15">
                    <label>No of Passengers</label>
                    <input type="number" class="form-control" name="passenger" value="<?php echo $passenger; ?>">
                  </div><br>

                  <div class="col-15">
                    <label>No of Luggage</label>
                    <input type="number" class="form-control" name="luggage" value="<?php echo $luggage; ?>">
                  </div><br>

                </div>

                <div class="col-md-offset-1 col-md-6" style="bottom: -22px;">
                  <div class="col-15">
                    <select class="form-control" id="make" name="make" style="height: 50px;">
                      <option selected disabled="disabled">All Makes</option>
                      <option value="Honda" <?php
                                            if ($make == 'Honda') {
                                              echo "selected";
                                            }
                                            ?>>Honda</option>

                      <option value="Mitshubishi" <?php
                                                  if ($make == 'Mitshubishi') {
                                                    echo "selected";
                                                  }
                                                  ?>>Mitshubishi</option>

                      <option value="Kia" <?php
                                          if ($make == 'Kia') {
                                            echo "selected";
                                          }
                                          ?>>Kia</option>

                      <option value="Perodua" <?php
                                              if ($make == 'Perodua') {
                                                echo "selected";
                                              }
                                              ?>>Perodua</option>

                      <option value="Toyota" <?php
                                              if ($make == 'Toyota') {
                                                echo "selected";
                                              }
                                              ?>>Toyota</option>

                      <option value="Suzuki" <?php
                                              if ($make == 'Suzuki') {
                                                echo "selected";
                                              }
                                              ?>>Suzuki</option>
                    </select>
                  </div><br>

                  <div class="col-15">
                    <select class="form-control" id="transmission" name="transmission" style="height: 50px;">
                      <option selected disabled="disabled">All Transmissions</option>

                      <option value="Automatic" <?php
                                                if ($transmission == 'Automatic') {
                                                  echo "selected";
                                                }
                                                ?>>Automatic</option>

                      <option value="Manual" <?php
                                              if ($transmission == 'Manual') {
                                                echo "selected";
                                              }
                                              ?>>Manual</option>

                      <option value="Semi-Automatic" <?php
                                                      if ($transmission == 'Semi-Automatic') {
                                                        echo "selected";
                                                      }
                                                      ?>>Semi-Automatic</option>

                    </select>
                  </div><br>

                  <div class="col-15">
                    <select class="form-control" id="fuel" name="fuel" style="height: 50px;">
                      <option selected disabled="disabled">Fuel Type</option>

                      <option value="Petrol" <?php
                                              if ($fuel == 'Petrol') {
                                                echo "selected";
                                              }
                                              ?>>Petrol</option>

                      <option value="Diesol" <?php
                                              if ($fuel == 'Diesol') {
                                                echo "selected";
                                              }
                                              ?>>Diesol</option>

                      <option value="Hybrid" <?php
                                              if ($fuel == 'Hybrid') {
                                                echo "selected";
                                              }
                                              ?>>Hybrid</option>

                      <option value="Plugin Electric" <?php
                                                      if ($fuel == 'Plugin Electric') {
                                                        echo "selected";
                                                      }
                                                      ?>>Plugin Electric</option>

                      <option value="Petrol + CNG" <?php
                                                    if ($fuel == 'Petrol + CNG') {
                                                      echo "selected";
                                                    }
                                                    ?>>Petrol + CNG</option>

                      <option value="LPG" <?php
                                          if ($fuel == 'LPG') {
                                            echo "selected";
                                          }
                                          ?>>LPG</option>
                    </select>
                  </div><br>

                  <div class="col-15" style="bottom: -30px;">
                    <select class="form-control" id="door" name="door" style="height: 50px;">
                      <option selected disabled="disabled">No of Doors</option>

                      <option value="2" <?php
                                        if ($door == '2') {
                                          echo "selected";
                                        }
                                        ?>>2</option>

                      <option value="4" <?php
                                        if ($door == '4') {
                                          echo "selected";
                                        }
                                        ?>>4</option>

                      <option value="5" <?php
                                        if ($door == '5') {
                                          echo "selected";
                                        }
                                        ?>>5</option>

                    </select>
                  </div><br>
                  <hr><br>

                  <div class="col-15" style="bottom: -30px;">
                  <select class="form-control" id="musicOn" name="musicOn" style="height: 50px;">
                    <option selected disabled="disabled">Music Player</option>

                    <option value="Yes" <?php
                                        if ($musicOn == 'Yes') {
                                          echo "selected";
                                        }
                                        ?>>Music Player - Yes</option>

                    <option value="No" <?php
                                        if ($musicOn == 'No') {
                                          echo "selected";
                                        }
                                        ?>>Music Player - No</option>
                  </select>
                </div><br>

                <div class="col-15" style="bottom: -30px;">
                  <select class="form-control" id="ac" name="ac" style="height: 50px;">
                    <option selected disabled="disabled">A/C</option>

                    <option value="A/C" <?php
                                        if ($ac == 'A/C') {
                                          echo "selected";
                                        }
                                        ?>>A/C</option>

                    <option value="non A/C" <?php
                                        if ($ac == 'non A/C') {
                                          echo "selected";
                                        }
                                        ?>>non A/C</option>
                  </select>
                </div><br>

                <?php if ($update == true) : ?>
                <button class="btn btn-primary" type="submit" name="update">update</button>
              <?php else : ?>
                <button class="btn" type="submit" name="save">Update</button>
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