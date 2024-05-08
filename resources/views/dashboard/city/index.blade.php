@extends('dashboard.nav')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">معلومات
                        المدن
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
                                <h5 class="card-title">المدن
                                </h5>
                                <div>
                                    {{-- @if (!$exists) --}}
                                        <a href="{{ route('city.create') }}" class="btn btn-primary mx-5">انشاء</a>
                                    {{-- @endif --}}
                                </div>
                            </div>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">المدينة</th>
                                        <th scope="col">تعديل</th>
                                        <th scope="col">حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cities as $city)
                                        <tr>
                                            <th scope="row">{{ $city->id }}</th>
                                            <td>{{ $city->name }}</td>
                                            <td>
                                                <a href="{{ route('city.edit', $city->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('city.destroy', $city->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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
