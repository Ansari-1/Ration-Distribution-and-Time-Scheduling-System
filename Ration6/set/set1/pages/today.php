<?php
require '../assets/config1.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <title>
        Home RDS
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
                    <li class="nav-item">
                        <a class="nav-link" href="dash.php">
                            <i class="material-icons">store</i>
                            <p> Home </p>
                        </a>
                    </li>
                    <li class="nav-item active">
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
                    <li class="nav-item ">
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

                            <h5><?php echo $rows00['Item_name']; ?> : <b><?php echo $rows00['Available']; ?></b></p>
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
                        <a class="navbar-brand" href="javascript:;">RDS Today's Schedule</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="content">
                <div class="container-fluid">

                    <!-- Table -->

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
                                    <div class="material-datatables">
                                        <form method='post'>
                                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Ration ID</th>
                                                        <th>Contact</th>
                                                        <th>Batch</th>
                                                        <th>Rice</th>
                                                        <th>Wheat</th>
                                                        <th>Rice Price</th>
                                                        <th>Wheat Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $today = date("m/d/Y");
                                                    $query21 = "SELECT * FROM customer WHERE S_date='$today';";
                                                    $result21 = mysqli_query($con, $query21);
                                                    while ($rows21 = mysqli_fetch_assoc($result21)) {
                                                        $i1 = "" . $rows21['Cust_no'] . " 1";
                                                        $i2 = "" . $rows21['Cust_no'] . " 2";
                                                    ?>

                                                        <tr>

                                                            <td><b><?php echo $rows21['Cust_no']; ?></td>
                                                            <td><b><?php echo $rows21['Cust_name']; ?></td>
                                                            <td><b><?php echo $rows21['Ration_ID']; ?></td>
                                                            <td><b><?php echo $rows21['Cust_contact']; ?></td>
                                                            <td><b><?php echo $rows21['Batch']; ?></td>
                                                            <td>
                                                                <input type="text" size="3" name="<?php echo $i1; ?>" class="form-control" value="<?php echo $rows21['it1']; ?>"><b>
                                                            </td>
                                                            <td>
                                                                <input type="text" size="3" name="<?php echo $i2; ?>" class="form-control" value="<?php echo $rows21['it2']; ?>"><b>
                                                            </td>
                                                            <td><b><?php echo $rows21['price_1']; ?></td>
                                                            <td><b><?php echo $rows21['price_2']; ?></td>
                                                            <td>
                                                                <?php
                                                                if ($rows21['Status_Ration'] == "T") {
                                                                ?>
                                                                    <button disabled="true" class="btn btn-sm">
                                                                        <span class="btn-label">
                                                                            <i class="material-icons">check</i>
                                                                        </span>
                                                                        <div class="ripple-container"></div>
                                                                    </button>
                                                                <?php
                                                                } else {
                                                                ?>

                                                                    <button type='submit' class='btn btn-success btn-sm' name='SR' value="<?php echo $rows21['Cust_no']; ?>">
                                                                        <span class="btn-label">
                                                                            <i class="material-icons">check</i>
                                                                        </span>
                                                                        <div class="ripple-container"></div>
                                                                    </button>

                                                                <?php
                                                                }
                                                                ?>
                                                            </td>

                                                        </tr>

                                                    <?php
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </form>
                                    </div>


                                    <?php
                                    if (isset($_POST['SR'])) {

                                        $id1 = $_POST['SR'];
                                        $id01 = "" . $id1 . "_1";
                                        $id02 = "" . $id1 . "_2";

                                        $it1 = $_POST[$id01];
                                        $it2 = $_POST[$id02];
                                        //var_dump($_POST);
                                        //foreach ($_POST as $x) {
                                        //    echo $x;
                                        //}
                                        //echo $it1, $it2;
                                        $sql10 = " UPDATE customer SET price_1=(price_1/it1)*'$it1', price_2=(price_2/it2)*'$it2', 
                    it1='$it1', it2='$it2', Status_Ration='T' WHERE Cust_no='$id1';";
                                        mysqli_query($con, $sql10);
                                        $sql11 = " UPDATE ration_items SET Available=Available-'$it1' WHERE Item_no='1';";
                                        $sql12 = " UPDATE ration_items SET Available=Available-'$it2' WHERE Item_no='2';";
                                        mysqli_query($con, $sql11);
                                        mysqli_query($con, $sql12);
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="all_schedule.php">
                    <button name="all" type="submit" class="btn btn-sm pull-right">Show All</button>
                </a>
                <form method='post'>
                    <button name="reset1" type="submit" class="btn btn-sm pull-right">Reset</button>
                </form>
                <?php

                if (isset($_POST['reset1'])) {
                    $sql13 = " UPDATE customer SET Status_sms='F', Status_Ration='F' WHERE 1;";
                    mysqli_query($con, $sql13);
                }

                ?>

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



        <!--Search Script -->
        <script>
            $(document).ready(function() {
                $('#datatables').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search records",
                    }
                });

                var table = $('#datatable').DataTable();

                // Edit record
                table.on('click', '.edit', function() {
                    $tr = $(this).closest('tr');
                    var data = table.row($tr).data();
                    alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
                });

                // Delete a record
                table.on('click', '.remove', function(e) {
                    $tr = $(this).closest('tr');
                    table.row($tr).remove().draw();
                    e.preventDefault();
                });

                //Like record
                table.on('click', '.like', function() {
                    alert('You clicked on Like button');
                });
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