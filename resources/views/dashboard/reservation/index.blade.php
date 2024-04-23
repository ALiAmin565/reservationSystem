@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard Users Table </h1>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All reservations</h5>
                            <table class="table datatable text-center" >
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المستخدم</th>
                                        <th scope="col">اسم الحجز</th>
                                        <th scope="col">الوقت</th>
                                        <th scope="col">الحالة</th>
                                        <th scope="col">الاجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userServices as $userService)
                                        @if ($userService->reservation)
                                            <!-- Make sure reservation is loaded -->
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $userService->user->name }}</td>
                                                <td>{{ $userService->reservation->service_name }}</td>
                                                <td>{{ $userService->reservation->time->time }}</td>
                                                <td>{{ $userService->reservation->active ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="{{ route('reservations.toggle_active', $userService->reservation) }}"
                                                        class="btn btn-{{ $userService->reservation->active ? 'secondary' : 'success' }}">
                                                        {{ $userService->reservation->active ? 'Deactivate' : 'Activate' }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
