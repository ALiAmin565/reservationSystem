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
                            <h5 class="card-title">جدول المستخدمين</h5>
                            <table class="table datatable text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المستخدم</th>
                                        <th scope="col">الصلاحية</th>
                                        <th scope="col">تاريخ التسجيل</th>
                                        <th scope="col">الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                {{-- <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form> --}}
                                                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">تعديل</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
