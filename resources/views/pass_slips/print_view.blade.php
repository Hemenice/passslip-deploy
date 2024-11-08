<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass Slip - {{ $slip->control_number }}</title>
    <style>
        /* Print-friendly styles */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .no-print {
            display: none;
        }

        /* Hide unnecessary elements when printing */
        @media print {
            .no-print {
                display: none;
            }

            body {
                margin: 0;
            }
        }
    </style>
</head>

<body>

    <h1>Pass Slip Details</h1>

    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $slip->user->name }}</td>
        </tr>
        <tr>
            <th>Control Number</th>
            <td>{{ $slip->control_number }}</td>
        </tr>
        <tr>
            <th>Purpose</th>
            <td>{{ $slip->purpose }}</td>
        </tr>
        <tr>
            <th>Reason</th>
            <td>{{ $slip->reason }}</td>
        </tr>
        <tr>
            <th>Date Created</th>
            <td>{{ $slip->created_at->format('F j, Y, h:i A') }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ ucfirst($slip->status) }}</td>
        </tr>
        @if ($slip->status === 'approved' && $slip->barcode)
            <tr>
                <th>Barcode</th>
                <td><img src="{{ asset('storage/barcodes/' . $slip->barcode) }}" alt="Barcode" style="width:100px;"></td>
            </tr>
        @else
            <tr>
                <th>Barcode</th>
                <td>UNAVAILABLE</td>
            </tr>
        @endif
        <tr>
            <th>Approved by</th>
            <td>{{ \App\Models\User::where('id', $slip->approved_by)->value('name') }}</td>
        </tr>
    </table>

    <!-- Optional: Print button -->
    <div style="margin-top: 20px;" class="no-print">
        <button onclick="window.print()">Print This Page</button>
    </div>

</body>

</html>
