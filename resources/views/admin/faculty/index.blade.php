<!DOCTYPE html>
<html lang="en">

<x-admin.head />

<body>

    <!-- ======= Header ======= -->
    <x-admin.header />
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <x-admin.sidebar />
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Faculty</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Faculty</a></li>
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
                                    <h5 class="card-title">Faculty</h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Verification Code</th>
                                                <th scope="col"> Email</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($faculty as $faculty)
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $faculty['id'] }}</a></th>
                                                    <td>{{ $faculty['name'] ?? 'Default Name' }}</td>
                                                    <td>{{ $faculty['verification_code'] ?? 'Uknown' }}</td>
                                                    <td>{{ $faculty['email'] ?? 'default@example.com' }}</td>
                                                    <td>
                                                        @if ($faculty['is_verified'] == 1)
                                                            <span class="badge bg-success">Verified</span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">Not verified</span>
                                                        @endif
                                                        @if ($faculty['banned'] == 1)
                                                            <span class="badge bg-danger">Banned</span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">Not Banned</span>
                                                        @endif
                                                    </td>
                                                    </td>

                                                    {{-- <td>{{ $faculty['phone_number'] ?? '123-456-7890' }}</td> --}}

                                                    <!-- View Option -->

                                                    <!-- Edit Option -->


                                                    <!-- Delete Option -->
                                                    {{-- <form action="{{ route('head.destroy', $head->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this pass slip?');">
                                                                Delete
                                                            </button>
                                                        </form> --}}
                                                    <td>
                                                        <!-- View Option -->

                                                        <!-- Edit Option -->
                                                        <a href="/viewpassslipedit"
                                                            class="btn btn-warning btn-sm">Edit</a>

                                                        <!-- Delete Option -->
                                                        <form action="{{ route('faculty.destroy', $faculty->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this user?');">
                                                                Delete
                                                            </button>
                                                        </form>

                                                        <!-- Ban Option -->
                                                        @if (!$faculty->banned)
                                                            <form action="{{ route('faculty.ban', $faculty->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                <button type="submit" class="btn btn-dark btn-sm"
                                                                    onclick="return confirm('Are you sure you want to ban this user?');">
                                                                    Ban
                                                                </button>
                                                            </form>
                                                        @else
                                                            <form action="{{ route('faculty.unban', $faculty->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success btn-sm"
                                                                    onclick="return confirm('Are you sure you want to reactivate this user?');">
                                                                    Reactivate
                                                                </button>
                                                            </form>
                                                        @endif

                                                        <!-- Verify Option -->
                                                        @if (!$faculty->is_verified)
                                                            <form action="{{ route('admin.verifyUser', $faculty->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                <button type="submit" class="btn btn-primary btn-sm"
                                                                    onclick="return confirm('Are you sure you want to verify this user?');">
                                                                    Verify
                                                                </button>
                                                            </form>
                                                        @else
                                                            {{-- <span class="text-success">Verified</span> --}}
                                                        @endif
                                                    </td>


                                                    </td>
                                                </tr>
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

</html>
