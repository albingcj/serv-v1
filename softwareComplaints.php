<?php
require 'config.php';
include 'session.php';
require 'h.php';

if ($role == 'ITKM') {
    $s1 = 3;
    $s2 = 5;
}
if ($role == 'GENERAL') {
    $s1 = 2;
    $s2 = 4;
}
?>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>SRMS</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">

    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="assets/libs/jquery-steps/steps.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	
	
<![endif]-->

    <script type="text/javascript">
        function CheckColors(val) {
            if (val.value == 'Patent') {
                document.getElementById('pstatus').classList.remove('d-none');
                document.getElementById('cstatus').classList.add('d-none');
            } else if (val.value == 'Copyright') {
                document.getElementById('pstatus').classList.add('d-none');
                document.getElementById('cstatus').classList.remove('d-none');
            } else {
                document.getElementById('pstatus').classList.add('d-none');
                document.getElementById('cstatus').classList.add('d-none');
            }
        }
    </script>

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
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
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="main">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/srms.png" alt="homepage" class="light-logo" />

                        </span>

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>

                            </div>
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
        <?php include("Aside.php"); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Software based Complaints</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Software Based Complaints</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">

                    <!-- Module for dhandabani -->
                    <?php
                    // Include the database connection
                    // include 'config.php';

                    // Query to get total complaints with status 3 or 5
                    $totalComplaintsQuery = "SELECT COUNT(*) as total FROM complaints WHERE status IN ($s1, $s2)";
                    $totalComplaintsResult = mysqli_query($db, $totalComplaintsQuery);
                    $totalComplaintsCount = mysqli_fetch_assoc($totalComplaintsResult)['total'];

                    // Query to get pending complaints with status 3
                    $pendingComplaintsQuery = "SELECT COUNT(*) as pending FROM complaints WHERE status = $s1";
                    $pendingComplaintsResult = mysqli_query($db, $pendingComplaintsQuery);
                    $pendingComplaintsCount = mysqli_fetch_assoc($pendingComplaintsResult)['pending'];

                    // Query to get completed complaints with status 5
                    $completedComplaintsQuery = "SELECT COUNT(*) as completed FROM complaints WHERE status = $s2";
                    $completedComplaintsResult = mysqli_query($db, $completedComplaintsQuery);
                    $completedComplaintsCount = mysqli_fetch_assoc($completedComplaintsResult)['completed'];

                    ?>


                    <div class="col-sm-12 mb-3">
                        <div class="card text-light">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-4 col-xlg-6" id="myTable1x">
                                        <div class="card card-hover">
                                            <div class="box bg-cyan text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-wallet-travel"></i></h1>
                                                <h4 class="text-white"><b>Total Complaints</b></h4>
                                                <h4 class="text-white"><b><?php echo $totalComplaintsCount; ?> </b></h4>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-4 col-xlg-3" id="myTable3x">
                                        <div class="card card-hover">
                                            <div class="box bg-success text-center">
                                                <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                                                <h4 class="text-white"><b>Completed </b></h4>
                                                <h4 class="text-white"><b><?php echo $completedComplaintsCount; ?> </b></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <!-- <div class="col-md-6 col-lg-4 col-xlg-3"> -->
                                    <div class="col">
                                        <div class="card card-hover" id="myTable2x">
                                            <div class="box bg-warning text-center">
                                                <h1 class="font-light text-white"><i class=" mdi mdi-worker"></i></h1>
                                                <h4 class="text-white"><b>Pending</b></h4>
                                                <h4 class="text-white"><b><?php echo $pendingComplaintsCount; ?></b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid">
                        <?php
                        $query = "SELECT * FROM complaints WHERE status=$s1 OR status=$s2 ORDER BY id DESC";
                        $query_run = mysqli_query($db, $query);

                        // if (mysqli_num_rows($query_run) >= 0) {
                        //     $hod = mysqli_fetch_array($query_run);
                        // } 
                        ?>





                        <div class="card ">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable1" class="table table-hover table-bordered text-center" style="display: table;">
                                        <thead class="thead-dark">
                                            <th>S.no</th>
                                            <th>Complaint Id</th>
                                            <th>Room No</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM complaints where status=$s1 or status=$s2 ORDER BY id DESC";
                                            $query_run = mysqli_query($db, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                $cnt = 1;
                                                foreach ($query_run as $complaints) {
                                            ?>
                                                    <tr>
                                                        <td align="center"><?= $cnt ?></td>
                                                        <td><?= $complaints['cid'] ?></td>
                                                        <td><?= $complaints['place'] ?></td>
                                                        <td>
                                                            <button type="button" value="<?= $complaints['id']; ?>" class="complaintDetailsBtn btn btn-outline-dark border-0 m-auto shadow-sm" data-toggle="modal" data-target="#complaintDetailsModal" data-raised-date="<?= $complaints['date'] ?>" data-approval-date="<?= $complaints['man_ap_date'] ?>" data-block="<?= $complaints['block'] ?>" data-place="<?= $complaints['place'] ?>" data-description="<?= $complaints['description'] ?>" data-cid="<?= $complaints['cid'] ?>">
                                                                <span class="ti-eye"></span></button>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($complaints['status'] == $s1) {
                                                            ?>
                                                                <button type="button" value="<?= $complaints['id']; ?>" class="finishWorkBtn btn btn-danger shadow-sm" onclick="confirmFinishWork(this.value)">Finish Work</button>
                                                            <?php
                                                            } else if ($complaints['status'] == $s2) {
                                                                echo "<span class='btn btn-success shadow-sm'>Completed on : " . $complaints['fin_date'] . "</span>";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $cnt++;
                                                }
                                            }
                                            ?>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="myTable2" class="table table-hover table-bordered text-center" style="display: none;">
                                        <thead class="thead-dark">
                                            <th>S.no</th>
                                            <th>Complaint Id</th>
                                            <th>Room No</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM complaints WHERE status=$s1 ORDER BY id DESC";
                                            $query_run = mysqli_query($db, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                $cnt = 1;
                                                foreach ($query_run as $complaints) {
                                            ?>
                                                    <tr>
                                                        <td><?= $cnt ?></td>
                                                        <td><?= $complaints['cid'] ?></td>
                                                        <td><?= $complaints['place'] ?></td>
                                                        <td>
                                                            <button type="button" value="<?= $complaints['id']; ?>" class="complaintDetailsBtn btn btn-outline-dark border-0 m-auto shadow-sm" data-toggle="modal" data-target="#complaintDetailsModal" data-raised-date="<?= $complaints['date'] ?>" data-approval-date="<?= $complaints['man_ap_date'] ?>" data-block="<?= $complaints['block'] ?>" data-place="<?= $complaints['place'] ?>" data-description="<?= $complaints['description'] ?>" data-cid="<?= $complaints['cid'] ?>">
                                                                <span class="ti-eye"></span></button>
                                                        </td>
                                                        <td>
                                                            <button type="button" value="<?= $complaints['id']; ?>" class="finishWorkBtn btn btn-danger shadow-sm" onclick="confirmFinishWork(this.value)">Finish Work</button>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $cnt++;
                                                }
                                            }
                                            ?>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table id="myTable3" class="table table-hover table-bordered text-center" style="display: none;">
                                        <thead class="thead-dark">
                                            <th>S.no</th>
                                            <th>Complaint Id</th>
                                            <th>Room No</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM complaints WHERE status= $s2 ORDER BY id DESC";
                                            $query_run = mysqli_query($db, $query);
                                            if (mysqli_num_rows($query_run) > 0) {
                                                $cnt = 1;
                                                foreach ($query_run as $complaints) {
                                            ?>
                                                    <tr>
                                                        <td align="center"><?= $cnt ?></td>
                                                        <td><?= $complaints['cid'] ?></td>
                                                        <td><?= $complaints['place'] ?></td>
                                                        <td>
                                                            <button type="button" value="<?= $complaints['id']; ?>" class="complaintDetailsBtn btn btn-outline-dark border-0 m-auto shadow-sm" data-toggle="modal" data-target="#complaintDetailsModal" data-raised-date="<?= $complaints['date'] ?>" data-approval-date="<?= $complaints['man_ap_date'] ?>" data-place="<?= $complaints['place'] ?>" data-description="<?= $complaints['description'] ?>" data-cid="<?= $complaints['cid'] ?>">
                                                                <span class="ti-eye"></span></button>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo "<span class='btn btn-success shadow-sm'>Completed on : " . $complaints['fin_date'] . "</span>";
                                                            ?>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $cnt++;
                                                }
                                            }
                                            ?>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs content -->
                        <!-- viewComplaintModal					 -->
                        <div class="modal fade" id="complaintDetailsModal" tabindex="-1" role="dialog" aria-labelledby="complaintDetailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="complaintDetailsModalLabel">Complaint Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mx-3 bg-dark text-light text-center">
                                            <div class="row p-3">

                                                <div class="col-12">
                                                    <b>
                                                        <h3>
                                                            <p>Complaint ID : <span id="cid"></span></p>
                                                        </h3>
                                                    </b>
                                                </div>
                                            </div>
                                            <div class="row p-3">

                                                <div class="col">
                                                    <h4>
                                                        <div class="border p-2"> Block : <span id="block"></span></div>
                                                    </h4>
                                                </div>
                                                <div class="col">
                                                    <h4>
                                                        <div class="border p-2">Room No / Place : <span id="place"></span></div>
                                                    </h4>
                                                </div>

                                            </div>
                                            <div class="row p-3">

                                                <div class="col border mx-3">
                                                    <h6 class="p-1">Raised Date: <span id="raisedDate"></span></h6>
                                                </div>
                                                <div class="col border mx-3">
                                                    <h6 class="p-1"> Received Date: <span id="approvalDate"></span></h6>
                                                </div>

                                            </div>
                                            <div class="row p-3">
                                                <div class="col mx-1">
                                                    <fieldset class="border border-light">
                                                        <legend class="col-auto mx-3">
                                                            <h5 class="m-auto">Description</h5>
                                                        </legend>
                                                        <h5><span class="p-1" id="description">

                                                            </span></h5>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>




                                        <!-- <p><strong>Raised Date:</strong> <span id="raisedDate"></span></p>
                                        <p><strong>Received Date:</strong> <span id="approvalDate"></span></p> -->
                                        <!-- <p><strong>Block:</strong> <span id="block"></span></p>
                                        <p><strong>Room / Place :</strong> <span id="place"></span></p>
                                        <p><strong>Description:</strong> <span id="description"></span></p> -->

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- viewComplaintModal End		 -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->


    <?php include "./footer.html" ?>


    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable1x').click(function() {
                toggleTable('myTable1');
            });

            $('#myTable2x').click(function() {
                toggleTable('myTable2');
            });

            $('#myTable3x').click(function() {
                toggleTable('myTable3');
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.complaintDetailsBtn').click(function() {
                var raisedDate = $(this).data('raised-date');
                var approvalDate = $(this).data('approval-date');
                var cid = $(this).data('cid');
                console.log(cid);
                console.log(approvalDate);
                var block = $(this).data('block');
                var place = $(this).data('place');
                var description = $(this).data('description');

                $('#raisedDate').text(raisedDate);
                $('#approvalDate').text(approvalDate);
                $('#cid').text(cid);
                $('#block').text(block);
                $('#place').text(place);
                $('#description').text(description);
            });
        });


        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        $('#myTable1').DataTable({
            paging: true
        });

        function toggleTable(tableName) {
            var table1 = document.getElementById('myTable1');
            var table2 = document.getElementById('myTable2');
            var table3 = document.getElementById('myTable3');

            if (tableName === 'myTable1') {
                $('#myTable1').DataTable().destroy();
                $('#myTable1').DataTable({
                    paging: true
                });
                table1.style.display = 'table';
                table2.style.display = 'none';
                table3.style.display = 'none';
                $('#myTable2').DataTable().destroy(); // Destroy DataTable for hidden tables
                $('#myTable3').DataTable().destroy(); // Destroy DataTable for hidden tables

            } else if (tableName === 'myTable2') {
                $('#myTable2').DataTable().destroy(); // Destroy DataTable for hidden tables
                $('#myTable2').DataTable({
                    paging: true
                });
                table1.style.display = 'none';
                table2.style.display = 'table';
                table3.style.display = 'none';
                $('#myTable1').DataTable().destroy(); // Destroy DataTable for hidden tables
                $('#myTable3').DataTable().destroy(); // Destroy DataTable for hidden tables

            } else if (tableName === 'myTable3') {
                $('#myTable3').DataTable().destroy(); // Destroy DataTable for hidden tables
                $('#myTable3').DataTable({
                    paging: true
                });
                table1.style.display = 'none';
                table2.style.display = 'none';
                table3.style.display = 'table';
                $('#myTable1').DataTable().destroy(); // Destroy DataTable for hidden tables
                $('#myTable2').DataTable().destroy(); // Destroy DataTable for hidden tables
            }

        }

        function confirmFinishWork(complaintId) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Mark as Done!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                customClass: {
                    confirmButton: 'btn btn-success mr-2',
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes"
                    // Send an AJAX request to update the status
                    $.ajax({
                        url: 'update_status.php',
                        type: 'POST',
                        data: {
                            complaintId: complaintId,
                            newStatus: 2
                        }, // Send complaint ID and new status
                        success: function(response) {
                            // Handle the response if needed
                            swalWithBootstrapButtons.fire(
                                'Finished!',
                                'Your Work has been marked as completed.',
                                'success'
                            ).then(function(result) {
                                location.reload();
                            });
                        },
                        error: function() {
                            // Handle errors if any
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // User clicked "Cancel"
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your work is still pending :(',
                        'error'
                    )
                }
            })
        }
    </script>

    <script>
        // Basic Example with form
        var form = $("#example-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });

        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    </script>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>



    <script>
        //AddComplaint

        //AddComplaint Ends
    </script>


</body>

</html>