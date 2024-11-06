<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>User Management</title>
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
    <x-admin.sidebar />
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">User</a></li>
                    <li class="breadcrumb-item active">List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Department -->
                        {{-- <div class="col-12">
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
                                    <h5 class="card-title">Department <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Head Name</th>
                                                <th scope="col">Head Department</th>
                                                <th scope="col">Head Email</th>
                                                <th scope="col">Head Password</th>
                                                <th scope="col">Head Phone Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div> --}}
                        <!-- End Recent Sales -->

                        <!-- Recent Sales -->
                        <div class="col-12">
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
                                    <h5 class="card-title">User</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col"> Code</th>
                                                <th scope="col">Designation</th>
                                                {{-- <th scope="col">Email</th> --}}
                                                <th scope="col">Date Added</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Option</th>
                                                {{-- <th scope="col">Head Department</th> --}}
                                                {{-- <th scope="col">Head Password</th> --}}
                                                {{-- <th scope="col">Head Phone Number</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($heads as $head)
                                                @if (auth()->user()->id !== $head->id)
                                                    <!-- Skip the current logged-in user -->
                                                    <tr>
                                                        <th scope="row"><a href="#">{{ $head->id }}</a>
                                                        </th>
                                                        <td>{{ $head->name ?? 'Default Name' }}</td>
                                                        <td>{{ $head->verification_code ?? 'Default Name' }}</td>
                                                        <td>{{ $head->designation ?? 'NA' }}</td>

                                                        {{-- <td>{{ $head->email ?? 'default@example.com' }}</td> --}}
                                                        <td>{{ $head->created_at ? $head->created_at->format('F j, Y') : 'default@example.com' }}
                                                        </td>

                                                        <td>
                                                            @if ($head->is_verified == 1)
                                                                <span class="badge bg-success">Verified</span>
                                                            @else
                                                                <span
                                                                    class="badge bg-warning text-dark">Unverified</span>
                                                            @endif
                                                            @if ($head->banned == 1)
                                                                <span class="badge bg-danger">Banned</span>
                                                            @else
                                                                <span class="badge bg-info text-dark">Activated</span>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <!-- Delete Option -->
                                                            <form action="{{ route('faculty.destroy', $head->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure you want to delete this user?');">
                                                                    Delete
                                                                </button>
                                                            </form>


                                                            <!-- Ban Option -->
                                                            @if (!$head->banned)
                                                                <form action="{{ route('faculty.ban', $head->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-dark btn-sm"
                                                                        onclick="return confirm('Are you sure you want to ban this user?');">
                                                                        Ban
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <form action="{{ route('faculty.unban', $head->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-sm"
                                                                        onclick="return confirm('Are you sure you want to reactivate this user?');">
                                                                        Reactivate
                                                                    </button>
                                                                </form>
                                                            @endif

                                                            <!-- Verify Option -->
                                                            @if (!$head->is_verified)
                                                                <form
                                                                    action="{{ route('admin.verifyUser', $head->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-sm"
                                                                        onclick="return confirm('Are you sure you want to verify this user?');">
                                                                        Verify
                                                                    </button>
                                                                </form>
                                                            @endif

                                                            {{-- Edit Option --}}
                                                            <a href="{{ route('admin.edithead', $head->id) }}"
                                                                class="btn btn-warning btn-sm">Edit</a>
                                                        </td>

                                                    </tr>
                                                @endif
                                            @endforeach


                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->



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
