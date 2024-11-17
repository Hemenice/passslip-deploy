<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Pass/Time Adjustment Slip</title>
    <style>
        @media print {
            img {
                max-width: 100%;
                height: auto;
                display: block;
            }
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .container {
            width: 400px;
            border: 4px solid black;
            padding: 10px;
        }

        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .row {
            margin-bottom: 5px;
            align-items: left;
            text-align: left;
        }

        .label {
            display: inline-block;
            width: 150px;
            text-align: left;
        }

        .input {
            width: 200px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        .separator {
            border-top: 2px solid black;
            margin-top: 6px;
            margin-bottom: 6px;
        }

        img {
            margin: auto;
            width: 250px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            INDIVIDUAL PASS/TIME ADJUSTMENT SLIP
        </div>
        <div class="separator"></div>

        <div class="header">
            TO BE FILLED UP BY THE REQUESTING EMPLOYEE
        </div>
        <div class="separator"></div>

        <div class="row">
            <span>Name:</span>
            <span>{{ $slip->user->name }}</span>
        </div>

        <div class="row">
            <span>Date:</span>
            <span>{{ $slip->created_at->format('F j, Y') }}</span>
        </div>

        <div class="separator"></div>

        <div class="row">
            <span>Control Number:</span>
            <span>{{ $slip->control_number }}</span>
        </div>

        <div class="row">
            <img src="{{ asset('storage/barcodes/' . $slip->barcode) }}" alt="Barcode for {{ $slip->control_number }}">
        </div>

        <div class="separator"></div>

        <div class="header">
            Permission is requested to Leave the Office premises during office hours from:
        </div>

        <div class="row">
            <span>Intended time of Departure:</span>
            <span>{{ \Carbon\Carbon::parse($slip->time_departure)->format('h:i A') }}</span>
        </div>

        <div class="row">
            <span>Intended time of Arrival:</span>
            <span>{{ \Carbon\Carbon::parse($slip->time_arrival)->format('h:i A') }}</span>
        </div>

        <div class="row">
            <span>Purpose:</span>
            <span>{{ $slip->purpose }}</span>
        </div>

        <div class="row">
            <span>Reason:</span>
            <span>{{ $slip->reason }}</span>
        </div>

        <div class="separator"></div>

        <div class="header">
            TO BE FILLED UP BY THE APPROVING AUTHORITY
        </div>
        <div class="separator"></div>

        <div class="row"> <br>
            <span>Approved By:</span>
            <span><strong>{{ strtoupper(\App\Models\User::where('id', $slip->approved_by)->value('name')) }}</strong></span>

        </div>
        <br>


        <div class="separator"></div>

        <div class="header">
            Filled up by guard or Barcode Scanned
        </div>
        <div class="separator"></div>

        {{-- <div class="row">
            <span class="label">Actual time of Departure:</span>
            <span>{{ $slip->barcodes->where('slip_id', $slip->id)->first()->actual_time_departure ?? 'N/A' }}</span>
        </div>

        <div class="row">
            <span class="label">Actual time of Arrival:</span>
            <span>{{ $slip->barcodes->where('slip_id', $slip->id)->first()->actual_time_arrival ?? 'N/A' }}</span>
        </div> --}}

        <div class="row">
            <span class="label">Date Scanned:</span>
            <span>
                @php
                    $barcode = $slip->barcodes->where('slip_id', $slip->id)->first();
                @endphp
                {{ $barcode && $barcode->created_at
                    ? \Carbon\Carbon::parse($barcode->created_at)->format('M d, Y h:i A')
                    : 'N/A' }}
            </span>
        </div>

        <div class="row">
            <span class="label">Actual time of Departure:</span>
            <span>
                @php
                    $barcode = $slip->barcodes->where('slip_id', $slip->id)->first();
                @endphp
                {{ $barcode && $barcode->actual_time_departure
                    ? \Carbon\Carbon::parse($barcode->actual_time_departure)->format('h:i A')
                    : 'NOT AVAILABLE' }}
            </span>
        </div>

        <div class="row">
            <span class="label">Actual time of Arrival:</span>
            <span>
                @php
                    $barcode = $slip->barcodes->where('slip_id', $slip->id)->first();
                @endphp
                {{ $barcode && $barcode->actual_time_arrival
                    ? \Carbon\Carbon::parse($barcode->actual_time_arrival)->format('h:i A')
                    : 'NOT AVAILABLE' }}
            </span>
        </div>


        <div class="row">
            <span class="label">Guard:</span> <br>
            <span>_______________________________</span>
        </div>

        <div class="separator"></div>

        <div class="header">
            GENERATED FROM E-PASS SLIP RECORDING SYSTEM
        </div>
    </div>





</body>

</html>
