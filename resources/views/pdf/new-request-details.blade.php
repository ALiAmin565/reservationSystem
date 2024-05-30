<!DOCTYPE html>
<html>
<head>
    <title>New Request Details</title>
</head>
<body>
    <h2>New Request Details</h2>
    <table>
        <tr>
            <td>ID:</td>
            <td>{{ $newRequest->id }}</td>
        </tr>
        <tr>
            <td>User ID:</td>
            <td>{{ $newRequest->user_id }}</td>
        </tr>
        <tr>
            <td>City:</td>
            <td>{{ $newRequest->city }}</td>
        </tr>
        <tr>
            <td>Street Name:</td>
            <td>{{ $newRequest->street_name }}</td>
        </tr>
        <tr>
            <td>Building Number:</td>
            <td>{{ $newRequest->building_number }}</td>
        </tr>
        <tr>
            <td>Floor Number:</td>
            <td>{{ $newRequest->floor_number }}</td>
        </tr>
        <tr>
            <td>House Number:</td>
            <td>{{ $newRequest->house_number }}</td>
        </tr>
        <tr>
            <td>Full Address:</td>
            <td>{{ $newRequest->full_address }}</td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td>{{ $newRequest->phone_number }}</td>
        </tr>
        <tr>
            <td>Service Count:</td>
            <td>{{ $newRequest->service_count }}</td>
        </tr>
        <tr>
            <td>Weekly Visits:</td>
            <td>{{ $newRequest->weekly_visits }}</td>
        </tr>
        <tr>
            <td>Hours Count:</td>
            <td>{{ $newRequest->hours_count }}</td>
        </tr>
        <tr>
            <td>Contract Duration:</td>
            <td>{{ $newRequest->contract_duration }}</td>
        </tr>
        <tr>
            <td>First Visit:</td>
            <td>{{ $newRequest->first_visit }}</td>
        </tr>
        <tr>
            <td>Payment Method:</td>
            <td>{{ $newRequest->payment_method }}</td>
        </tr>
        <tr>
            <td>Created At:</td>
            <td>{{ $newRequest->created_at }}</td>
        </tr>
        <tr>
            <td>Updated At:</td>
            <td>{{ $newRequest->updated_at }}</td>
        </tr>
        <tr>
            <td>Active:</td>
            <td>{{ $newRequest->active }}</td>
        </tr>
        <tr>
            <td>Transaction ID:</td>
            <td>{{ $newRequest->transaction_id }}</td>
        </tr>
        <tr>
            <td>Period:</td>
            <td>{{ $newRequest->period }}</td>
        </tr>
        <tr>
            <td>Total Price:</td>
            <td>{{ $newRequest->total_price }}</td>
        </tr>
        <tr>
            <td>Nationality:</td>
            <td>{{ $newRequest->nationality }}</td>
        </tr>
    </table>
</body>
</html>
