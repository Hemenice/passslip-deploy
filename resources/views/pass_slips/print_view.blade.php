<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Individual Pass/Time Adjustment Slip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        .section {
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
        }

        .underline {
            border-bottom: 1px solid #000;
            padding-bottom: 2px;
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <h2>Individual Pass/Time Adjustment Slip</h2>

    <div class="section">
        <p><span class="label">To be filled up by the requesting Employee:</span></p>
        <p>Name: <span class="underline">{{ $slip->user->name }}</span></p>
        <p>Date: <span class="underline">{{ $slip->created_at->format('F j, Y') }}</span></p>

        <p>Control Number: <span class="">{{ $slip->control_number }}</span></p>
        <p>Barcode: <img src="{{ asset('storage/barcodes/' . $slip->barcode) }}"
                alt="Barcode for {{ $slip->control_number }}" style="width:100px;" /></p>

        <p>Permission is requested to:</p>
        <p>Leave the Office premises during office hours from:</p>
        <p>Intended time of Departure: <span
                class="underline">{{ \Carbon\Carbon::parse($slip->time_departure)->format('h:i A') }}</span></p>
        <p>Intended time of Arrival: <span
                class="underline">{{ \Carbon\Carbon::parse($slip->time_arrival)->format('h:i A') }}</span></p>

        <p>Purpose: <span class="underline">{{ $slip->purpose }}</span></p>
        <p>Reason: <span class="underline">{{ $slip->reason }}</span></p>
    </div>

    <div class="section">
        <p><span class="label">To be filled up by the approving authority:</span></p>
        <p>Approved By: <span class="underline">
                {{ \App\Models\User::where('id', $slip->approved_by)->value('name') }}</span></p>
        <p>(Head of Office/Authorized Representative)</p>
    </div>

    <div class="section">
        <p><span class="label">To be filled up by the guard or scanned in exit using barcode scanner:</span></p>
        @if ($slip->barcodes->isEmpty())
            <p>Actual time of Departure: <span class="underline">Unavailable</span></p>
            <p>Actual time of Arrival: <span class="underline">Unavailable</span></p>
        @else
            @foreach ($slip->barcodes as $barcode)
                <p>Actual time of Departure: <span class="underline">
                        {{ $barcode->actual_time_departure ? \Carbon\Carbon::parse($barcode->actual_time_departure)->format('h:i A') : 'Unavailable' }}
                    </span>
                </p>
                <p>Actual time of Arrival: <span class="underline">
                        {{ $barcode->actual_time_arrival ? \Carbon\Carbon::parse($barcode->actual_time_arrival)->format('h:i A') : 'Unavailable' }}
                    </span>
                </p>
            @endforeach
        @endif
        <p>Guard: <span class="underline">{{ $slip->guard }}</span></p>
    </div>
</body>

</html>
