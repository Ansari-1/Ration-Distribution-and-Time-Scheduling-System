<?php
require '../assets/config1.php';
$query = "select * from customer";
$query1 = "select * from ration_items";
$result = mysqli_query($con, $query);
$result1 = mysqli_query($con, $query1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <title>
    Items RDS
  </title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />

</head>


<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">

      <div class="logo"><a href="#" class="simple-text logo-mini">
          <i class="material-icons">art_track</i>
        </a>
        <a href="#" class="simple-text logo-normal">
          Ration Scheduler
        </a>
      </div>
      <div class="logo"><a href="#" class="simple-text logo-mini">
        </a>
        <a href="#" class="simple-text logo-normal">
          <h4 id="Clock"><b></b></p>
          </h4>
          <h4 id="Date"><b></b></p>
          </h4>
        </a>
      </div>




      <div class="sidebar-wrapper">

        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="dash.php">
              <i class="material-icons">store</i>
              <p> Home </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="today.php">
              <i class="material-icons">content_paste</i>
              <p> Today's Schedule </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="batch.php">
              <i class="material-icons">widgets</i>
              <p> Batch Schedule </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="invento.php">
              <i class="material-icons">info</i>
              <p> Inventory </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="list.php">
              <i class="material-icons">contacts</i>
              <p> Customers </p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Items.php">
              <i class="material-icons">assignment</i>
              <p> Ration Items </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../../home.php">
              <i class="material-icons">lock_outline</i>
              <p> Logout </p>
            </a>
          </li>

        </ul>
        <br>
        <div class="logo"><a href="#" class="simple-text logo-mini">
          </a>
          <a href="#" class="simple-text logo-normal">
            <?php
            $sql00 = "select * from ration_items";
            $result00 = mysqli_query($con, $sql00);
            while ($rows00 = mysqli_fetch_assoc($result00)) {
            ?>

              <h5><?php echo $rows00['Item_name']; ?>: <b><?php echo $rows00['Available']; ?></b></p>
              </h5>

            <?php    }
            ?>
          </a>
        </div>
      </div>

    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">RDS Update Ration Items</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">

          <!-- Table -->
          <form name="table" method="post">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">Customers</h4>
                  </div>
                  <div class="card-body">
                    <div class="toolbar">
                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Item Name</th>
                            <th>Free Qty</th>
                            <th>Qty AAY</th>
                            <th>Price 1</th>
                            <th>Qty BPL</th>
                            <th>Price 2</th>
                            <th>Qty APL</th>
                            <th>Price 3</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $result_run = mysqli_query($con, $query1);
                          while ($rows = mysqli_fetch_assoc($result_run)) {
                          ?>
                            <tr>
                              <td><b><?php echo $rows['Item_no']; ?></td>
                              <td><b><?php echo $rows['Item_name']; ?></td>
                              <td><b><?php echo $rows['Qty_free']; ?></td>
                              <td><b><?php echo $rows['Qty_1']; ?></td>
                              <td><b><?php echo $rows['Price_1']; ?></td>
                              <td><b><?php echo $rows['Qty_2']; ?></td>
                              <td><b><?php echo $rows['Price_2']; ?></td>
                              <td><b><?php echo $rows['Qty_3']; ?></td>
                              <td><b><?php echo $rows['Price_3']; ?></td>
                            </tr>
                          <?php
                          }
                          ?>

                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer justify-content-center">
                      <button type='submit' class='btn btn-primary' name='up_qty'>
                        <span class="btn-label">
                          <i class="material-icons">assignment</i>
                        </span>';
                        Update Quantiity
                        <div class="ripple-container"></div></button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </form>


          <!-- Date Time -->
          <form name="set_qty" method="post">
            <div class="row">
              <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                  <div class="card-header card-header-icon card-header-primary">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">Item
                      <small class="category">- Update</small>
                    </h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label><b>Item: </b></label>
                          <select name="option" class="selectpicker" data-style="select-with-transition" title="--">
                            <?php
                            while ($rows = mysqli_fetch_assoc($result1)) {
                            ?>
                              <option value="<?php echo $rows['Item_no']; ?>"><?php echo $rows['Item_name']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Free Qty</label>
                          <input name="qtyfree" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">AAY Qty</label>
                          <input name="qty1" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">AAY Price</label>
                          <input name="price_1" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">BPL Qty</label>
                          <input name="qty2" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">BPL Price</label>
                          <input name="price_2" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">APL Qty</label>
                          <input name="qty3" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">APL Price</label>
                          <input name="price_3" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button name="set_qty1" type="submit" class="btn btn-primary pull-right">Set Quantity</button>
                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>
            </div>
          </form>

          <?php
          if (isset($_POST['set_qty1'])) {
            $id = $_POST['option'];
            $qtyfree = $_POST['qtyfree'];
            $qty1 = $_POST['qty1'];
            $qty2 = $_POST['qty2'];
            $qty3 = $_POST['qty3'];
            $price1 = $_POST['price_1'];
            $price2 = $_POST['price_2'];
            $price3 = $_POST['price_3'];
            $sql = "UPDATE ration_items SET Qty_free='$qtyfree', Qty_1='$qty1', Price_1='$price1', Qty_2='$qty2', Price_2='$price2', Qty_3='$qty3', Price_3='$price3' WHERE Item_no='$id';";
            mysqli_query($con, $sql);
          }
          ?>


          <?php
          $result_run1 = mysqli_query($con, $query);
          if (isset($_POST['up_qty'])) {
            $sql1 = " UPDATE customer SET it1=(SELECT Qty_1 FROM ration_items WHERE Item_no='1')*No_of_Member, it2=(SELECT Qty_1 FROM ration_items WHERE Item_no='2')*No_of_Member,
                  price_1=(SELECT Price_1 FROM ration_items WHERE Item_no='1')*it1, price_2=(SELECT Price_2 FROM ration_items WHERE Item_no='2')*it2 WHERE RationCard_type='AAY';";
            $sql2 = " UPDATE customer SET it1=(SELECT Qty_2 FROM ration_items WHERE Item_no='1')*No_of_Member, it2=(SELECT Qty_2 FROM ration_items WHERE Item_no='2')*No_of_Member,
                  price_1=(SELECT Price_1 FROM ration_items WHERE Item_no='1')*it1, price_2=(SELECT Price_2 FROM ration_items WHERE Item_no='2')*it2 WHERE RationCard_type='BPL';";
            $sql3 = " UPDATE customer SET it1=(SELECT Qty_3 FROM ration_items WHERE Item_no='1')*No_of_Member, it2=(SELECT Qty_3 FROM ration_items WHERE Item_no='2')*No_of_Member,
                  price_1=(SELECT Price_1 FROM ration_items WHERE Item_no='1')*it1, price_2=(SELECT Price_2 FROM ration_items WHERE Item_no='2')*it2 WHERE RationCard_type='APL';";
            mysqli_query($con, $sql1);
            mysqli_query($con, $sql2);
            mysqli_query($con, $sql3);
          }
          ?>








        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script> (Sem 6th), <b> made by <b>Team 9</b>: Vipul, Saurabh, Nitesh, Saleem,
            (Guide: Prof. Khalid Alfatmi), <br>SVKM's Institue of Technology, Dhule</b>

        </div>
      </div>
    </footer>
  </div>



  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <script src="../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <script async defer src="../../../buttons.github.io/buttons.js"></script>
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>


  <!--Date Time Script -->
  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
  </script>


  <!--Current Date Time Script -->
  <script type="text/javascript">
    setInterval(displayclock, 500);

    function displayclock() {
      var time = new Date();
      var hrs = time.getHours();
      var min = time.getMinutes();
      var sec = time.getSeconds();
      var en = 'AM';

      if (hrs >= 12) {
        hrs = hrs - 12;
        en = 'PM';
      }
      if (hrs == 0) {
        hrs = 12;
      }

      if (sec < 10) {
        sec = '0' + sec;
      }
      if (min < 10) {
        min = '0' + min;
      }
      if (hrs < 10) {
        hrs = '0' + hrs;
      }

      document.getElementById('Clock').innerHTML = hrs + ' : ' + min + ' : ' + sec + ' ' + en;

      var year = time.getFullYear();
      var month = time.getMonth();
      var date = time.getDate();

      if (date < 10) {
        date = '0' + date;
      }
      if (month < 10) {
        month = '0' + month;
      }

      document.getElementById('Date').innerHTML = date + ' / ' + month + ' / ' + year;


    }
  </script>

</body>

</html>