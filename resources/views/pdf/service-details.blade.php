<!DOCTYPE html>
<html>

<head>
    <title>Service Details</title>
</head>

<body>
    <h2>Service Details</h2>
    <table>
        <tr>
            <td>Service Name:</td>
            {{-- <td>{{ $service->service_name }}</td> --}}
        </tr>
        <tr>
            <td>Price:</td>
            <td>{{ $service->price }}</td>
        </tr>
        <tr>
            <td>Discount:</td>
            <td>{{ $service->discount }}</td>
        </tr>
        <tr>
            <td>Number of Visits:</td>
            <td>{{ $service->number_of_visits }}</td>
        </tr>
        <tr>
            <td>Period ID:</td>
            <td>{{ $service->period_id }}</td>
        </tr>
        <tr>
            <td>Time ID:</td>
            <td>{{ $service->time_id }}</td>
        </tr>
        <tr>
            <td>Created At:</td>
            <td>{{ $service->created_at }}</td>
        </tr>
        <tr>
            <td>Active:</td>
            <td>{{ $service->active }}</td>
        </tr>
        <tr>
            <td>Number of Man Services:</td>
            <td>{{ $service->number_of_man_services }}</td>
        </tr>
        <tr>
            <td>Number of Days:</td>
            <td>{{ $service->number_days }}</td>
        </tr>
        <tr>
            <td>Service Charge:</td>
            <td>{{ $service->service_charge }}</td>
        </tr>
        <tr>
            <td>Nationality:</td>
            <td>{{ $service->nationality }}</td>
        </tr>
    </table>
</body>

</html>
