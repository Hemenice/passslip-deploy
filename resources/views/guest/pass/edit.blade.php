<!DOCTYPE html>
<html lang="en">

{{-- Head here --}}
<x-guest.head />

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">E-Pass Slip RS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                @php
                    // Fetch the latest 4 notifications for the logged-in user
                    $notifications = Auth::user()->notifications; // Get all notifications, not just unread ones
                @endphp

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span
                            class="badge bg-primary badge-number">{{ Auth::user()->unreadNotifications->count() }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have {{ Auth::user()->unreadNotifications->count() }} new notifications
                            <form action="{{ route('notifications.markAllAsReadguest') }}" method="POST"
                                style="display: inline;" id="mark-all-read-form">
                                @csrf
                                <button type="submit" class="badge rounded-pill bg-primary p-2 ms-2"
                                    style="border: none; cursor: pointer;">
                                    Mark all as read
                                </button>
                            </form>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!-- Notification List with Scrollable Container -->
                        <div style="max-height: 300px; overflow-y: auto;">
                            @foreach ($notifications as $notification)
                                <li class="notification-item">
                                    <i class="bi bi-exclamation-circle "></i>
                                    <div>

                                        <p>{{ $notification->data['message'] }}</p>
                                        <!-- Display the message from the notification -->
                                        <p>{{ $notification->created_at->diffForHumans() }}</p>
                                    </div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endforeach
                        </div>

                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ Auth::check() && Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('assets/img/default-avatar.jpg') }}"
                            alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                        </span>
                    </a><!-- End Profile Image Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>

                                {{ Auth::check() ? Auth::user()->name : 'Guest' }} <br>

                            </h6>
                            <span>

                                {{ Auth::check() ? Auth::user()->designation : 'sad' }} <br>



                            </span>
                            <span>
                                {{ Auth::check() ? Auth::user()->email : 'Guest' }}
                            </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/guestprofile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>



                        <li>
                            <form id="logout-form" action="/guestout" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item d-flex align-items-center" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>


                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>

    <!-- End Header -->


    <!-- End Sidebar-->
    <x-guest.sidebar />
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Pass Slip</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Edit Pass Slip</a></li>
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

                            <form action="{{ route('guest.guestupdatesliprequest', $request->id) }}" method="POST">
                                @csrf
                                <!-- Time of Departure -->
                                <div class="row mb-3">
                                    <label for="timeDeparture" class="col-sm-2 col-form-label">Time of Departure</label>
                                    <div class="col-sm-10">
                                        <input name="time_departure" type="time" class="form-control"
                                            id="timeDeparture"
                                            value="{{ old('time_departure', $request->time_departure) }}" required>
                                    </div>
                                </div>

                                <!-- Time of Arrival -->
                                <div class="row mb-3">
                                    <label for="timeArrival" class="col-sm-2 col-form-label">Time of Arrival</label>
                                    <div class="col-sm-10">
                                        <input name="time_arrival" type="time" class="form-control" id="timeArrival"
                                            value="{{ old('time_arrival', $request->time_arrival) }}" required>
                                    </div>
                                </div>

                                <!-- Date of Departure -->
                                <div class="row mb-3">
                                    <label for="dateDeparture" class="col-sm-2 col-form-label">Date of Departure</label>
                                    <div class="col-sm-10">
                                        <input name="date_departure" type="date" class="form-control"
                                            id="dateDeparture"
                                            value="{{ old('date_departure', $request->date_departure) }}" required>
                                    </div>
                                </div>

                                <!-- Date of Arrival -->
                                <div class="row mb-3">
                                    <label for="dateArrival" class="col-sm-2 col-form-label">Date of Arrival</label>
                                    <div class="col-sm-10">
                                        <input name="date_arrival" type="date" class="form-control"
                                            id="dateArrival"
                                            value="{{ old('date_arrival', $request->date_arrival) }}" required>
                                    </div>
                                </div>

                                <!-- Purpose -->
                                <div class="row mb-3">
                                    <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
                                    <div class="col-sm-10">
                                        <select name="purpose" id="purpose" class="form-control" required>
                                            @foreach ($purpose as $p)
                                                <option value="{{ $p->purpose_name }}"
                                                    {{ old('purpose', $request->purpose) == $p->purpose_name ? 'selected' : '' }}>
                                                    {{ $p->purpose_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Hidden Field for Status -->
                                <input type="hidden" name="status" value="{{ $request->status }}">

                                <!-- Status (Only for Admin) -->
                                @if (auth()->user()->designation === 'Admin')
                                    <div class="row mb-3">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select name="status" id="status" class="form-control" required>
                                                <option value=""
                                                    {{ old('status', $request->status) == '' ? 'selected' : '' }}
                                                    disabled>Select Status</option>
                                                <option value="cancel"
                                                    {{ old('status', $request->status) == 'cancel' ? 'selected' : '' }}>
                                                    Cancel</option>
                                                <option value="pending"
                                                    {{ old('status', $request->status) == 'pending' ? 'selected' : '' }}>
                                                    Pending</option>
                                                <option value="approved"
                                                    {{ old('status', $request->status) == 'approved' ? 'selected' : '' }}>
                                                    Approved</option>
                                                <option value="disapproved"
                                                    {{ old('status', $request->status) == 'disapproved' ? 'selected' : '' }}>
                                                    Disapproved</option>
                                            </select>
                                        </div>
                                    </div>
                                @endif

                                <!-- Reason -->
                                <div class="row mb-3">
                                    <label for="reason" class="col-sm-2 col-form-label">Reason</label>
                                    <div class="col-sm-10">
                                        <textarea name="reason" class="form-control" id="reason" rows="3" required>{{ old('reason', $request->reason) }}</textarea>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="row mb-3">
                                    <label for="department" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <select name="department" id="department" class="form-control" required>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->dept_name }}"
                                                    {{ old('department', $request->department) == $department->dept_name ? 'selected' : '' }}>
                                                    {{ $department->dept_name }}
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
                                            @foreach ($heads as $head)
                                                <option value="{{ $head->id }}"
                                                    {{ old('head_office', $request->head_office) == $head->id ? 'selected' : '' }}>
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
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- End Footer -->

    <x-guest.footerscript />
</body>

</html>
