<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>موقع نظافة ولمعة</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://shining.ajeerco.com/wp-content/uploads/2023/10/cropped-logo6.png" rel="icon">
    <link href="https://shining.ajeerco.com/wp-content/uploads/2023/10/cropped-logo6.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="https://shining.ajeerco.com/wp-content/uploads/2023/10/cropped-logo6.png" alt="">
                <span class="d-none d-lg-block">نظافة ولمعة</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav me-auto">
            <ul class="d-flex align-items-center">




                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="https://shining.ajeerco.com/wp-content/uploads/2023/10/cropped-logo6.png"
                            alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <!--<li class="dropdown-header">-->
                        <!--<h6>Kevin Anderson</h6>-->
                        <!--<span>Web Designer</span>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <hr class="dropdown-divider">-->
                        <!--</li>-->

                        <!--<li>-->
                        <!--  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">-->
                        <!--    <i class="bi bi-person"></i>-->
                        <!--    <span>My Profile</span>-->
                        <!--  </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <hr class="dropdown-divider">-->
                        <!--</li>-->

                        <!--<li>-->
                        <!--  <a class="dropdown-item d-flex align-items-center" href="">-->
                        <!--    <i class="bi bi-gear"></i>-->
                        <!--    <span>Account Settings</span>-->
                        <!--  </a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <hr class="dropdown-divider">-->
                        <!--</li>-->


                        <!--<li>-->
                        <!--  <hr class="dropdown-divider">-->
                        <!--</li>-->

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                    class="nav-link">
                                    {{ __(' تسجيل خروج') }}
                                </x-dropdown-link>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard-admin') }}">
                    <i class="bi bi-grid"></i>
                    <span>لوحة التحكم</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('reservations.fetch', 'active') }}">
                    <i class="bi bi-grid">
                        <span>الحجوزات </span>
                    </i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('reservations.fetch', 'inactive') }}">
                    <i class="bi bi-grid">
                        <span> الحجوزات المنتظرة</span>
                    </i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('reservations-design.fetch') }}">
                    <i class="bi bi-grid">
                        <span> الحجوزات المخصصة </span>
                    </i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('reservations-admin.create') }}">
                    <i class="bi bi-grid">
                        <span> انشاء باقة</span>
                    </i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('reservations-admin.index') }}">
                    <i class="bi bi-grid">
                        <span>الباقات </span>
                    </i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('accounts.create') }}">
                    <i class="bi bi-grid">
                        <span>حسابي </span>
                    </i>
                </a>
            </li>

        
            <!-- End Forms Nav -->

        </ul>

    </aside><!-- End Sidebar-->
    {{-- main contant yelad  --}}
    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>




    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contract_duration').change(function() {
                var days = parseInt($(this).val(), 10); // Parse the day value as an integer
                var visits = Math.ceil(days / 7); // Calculate visits, rounding up to cover partial weeks
                // Set the integer number of visits in the input field
                // if visit biger than 4 reduce value bu  1 
                if (visits > 4) {
                    visits = visits - 1;
                }

                $('#number_of_visits').val(visits); // Set the integer number of visits in the input field
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const priceInput = document.querySelector('input[name="price"]');
            const discountInput = document.querySelector('input[name="discount"]');
            const serviceChargeInput = document.querySelector('input[name="service_charge"]');
            const sumInput = document.getElementById('Sum');

            function calculateTotal() {
                const price = parseFloat(priceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;
                const serviceCharge = parseFloat(serviceChargeInput.value) || 0;

                // Calculate discount amount
                const discountAmount = price * (discount / 100);

                // Calculate service charge amount
                const serviceChargeAmount = price * (serviceCharge / 100);

                // Calculate final price
                const total = price - discountAmount + serviceChargeAmount;

                sumInput.value = total.toFixed(2);
            }

            // Event listeners for inputs
            priceInput.addEventListener('input', calculateTotal);
            discountInput.addEventListener('input', calculateTotal);
            serviceChargeInput.addEventListener('input', calculateTotal);
        });
    </script>

</body>

</html>
