@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create Package</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">انشاء باقة</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">انشاء باقة</h5>
                            <form action="{{ route('reservations-admin.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">اسم الخدمة</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="service_name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">السعر</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.01" name="price" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">الخصم (%)</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="0.01" placeholder="(e.g., 12.5 for 12.5%)"
                                            min="0" max="100" name="discount" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="service_charge" class="col-sm-2 col-form-label">نسبة الضريبة (%)</label>
                                    <div class="col-sm-10">
                                        <input type="number" id="service_charge" name="service_charge" class="form-control"
                                            step="0.01" placeholder="(e.g., 12.5 for 12.5%)" min="0"
                                            max="100">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Sum" class="col-sm-2 col-form-label"> أجمالي السعر </label>
                                    <div class="col-sm-10">
                                        <input type="number" id="Sum" name="Sum" class="form-control"
                                            step="0.01" value="" min="0" max="100" disabled>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="contract_duration" class="col-sm-2 col-form-label">مدة التعاقد
                                        (بالأيام)</label>
                                    <div class="col-sm-10">
                                        <select id="contract_duration" name="number_days" class="form-control">
                                            <option value="7">أسبوع واحد (7 أيام)</option>
                                            <option value="30">شهر واحد (30 يوم)</option>
                                            <option value="60">شهرين (60 يوم)</option>
                                            <option value="90">ثلاثة أشهر (90 يوم)</option>
                                            <option value="120">أربعة أشهر (120 يوم)</option>
                                            <option value="150">خمسة أشهر (150 يوم)</option>
                                            <option value="180">ستة أشهر (180 يوم)</option>
                                            <option value="210">سبعة أشهر (210 أيام)</option>
                                            <option value="240">ثمانية أشهر (240 يوم)</option>
                                            <option value="270">تسعة أشهر (270 يوم)</option>
                                            <option value="300">عشرة أشهر (300 يوم)</option>
                                            <option value="330">أحد عشر شهرًا (330 يوم)</option>
                                            <option value="360">سنة واحدة (12 شهرًا أو 360 يوم)</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">عدد الزيارات</label>
                                    <div class="col-sm-10">
                                        <input type="number" id="number_of_visits" name="number_of_visits"
                                            class="form-control" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">مقدمه الخدمة في الزيارات</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="number_of_man_services" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">الفترة</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="period_id" required>
                                            @foreach ($periods as $period)
                                                <option value="{{ $period->id }}">{{ $period->period }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">الوقت</label>
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
                                        <button type="submit" class="btn btn-primary">تسجيل</button>
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
