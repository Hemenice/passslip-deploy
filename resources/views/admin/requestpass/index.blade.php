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
                            <form action="/createrequestpass" method="POST">
                                @csrf


                                <!-- Time of Departure -->
                                <div class="row mb-3">
                                    <label for="timeDeparture" class="col-sm-2 col-form-label">Time of
                                        Departure</label>
                                    <div class="col-sm-10">
                                        <input name="time_departure" type="time" class="form-control"
                                            id="timeDeparture" required>
                                    </div>
                                </div>

                                <!-- Time of Arrival -->
                                <div class="row mb-3">
                                    <label for="timeArrival" class="col-sm-2 col-form-label">Time of Arrival</label>
                                    <div class="col-sm-10">
                                        <input name="time_arrival" type="time" class="form-control" id="timeArrival"
                                            required>
                                    </div>
                                </div>

                                <!-- Date of Departure -->
                                <div class="row mb-3">
                                    <label for="dateDeparture" class="col-sm-2 col-form-label">Date of
                                        Departure</label>
                                    <div class="col-sm-10">
                                        <input name="date_departure" type="date" class="form-control"
                                            id="dateDeparture" required>
                                    </div>
                                </div>

                                <!-- Date of Arrival -->
                                <div class="row mb-3">
                                    <label for="dateArrival" class="col-sm-2 col-form-label">Date of Arrival</label>
                                    <div class="col-sm-10">
                                        <input name="date_arrival" type="date" class="form-control" id="dateArrival"
                                            required>
                                    </div>
                                </div>

                                <!-- Purpose -->
                                <div class="row mb-3">
                                    <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
                                    <div class="col-sm-10">
                                        <select name="purpose" id="purpose" class="form-control" required>
                                            <option value="" selected disabled>Select Purpose</option>
                                            @foreach ($purpose as $purpose)
                                                <option value="{{ $purpose->purpose_name }}">
                                                    {{ $purpose->purpose_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Reason -->
                                <div class="row mb-3">
                                    <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                                    <div class="col-sm-10">
                                        <textarea name="reason" class="form-control" id="reason" rows="3" required></textarea>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="row mb-3">
                                    <label for="department" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <select name="department" id="department" class="form-control" required>
                                            <option value="" selected disabled>Select Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->dept_name }}">
                                                    {{ $department->dept_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- <!-- Head of Office -->
                                <div class="row mb-3">
                                    <label for="head_office" class="col-sm-2 col-form-label">Head of Office</label>
                                    <div class="col-sm-10">
                                        <select name="head_office" id="head_office" class="form-control" required>
                                            <option value="" selected disabled>Select Head</option>
                                            @foreach ($heads as $head)
                                                <option value="{{ $head->head_name }}">
                                                    {{ $head->head_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                <!-- Head of Office -->
                                <div class="row mb-3">
                                    <label for="head_office" class="col-sm-2 col-form-label">Head of Office</label>
                                    <div class="col-sm-10">
                                        <select name="head_office" id="head_office" class="form-control" required>
                                            <option value="" selected disabled>Select Head</option>
                                            @foreach ($heads as $head)
                                                <option value="{{ $head->name }}">
                                                    {{ $head->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <!-- Submit Button -->
                                <div class="row mb-3">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <x-guest.footer />

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
