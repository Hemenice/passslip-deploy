<!DOCTYPE html>
<html lang="en">

<x-admin.head />

<body>

    <!-- ======= Header ======= -->
    <x-admin.header />

    <x-admin.sidebar />
    <!-- End Sidebar-->

    <!-- End Sidebar-->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Request Pass Slip</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Request Pass Slip</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        {{-- section inside the content of body left side column --}}
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- General Form Elements -->
                        <form action="{{ route('admin.updateRequest', $requestPass->id) }}" method="POST">
                            @csrf

                            <!-- Time of Departure -->
                            <div class="row mb-3">
                                <label for="timeDeparture" class="col-sm-2 col-form-label">Time of
                                    Departure</label>
                                <div class="col-sm-10">
                                    <input name="time_departure" type="time" class="form-control" id="timeDeparture"
                                        value="{{ old('time_departure', $requestPass->time_departure) }}">
                                </div>
                            </div>

                            <!-- Time of Arrival -->
                            <div class="row mb-3">
                                <label for="timeArrival" class="col-sm-2 col-form-label">Time of Arrival</label>
                                <div class="col-sm-10">
                                    <input name="time_arrival" type="time" class="form-control" id="timeArrival"
                                        value="{{ old('time_arrival', $requestPass->time_arrival) }}">
                                </div>
                            </div>

                            <!-- Date of Departure -->
                            <div class="row mb-3">
                                <label for="dateDeparture" class="col-sm-2 col-form-label">Date of
                                    Departure</label>
                                <div class="col-sm-10">
                                    <input name="date_departure" type="date" class="form-control" id="dateDeparture"
                                        value="{{ old('date_departure', $requestPass->date_departure) }}">
                                </div>
                            </div>

                            <!-- Date of Arrival -->
                            <div class="row mb-3">
                                <label for="dateArrival" class="col-sm-2 col-form-label">Date of Arrival</label>
                                <div class="col-sm-10">
                                    <input name="date_arrival" type="date" class="form-control" id="dateArrival"
                                        value="{{ old('date_arrival', $requestPass->date_arrival) }}">
                                </div>
                            </div>

                            <!-- Purpose -->
                            <div class="row mb-3">
                                <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
                                <div class="col-sm-10">
                                    <select name="purpose" id="purpose" class="form-control">
                                        <option value="" disabled>Select Purpose</option>
                                        @foreach ($purpose as $purp)
                                            <option value="{{ $purp->purpose_name }}"
                                                {{ $purp->purpose_name == $requestPass->purpose ? 'selected' : '' }}>
                                                {{ $purp->purpose_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- status -->
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" id="status" class="form-control">
                                        <option value="" disabled>Select Status</option>
                                        <option value="pending"
                                            {{ $requestPass->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="approved"
                                            {{ $requestPass->status == 'approved' ? 'selected' : '' }}>Approved
                                        </option>
                                        <option value="disapproved"
                                            {{ $requestPass->status == 'disapproved' ? 'selected' : '' }}>Disapproved
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <!-- Reason -->
                            <div class="row mb-3">
                                <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                                <div class="col-sm-10">
                                    <textarea name="reason" class="form-control" id="reason" rows="3">{{ old('reason', $requestPass->reason) }}</textarea>
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="row mb-3">
                                <label for="department" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <select name="department" id="department" class="form-control">
                                        <option value="" disabled>Select Department</option>
                                        @foreach ($departments as $dept)
                                            <option value="{{ $dept->dept_name }}"
                                                {{ $dept->dept_name == $requestPass->department ? 'selected' : '' }}>
                                                {{ $dept->dept_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Head of Office -->
                            <div class="row mb-3">
                                <label for="head_office" class="col-sm-2 col-form-label">Approving Authority</label>
                                <div class="col-sm-10">
                                    <select name="head_office" id="head_office" class="form-control">
                                        <option value="" disabled>Select Head</option>
                                        @foreach ($heads as $head)
                                            <option value="{{ $head->name }}"
                                                {{ $head->name == $requestPass->head_office ? 'selected' : '' }}>
                                                {{ $head->name }}
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
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->


    <x-guest.footer />
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>
