@extends('dashboard.nav')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit prices</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">تعديل الاسعار</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">تعديل اسعار</h5>
                            <form action="{{ route('prices.update', $price->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @include('dashboard.prices.form')
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
