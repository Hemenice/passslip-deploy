{{-- <h1>Scan Barcode</h1>
<form id="barcodeForm">
    <input type="text" id="barcodeInput" placeholder="Scan barcode here" autofocus>
</form>

<h2>Scanned Barcodes:</h2>
<ul id="scannedBarcodesList">
    @foreach ($scannedBarcodes as $barcode)
        <li>{{ $barcode->code }}</li>
    @endforeach
</ul>

 --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Scan Barcode</title>
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

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">



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
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block" id="liveTime"></span> <!-- Element to display live time -->
            </a>
        </div><!-- End Logo -->
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="/barcode/scan">
                <!-- Update action URL -->
                @csrf <!-- Include CSRF token for security -->
                <input type="text" id="barcodeInput" name="code"
                    placeholder="Click here and scan actual time of departure   " title="Enter search keyword"
                    autofocus>
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="/barcode/scan">
                <!-- Update action URL -->
                @csrf <!-- Include CSRF token for security -->
                <input type="text" id="barcodeInputarrival" name="code"
                    placeholder="Click here and scan actual time of Arrival   " title="Enter search keyword" autofocus>
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                {{--
                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                    all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View
                                    all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav --> --}}

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->



    <main>
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div>
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">TIPS:</li>
                    <li class="breadcrumb-item active">"Please click the button above and use the barcode scanner to
                        scan your barcode."</li>
                </ol>
            </nav>
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>



        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">





                        <!-- Recent Sales -->
                        <<div class="col-12">
                            <div class="card recent-sales overflow-auto">

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
                                    <h5 class="card-title">Recent Barcode Scanned <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>

                                                {{-- <th scope="col">Barcode</th> --}}
                                                <!-- Column for barcode image -->
                                                {{-- <th scope="col">Control Number: </th> --}}
                                                <!-- Column for barcode image -->
                                                <th scope="col">Name</th> <!-- Column for barcode image -->
                                                <th scope="col">Designation</th> <!-- Column for barcode image -->

                                                {{-- <th scope="col">Status</th>  --}}
                                                <th scope="col">Intended time Departure & Arrival</th>
                                                <!-- Column for barcode image -->
                                                <th scope="col">Actual time of Departure</th>
                                                <th scope="col">Actual time of Arrival</th>

                                                <!-- Column for barcode image -->
                                                <th scope="col">Purpose</th> <!-- Column for approved_by -->


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($scannedBarcodes as $barcode)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    {{-- <th scope="row">
                                                        <img src="{{ asset('storage/barcodes/' . $barcode->slip->barcode) }}"
                                                            alt="Barcode for {{ $barcode->slip->control_number }}"
                                                            style="width:100px;" />
                                                    </th> --}}
                                                    {{-- <td>{{ $barcode->slip->control_number ?? 'N/A' }}</td> --}}
                                                    <td>{{ $barcode->slip->user->name ?? 'N/A' }}</td>
                                                    <td>{{ $barcode->slip->user->designation ?? 'N/A' }}</td>


                                                    {{-- <td>
                                                        @if ($barcode->slip->status === 'approved')
                                                            <span class="badge bg-success">Approved</span>
                                                        @endif
                                                    </td> --}}
                                                    <td>
                                                        {{ ($barcode->slip->time_departure
                                                            ? \Carbon\Carbon::parse($barcode->slip->time_departure)->format('h:i A')
                                                            : 'N/A') .
                                                            ' | ' .
                                                            ($barcode->slip->time_arrival ? \Carbon\Carbon::parse($barcode->slip->time_arrival)->format('h:i A') : 'N/A') }}
                                                    </td>
                                                    <td>{{ $barcode->actual_time_departure ? \Carbon\Carbon::parse($barcode->actual_time_departure)->format('h:i A') : 'N/A' }}
                                                    </td>
                                                    <td>{{ $barcode->actual_time_arrival ? \Carbon\Carbon::parse($barcode->actual_time_arrival)->format('h:i A') : 'N/A' }}
                                                    </td>




                                                    <!-- User who created the slip -->
                                                    {{-- <td>
                                                        <span class="badge bg-success">
                                                            {{ $barcode->slip->approver->name ?? 'N/A' }}</span>

                                                    </td> --}}

                                                    <td>
                                                        <span
                                                            class="badge {{ $barcode->slip->purpose === 'Personal' ? 'bg-success' : ($barcode->slip->purpose === 'Official' ? 'bg-warning' : 'bg-secondary') }}">
                                                            {{ $barcode->slip->purpose ?? 'N/A' }}
                                                        </span>
                                                    </td>


                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                    </div><!-- End Recent Sales -->
                </div>



            </div>
            </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->

    <script>
        document.getElementById('barcodeInput').addEventListener('change', function(event) {
            const code = event.target.value;

            fetch('/barcode/scan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        code: code
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message); // Show success or error message
                    document.getElementById('barcodeInput').value = ''; // Clear input for next scan
                })
                .catch(error => console.error('Error:', error));
        });
        document.getElementById('barcodeInputarrival').addEventListener('change', function(event) {
            const code = event.target.value;

            fetch('/barcode/scanarrival', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        code: code
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message); // Show success or error message
                    document.getElementById('barcodeInput').value = ''; // Clear input for next scan
                })
                .catch(error => console.error('Error:', error));
        });

        function updateTime() {
            const now = new Date();
            const options = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            };
            document.getElementById('liveTime').innerText = now.toLocaleTimeString([], options);
        }

        // Update the time every second
        setInterval(updateTime, 1000);
        updateTime(); // Initial call to set the time immediately
    </script>



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