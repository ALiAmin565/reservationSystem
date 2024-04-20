@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create Package</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Create Package</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Package Details</h5>
                            <form action="{{ route('reservations-admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Service Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="service_name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.01" name="price" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Discount</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.01" name="discount" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Number of Visits</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="number_of_visits" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Number of Man Services</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="number_of_man_services" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Period</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="period_id" required>
                                            @foreach ($periods as $period)
                                                <option value="{{ $period->id }}">{{ $period->period }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="time_id" required>
                                            @foreach ($times as $time)
                                                <option value="{{ $time->id }}">{{ $time->time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
