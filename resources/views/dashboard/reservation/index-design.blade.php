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
                            <table class="table datatable text-center" style="    display: flex;flex-direction: column;">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Reservation Name</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userServices as $userService)
                                        <tr>
                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                            <td>{{ $userService->user->name }}</td>
                                            <td>باقة مصممة </td>
                                            <td>{{ $userService->hours_count }}</td>
                                            <td>{{ $userService->active ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ route('reservations-design.toggle_active', $userService) }}"
                                                    class="btn btn-{{ $userService->active ? 'secondary' : 'success' }}">
                                                    {{ $userService->active ? 'Deactivate' : 'Activate' }}
                                                </a>
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
@endsection
