@extends('dashboard.nav')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">معلومات
                        العمال
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
                                <h5 class="card-title">العمال
                                </h5>
                                <div>
                                    @if (!$exists)
                                        <a href="{{ route('worker.create') }}" class="btn btn-primary mx-5">انشاء</a>
                                    @endif
                                </div>
                            </div>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">عدد العمال  الصباحي</th>
                                        <th scope="col">عدد العمال  المسائي</th>
                                        <th scope="col">تعديل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workers as $worker)
                                        <tr>
                                            <th scope="row">{{ $worker->id }}</th>
                                            <td>{{ $worker->persons_number_morning }}</td>
                                            <td>{{ $worker->persons_number_evening }}</td>
                                            <td>
                                                <a href="{{ route('worker.edit', $worker->id) }}"
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
