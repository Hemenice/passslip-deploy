<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <x-admin.header />
    <!-- End Header -->
    <!-- Sidebar Here -->

    <x-admin.sidebar />

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        {{-- section inside the content of body left side column --}}
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Approved Pass Slip Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Approved Pass Slip</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalApproved }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Approved Pass Slip</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Approved Pass Slip Card -->

                        <!-- Rejected Pass Slip Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card reject-card">

                                <div class="card-body">
                                    <h5 class="card-title">Rejected Pass Slip</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $rejectedPassSlip }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Rejected Pass Slip</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Rejected Pass Slip Card -->

                        <!-- Pending Pass Slip Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card pending-card">

                                <div class="card-body">
                                    <h5 class="card-title">Pending Pass Slip</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalPending }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Pending Pass Slip</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Pending Pass Slip Card -->


                        <!-- Approved Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card canceled-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Approved but Canceled </span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>0</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Approved but Canceled</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Approved Card -->

                        <!-- Total Pass Slip Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card pass-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Pass Slip </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $slips->count() }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Pass Slip</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Department Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card department-card">
                                <div class="card-body">
                                    <h5 class="card-title">Department</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $departments->count() }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Departments</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Department Card -->

                        <!-- Designation Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Designation</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-bounding-box"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $designations->count() }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Designation</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Designation Card -->

                        <!-- Purpose Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card purpose-card">
                                <div class="card-body">
                                    <h5 class="card-title">Purpose Type</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-journal-text"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $purposes->count() }}</h6>
                                            <span class="text-muted small pt-2 ps-1">Total Designation</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Purpose Card -->

                        <!-- Users Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card user-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Users </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalUsers }}</h6 <span class="text-danger small pt-1 fw-bold">
                                            <span class="text-muted small pt-2 ps-1">Total Users</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Admin Card -->

                        <!-- Admin Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card user-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Admin </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalAdmin }}</h6 <span class="text-danger small pt-1 fw-bold">
                                            <span class="text-muted small pt-2 ps-1">Total Admin</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End Admin Card -->

                        <!-- Heads Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card user-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Heads </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $heads->count() }}</h6 <span class="text-danger small pt-1 fw-bold">
                                            <span class="text-muted small pt-2 ps-1">Total Heads</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- End HEads Card -->

                        <!-- Faculty Card -->
                        <div class="col-xxl-4 col-xl-4">

                            <div class="card info-card user-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Faculty </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $faculty->count() }}</h6 class="text-danger small pt-1 fw-bold">
                                            <span class="text-muted small pt-2 ps-1">Total Faculty</span>

                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card user-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title"> Totao Barcode Created </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-upc-scan"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalBarcode->count() }}</h6
                                                class="text-danger small pt-1 fw-bold">
                                            <span class="text-muted small pt-2 ps-1">Total Barcode Created</span>

                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                        <!-- End Faculty Card -->






                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>E-Pass Slip Recording System</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

            {{-- <a href="">Romer Jasen Jimenez</a> --}}
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
