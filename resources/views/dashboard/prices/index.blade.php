@extends('dashboard.nav')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">معلومات
                        الاسعار
                    </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">الاسعار
                                </h5>
                                <div>
                                @if(!$exists)
                                <a href="{{ route('prices.create') }}"
                                    class="btn btn-primary mx-5">انشاء</a>
                                    @endif</div>
                            </div>
                          

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">السعر للشخص </th>
                                        <th scope="col">سعر الزياره</th>
                                        <th scope="col">سعر الساعه</th>
                                        <th scope="col">تعديل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prices as $reservation)
                                        <tr>
                                            <th scope="row">{{ $reservation->id }}</th>
                                            <td>{{ $reservation->person_price }}</td>
                                            <td>{{ $reservation->visit_price }}</td>
                                            <td>{{ $reservation->hour_price }}</td>
                                            <td>
                                                <a href="{{ route('prices.edit', $reservation->id) }}"
                                                    class="btn btn-primary">Edit</a>
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
