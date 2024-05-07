@extends('dashboard.nav')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Accounts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">الحسابات </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- Form Start -->
                            <form action="{{ route('accounts.update', $account) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <!-- Edit Button -->
                                <div class="mb-3">
                                    <button type="button" onclick="toggleEdit()" class="btn btn-secondary">تعديل</button>
                                </div>

                                <!-- Form Fields, initially disabled if $account is set -->
                                <div class="row mb-3">
                                    <label for="account_name" class="col-sm-2 col-form-label"> اسم البنك</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="account_name" class="form-control" id="account_name"
                                            value="{{ $account->account_name ?? '' }}" required
                                            {{ $account ? 'disabled' : '' }}>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="account_number" class="col-sm-2 col-form-label">رقم الحساب</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="account_number" class="form-control" id="account_number"
                                            value="{{ $account->account_number ?? '' }}" required
                                            {{ $account ? 'disabled' : '' }}>
                                    </div>
                                </div>

                                <div class="row mb-3" style="display:none">
                                    <label for="bank_name" class="col-sm-2 col-form-label">الرقم البنكي</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="bank_name" class="form-control" id="bank_name"
                                            value="{{ $account->bank_name ?? '' }}" required
                                            {{ $account ? 'disabled' : '' }}>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="whatsapp_number" class="col-sm-2 col-form-label">رقم الواتساب</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="whatsapp_number" class="form-control"
                                            id="whatsapp_number" value="{{ $account->whatsapp_number ?? '' }}" required
                                            {{ $account ? 'disabled' : '' }}>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary" {{ $account ? 'disabled' : '' }}>
                                            تحديث
                                        </button>
                                    </div>
                                </div>

                            </form><!-- End Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
    <script>
        function toggleEdit() {
            var inputs = document.querySelectorAll('#main .form-control');
            var submitButton = document.querySelector('#main form button[type="submit"]');
            inputs.forEach(input => {
                input.disabled = !input.disabled;
            });
            submitButton.disabled = !submitButton.disabled; // Enable the submit button
        }
    </script>
@endsection
