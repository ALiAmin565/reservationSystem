@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create prices</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">انشاء الاسعار</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">انشاء اسعار</h5>
                            <form action="{{ route('prices.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @include('dashboard.prices.form')
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
