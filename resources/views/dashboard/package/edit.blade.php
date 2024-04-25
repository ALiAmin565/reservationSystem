@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Package</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">تعديل الباقة</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">تعديل باقة</h5>
                            <form action="{{ route('reservations-admin.update', $reservation->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <!-- Input fields here with existing values pre-filled -->
                                <!-- Example: -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">اسم الخدمة</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="service_name" class="form-control"
                                            value="{{ $reservation->service_name }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">السعر</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.01" name="price" class="form-control"
                                            value="{{ $reservation->price }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">الخصم (%)</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.01" name="discount" class="form-control"
                                            placeholder="(e.g., 12.5 for 12.5%)" min="0" max="100"
                                            value="{{ $reservation->discount }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">نسبة الخدمة (%)</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="service_charge" class="form-control" step="0.01"
                                            placeholder="(e.g., 12.5 for 12.5%)" min="0" max="100"
                                            value="{{ $reservation->service_charge }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="contract_duration" class="col-sm-2 col-form-label">مدة التعاقد
                                        (بالأيام)</label>
                                    <div class="col-sm-10">
                                        <select id="contract_duration" name="number_days" class="form-control">
                                            @foreach (['7' => 'أسبوع واحد (7 أيام)', '30' => 'شهر واحد (30 يوم)', '60' => 'شهرين (60 يوم)', '90' => 'ثلاثة أشهر (90 يوم)', '120' => 'أربعة أشهر (120 يوم)', '150' => 'خمسة أشهر (150 يوم)', '180' => 'ستة أشهر (180 يوم)', '210' => 'سبعة أشهر (210 أيام)', '240' => 'ثمانية أشهر (240 يوم)', '270' => 'تسعة أشهر (270 يوم)', '300' => 'عشرة أشهر (300 يوم)', '330' => 'أحد عشر شهرًا (330 يوم)', '360' => 'سنة واحدة (360 يوم)'] as $key => $value)
                                                <option value="{{ $key }}"
                                                    @if ($reservation->number_days == $key) selected @endif>{{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">عدد الزيارات</label>
                                    <div class="col-sm-10">
                                        <input type="number" id="number_of_visits" name="number_of_visits"
                                            class="form-control" value="{{ $reservation->number_of_visits }}" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">مقدمه الخدمة في الزيارات</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="number_of_man_services" class="form-control"
                                            value="{{ $reservation->number_of_man_services }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">الفترة</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="period_id" required>
                                            @foreach ($periods as $period)
                                                <option value="{{ $period->id }}"
                                                    @if ($reservation->period_id == $period->id) selected @endif>{{ $period->period }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">الوقت</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="time_id" required>
                                            @foreach ($times as $time)
                                                <option value="{{ $time->id }}"
                                                    @if ($reservation->time_id == $time->id) selected @endif>{{ $time->time }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- Repeat for other fields -->
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
