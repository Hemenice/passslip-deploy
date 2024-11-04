{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EPRS</title>
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

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-heading">Home</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed " href="/viewpass">
                    <i class="bi bi-card-heading"></i>
                    <span>Pass Slip</span>
                </a>
            </li>
            <!-- End Pass Slip Nav -->

            <li class="nav-item">
                <a class="nav-link  " href="/requestpass">
                    <i class="bi bi-calendar4-range"></i>
                    <span>Request Pass Slip</span>
                </a>
            </li>
            <!-- End Request Pass Slip Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#department" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-buildings"></i><span>Department</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="department" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="/viewdepartment">
                            <i class="bi bi-circle-fill"></i><span>List of Department</span>
                        </a>
                    </li>
                    <li>
                        <a href="/department">
                            <i class="bi bi-circle-fill"></i><span>Create Department</span>
                        </a>
                    </li>


                </ul>
            </li><!-- End Department Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#designation" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-bounding-box"></i><span>Designation</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="designation" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="/viewdesignation">
                            <i class="bi bi-circle-fill"></i><span>Designation List</span>
                        </a>
                    </li>
                    <li>
                        <a href="/viewcreatedesignation">
                            <i class="bi bi-circle-fill"></i><span>Create Designation</span>
                        </a>
                    </li>

                </ul>
            </li>
            <!-- End Designation Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#purpose" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Purpose Type</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="purpose" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/viewpurpose">
                            <i class="bi bi-circle-fill"></i><span>Purpose List</span>
                        </a>
                    </li>
                    <li>
                        <a href="/viewcreatepurpose">
                            <i class="bi bi-circle-fill"></i><span>Create Purpose</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Purpose Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#head" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-square"></i><span>Head of Office</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="head" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/viewhead">
                            <i class="bi bi-circle"></i><span>List of Head of Office</span>
                        </a>
                    </li>
                    <li>
                        <a href="/viewcreatehead">
                            <i class="bi bi-circle"></i><span>Add Head of Office</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Head Of Office Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#faculty" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-lines-fill"></i><span>Faculty</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="faculty" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i><span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Faculty Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#passslip" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-card-checklist"></i><span>Pass Slip Management</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="passslip" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Chart.js</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Leave Management Nav -->



            <li class="nav-heading">Settings</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-gear"></i>
                    <span>Account Settings</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>About Us</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->



        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Request Pass Slip</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Request Pass Slip</a></li>
                    <li class="breadcrumb-item active">request</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Request</h5>

                            <!-- General Form Elements -->
                            <form action="" method="POST">
                                @csrf
                                <!-- Time of Departure -->
                                <div class="row mb-3">
                                    <label for="timeDeparture" class="col-sm-2 col-form-label">Time of
                                        Departure</label>
                                    <div class="col-sm-10">
                                        <input name="time_departure" type="time" class="form-control"
                                            id="timeDeparture" value="{{ $slip->time_departure }}" required>
                                    </div>
                                </div>

                                <!-- Time of Arrival -->
                                <div class="row mb-3">
                                    <label for="timeArrival" class="col-sm-2 col-form-label">Time of Arrival</label>
                                    <div class="col-sm-10">
                                        <input name="time_arrival" type="time" class="form-control"
                                            id="timeArrival" value="{{ $slip->time_arrival }}" required>
                                    </div>
                                </div>

                                <!-- Date of Departure -->
                                <div class="row mb-3">
                                    <label for="dateDeparture" class="col-sm-2 col-form-label">Date of
                                        Departure</label>
                                    <div class="col-sm-10">
                                        <input name="date_departure" type="date" class="form-control"
                                            id="dateDeparture" value="{{ $slip->date_departure }}" required>
                                    </div>
                                </div>

                                <!-- Date of Arrival -->
                                <div class="row mb-3">
                                    <label for="dateArrival" class="col-sm-2 col-form-label">Date of Arrival</label>
                                    <div class="col-sm-10">
                                        <input name="date_arrival" type="date" class="form-control"
                                            id="dateArrival" value="{{ $slip->date_arrival }}" required>
                                    </div>
                                </div>

                                <!-- Purpose -->
                                <div class="row mb-3">
                                    <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
                                    <div class="col-sm-10">
                                        <select name="purpose" id="purpose" class="form-control" required>
                                            <option value="" disabled>Select Purpose</option>
                                            @foreach ($purpose as $pur)
                                                <option value="{{ $pur->purpose_name }}"
                                                    {{ $slip->purpose == $pur->purpose_name ? 'selected' : '' }}>
                                                    {{ $pur->purpose_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <!-- status -->
                                <div class="row mb-3">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="" disabled>Select Status</option>
                                            @foreach ($slip as $slip)
                                                <option value="{{ $slip->status }}"
                                                    {{ $slip->status == $requestPass->status ? 'selected' : '' }}>
                                                    {{ $slip->status }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <!-- Reason -->
                                <div class="row mb-3">
                                    <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                                    <div class="col-sm-10">
                                        <textarea name="reason" class="form-control" id="reason" rows="3" required>{{ $slip->reason }}</textarea>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="row mb-3">
                                    <label for="department" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <select name="department" id="department" class="form-control" required>
                                            <option value="" disabled>Select Department</option>
                                            @foreach ($departments as $dept)
                                                <option value="{{ $dept->dept_name }}"
                                                    {{ $slip->department == $dept->dept_name ? 'selected' : '' }}>
                                                    {{ $dept->dept_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Head of Office -->
                                <div class="row mb-3">
                                    <label for="head_office" class="col-sm-2 col-form-label">Head of Office</label>
                                    <div class="col-sm-10">
                                        <select name="head_office" id="head_office" class="form-control" required>
                                            <option value="" disabled>Select Head</option>
                                            @foreach ($heads as $head)
                                                <option value="{{ $head->head_name }}"
                                                    {{ $slip->head_office == $head->head_name ? 'selected' : '' }}>
                                                    {{ $head->head_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="row mb-3">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>




                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>E-Pass Slip Recording System</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <a href="">Romer Jasen Jimenez</a>
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

</html> --}}
