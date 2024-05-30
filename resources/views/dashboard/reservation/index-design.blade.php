@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard Users Table </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('error'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All reservations</h5>
                            <table class="table datatable text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المستخدم</th>
                                        <th scope="col">اسم الحجز</th>
                                        <th scope="col">الوقت</th>
                                        <th scope="col">رقم الطلب</th>
                                        <th scope="col">الاجراءات</th>
                                        <th scope="col">التفاصيل</th>
                                        <th scope="col">حذف</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userServices as $userService)
                                        <tr>
                                            <td scope="row">{{ $loop->index + 1 }}</td>
                                            <td>{{ $userService->user->name }}</td>
                                            <td>باقة مصممة</td>
                                            <td>{{ $userService->hours_count }}</td>
                                            <td>{{ $userService->transaction_id }}</td>
                                            <td>
                                                <a href="{{ route('reservations-design.toggle_active', $userService) }}"
                                                    class="btn btn-{{ $userService->active ? 'secondary' : 'success' }}">
                                                    {{ $userService->active ? 'غير مفعل' : 'تفعيل' }}
                                                </a>
                                            </td>
                                            <td>
                                                <button class="btn btn-info"
                                                    onclick="showReservationDetails({{ json_encode($userService) }})">
                                                    Show Details
                                                </button>
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('user_details.soft_delete', $userService->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">حذف</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Modal -->
    <div class="modal fade" id="reservationDetailsModal" tabindex="-1" role="dialog"
        aria-labelledby="reservationDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservationDetailsModalLabel">Reservation Details</h5>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tbody id="reservationDetailsTable">
                            <!-- Reservation details will be inserted here -->
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" id="modalActionButton">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="printReservationDetails()">طباعة</button>

                </div>
            </div>
        </div>
    </div>

    <script>
      function showReservationDetails(userService) {
    const tableBody = document.getElementById('reservationDetailsTable');
    tableBody.innerHTML = `
        <tr><td>رقم الطلب</td><td>${userService.transaction_id}</td></tr>
        <tr><td>حاله الطلب</td><td>${userService.active === 1 ? 'تفعيل' : 'ليس مفعل'}</td></tr>
        <tr><td>الاسم</td><td>${userService.user.name}</td></tr>
        <tr><td>اسم الخدمة</td><td>${userService.reservation.service_name}</td></tr>
        <tr><td>سعر الخدمة </td><td>${(userService.reservation.price - userService.reservation.price * userService.reservation.discount / 100) * (1 + userService.reservation.service_charge / 100)}</td></tr>
        <tr><td>المدينة</td><td>${userService.city}</td></tr>
        <tr><td>اسم الشارع</td><td>${userService.street_name}</td></tr>
        <tr><td>رقم المبني </td><td>${userService.building_number}</td></tr>
        <tr><td>رقم الدور </td><td>${userService.floor_number}</td></tr>
        <tr><td>رقم الشقة </td><td>${userService.house_number}</td></tr>
        <tr><td>العنوان بالكامل</td><td>${userService.full_address}</td></tr>
        <tr><td>رقم الجوال</td><td>${userService.phone_number}</td></tr>
        <tr><td>عدد الزيارات:</td><td>${userService.reservation.number_of_visits}</td></tr>
        <tr><td>عدد العمال:</td><td>${userService.reservation.number_of_man_services}</td></tr>
        <tr><td>طريقة الدفع</td><td>${userService.payment_method}</td></tr>
        <tr><td>تاريخ اول زيارة</td><td>${userService.first_time}</td></tr>
    `;

    $('#reservationDetailsModal').modal('show');
}

function printReservationDetails() {
    const printContent = document.getElementById('reservationDetailsTable').outerHTML;
    const originalContent = document.body.innerHTML;

    document.body.innerHTML = `<table>${printContent}</table>`;
    window.print();
    document.body.innerHTML = originalContent;
    location.reload(); // Reload to restore the original content
}

document.getElementById('modalActionButton').addEventListener('click', function() {
    $('#reservationDetailsModal').modal('hide');
});

    </script>
@endsection
