@extends('dashboard.nav')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">معلومات الباقات</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">الباقات</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم الخدمة</th>
                                        <th scope="col">عدد الزيارات</th>
                                        <th scope="col">عدد مقدمه الخدمة في الزيارات</th>
                                        <th scope="col">تعديل</th>
                                        <th scope="col">حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <th scope="row">{{ $reservation->id }}</th>
                                            <td>{{ $reservation->service_name }}</td>
                                            <td>{{ $reservation->number_of_visits }}</td>
                                            <td>{{ $reservation->number_of_man_services }}</td>
                                            <td>
                                                <a href="{{ route('reservations-admin.edit', $reservation->id) }}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('reservations-admin.destroy', $reservation) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
