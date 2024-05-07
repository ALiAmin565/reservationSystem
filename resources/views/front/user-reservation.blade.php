<x-layout.master>
    <!-- Modal -->
    <div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-1 bg-transparent d-flex justify-content-center">
                    <div class="social-bar">
                        <nav class="nav justify-content-center">
                            <a id="facebook" class="nav-link"
                                href="https://www.facebook.com/sharer/sharer.php?%20%20%20%20%20u=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f&amp;t=almutahidah"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a id="twitter" class="nav-link"
                                href="https://twitter.com/intent/tweet?%20%20%20url=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f&amp;text=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f"
                                target="_blank" title="Tweet" rel="noopener noreferrer nofollow">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a id="instagram" class="nav-link"
                                href="https://www.instagram.com/mutahidahco/?igshid=MzRlODBiNWFlZA" target="_blank"
                                rel="noopener">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a id="telegram" class="nav-link"
                                href="https://telegram.me/share/url?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20url=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f&amp;text=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f"
                                target="_blank" rel="noopener noreferrer nofollow">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                            <a id="whatsapp" class=" nav-link "
                                href="https://wa.me/?text=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f&amp;url=https%3a%2f%2fwww.almutahidah.com%2fHourlyContract%2fPackages%2f"
                                target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="inner-header">
        <div class="pb-5 text-center">
            <h1 class="font-bold fs-28 text-white"><span class="d-inline-block pb-2 px-5"> قطاع الأفراد </span></h1>
        </div>
    </div>

    <div class="container position-relative mb-4">
        <div class="row py-lg-4 py-3">

            <div class="col-lg-10 offset-lg-1">
                <div class="bg-brand fs-24 my-4 p-1 rounded-32 text-center text-white ">بيانات التعاقد</div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <span class="text-danger">
                            <div class="validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                        </span>
                        <form method="POST" action="{{ route('store.user.services') }}" class="regForm"
                            id="registerForm" role="form">
                            @csrf
                            {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" /> --}}
                            <!-- حقل المدينة -->
                            <div class="mt-4">
                                <x-input-label for="city" :value="__('المدينة والحي')" />
                                <x-text-input id="city" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="city" :value="old('city')" required autofocus />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>

                            <!-- حقل اسم الشارع -->
                            <div class="mt-4">
                                <x-input-label for="street_name" :value="__('اسم الشارع')" />
                                <x-text-input id="street_name" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="street_name" :value="old('street_name')" required />
                                <x-input-error :messages="$errors->get('street_name')" class="mt-2" />
                            </div>

                            <!-- حقل رقم العمارة -->
                            <div class="mt-4">
                                <x-input-label for="building_number" :value="__('رقم العمارة')" />
                                <x-text-input id="building_number" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="building_number" :value="old('building_number')" required />
                                <x-input-error :messages="$errors->get('building_number')" class="mt-2" />
                            </div>

                            <!-- حقل رقم الطابق -->
                            <div class="mt-4">
                                <x-input-label for="floor_number" :value="__('رقم الطابق')" />
                                <x-text-input id="floor_number" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="floor_number" :value="old('floor_number')" />
                                <x-input-error :messages="$errors->get('floor_number')" class="mt-2" />
                            </div>

                            <!-- حقل رقم الشقة -->
                            <div class="mt-4">
                                <x-input-label for="house_number" :value="__('رقم الشقة')" />
                                <x-text-input id="house_number" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="house_number" :value="old('house_number')" required />
                                <x-input-error :messages="$errors->get('house_number')" class="mt-2" />
                            </div>

                            <!-- حقل العنوان الكامل -->
                            <div class="mt-4">
                                <x-input-label for="full_address" :value="__('العنوان بالكامل')" />
                                <x-text-input id="full_address" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="full_address" :value="old('full_address')" required />
                                <x-input-error :messages="$errors->get('full_address')" class="mt-2" />
                            </div>

                            <!-- حقل رقم الهاتف -->
                            <div class="mt-4">
                                <x-input-label for="phone_number" :value="__('رقم الهاتف')" />
                                <x-text-input id="phone_number" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="phone_number" :value="old('phone_number')" required />
                                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <input type="hidden" name="reservation_id" value="{{ $service->id }}" />
                            <div class="mt-4">
                                <x-input-label for="num_hour" :value="__(' أسم الباقة ')" />
                                <x-text-input id="num_hour" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="num_hour" :value="$service->service_name" disabled />
                                <x-input-error :messages="$errors->get('num_hour')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="num_service" :value="__(' عدد مقدمي الخدمة ')" />
                                <x-text-input id="num_service" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="num_service" :value="$service->number_of_man_services" disabled />
                                <x-input-error :messages="$errors->get('num_service')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="num_visit" :value="__(' عدد الزيارات ')" />
                                <x-text-input id="num_visit" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="num_visit" :value="$service->number_of_visits" disabled />
                                <x-input-error :messages="$errors->get('num_visit')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="num_hour" :value="__(' عدد الساعات ')" />
                                <x-text-input id="num_hour" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="num_hour" :value="$service->time->time" disabled />
                                <x-input-error :messages="$errors->get('num_hour')" class="mt-2" />
                            </div>
                            @php
                                $days = $service->number_days; // Assume this is set and is a numeric value.
                                $label = '';
                                $value = 0;

                                if ($days == 7) {
                                    $label = 'أسبوع';
                                    $value = 1;
                                } elseif ($days == 14) {
                                    $label = 'أسبوعين';
                                    $value = 2;
                                } elseif ($days == 21) {
                                    $label = 'ثلاثة أسابيع';
                                    $value = 3;
                                } elseif ($days == 28) {
                                    $label = 'أربعة أسابيع';
                                    $value = 4;
                                } elseif ($days == 30) {
                                    $label = 'شهر';
                                    $value = 1;
                                } elseif ($days == 60) {
                                    $label = 'شهرين';
                                    $value = 2;
                                } elseif ($days == 90) {
                                    $label = 'ثلاثة أشهر';
                                    $value = 3;
                                } elseif ($days == 120) {
                                    $label = 'أربعة أشهر';
                                    $value = 4;
                                } elseif ($days == 150) {
                                    $label = 'خمسة أشهر';
                                    $value = 5;
                                } elseif ($days == 180) {
                                    $label = 'ستة أشهر';
                                    $value = 6;
                                } elseif ($days == 210) {
                                    $label = 'سبعة أشهر';
                                    $value = 7;
                                } elseif ($days == 240) {
                                    $label = 'ثمانية أشهر';
                                    $value = 8;
                                } elseif ($days == 270) {
                                    $label = 'تسعة أشهر';
                                    $value = 9;
                                } elseif ($days == 300) {
                                    $label = 'عشرة أشهر';
                                    $value = 10;
                                } elseif ($days == 330) {
                                    $label = 'أحد عشر شهرًا';
                                    $value = 11;
                                } elseif ($days == 360) {
                                    $label = 'سنة';
                                    $value = 12;
                                } else {
                                    $label = 'يوم';
                                    $value = $days;
                                }
                            @endphp

                            <div class="mt-4">
                                <x-input-label for="time_value" :value="__(' مده التعاقد ')" />
                                <x-text-input id="time_value" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="time_value" :value="$label" disabled />
                                <x-input-error :messages="$errors->get('time_value')" class="mt-2" />
                            </div>

                            <!-- حقل تاريخ الزيارة الأولى -->
                            <div class="mt-4">
                                <x-input-label for="first_time" :value="__('تاريخ الزيارة الأولى')" />
                                <x-text-input id="first_time" class="block mt-1 w-full form-control col-sm-9"
                                    type="date" name="first_time" :value="old('first_time')" required />
                                <x-input-error :messages="$errors->get('first_time')" class="mt-2" />
                            </div>

                            <!-- حقل طريقة الدفع -->
                            <div class="mt-4">
                                <x-input-label for="payment_method" :value="__('طريقة الدفع')" />
                                <select id="payment_method" class="block mt-1 w-full form-control col-sm-9"
                                    name="payment_method" required>
                                    <option value="cash">الدفع نقداً عند الاستلام</option>
                                    <option value="bank_transfer">تحويل بنكي</option>
                                </select>
                                <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
                            </div>
                                @php
                                $price = $service->price;
                                $discount = $service->discount ;
                                $serviceCharge = $service->service_charge;
                                $discountAmount = $price * ($discount / 100);
                                $serviceChargeAmount =  ($serviceCharge / 100) * $price;
                                $totalPrice = $price - $discountAmount + $serviceChargeAmount;
                            @endphp
                            <div class="mt-4">
                                <x-input-label for="num_visit" :value="__('أجمالي السعر ')" />
                                <x-text-input id="num_visit" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="num_visit" :value="$totalPrice" disabled />
                                <x-input-error :messages="$errors->get('num_visit')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <div class="col-sm-9 offset-sm-3">
                                    <x-primary-button class="ms-4 btn bg-brand text-white btn-block">
                                        {{ __('التالي ') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="Scripts/site/hourly-contract/Packages43a0.js?v3"></script>
    <style>
        span.promotion-rules {
            font-size: 12px;
            width: 20px;
            background: #fff;
            height: 20px;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #b61018;
            box-shadow: rgba(0, 0, 0, 0.3) 0 0 5px;
            margin: 0 .5rem 0;
            background: transparent;
            border: 1px solid #b61018;
            box-shadow: none;
        }


        .swal2-popup.swal2-modal {
            padding: 0;
        }

        .swal2-popup.swal2-modal .swal2-icon {
            display: none !important
        }

        .swal2-popup.swal2-modal .swal2-title {
            width: 100%;
            background: #6b0d11;
            color: #fff;
            text-align: center;
            justify-content: center;
            font-size: 24px;
            padding: .75rem;
            border-radius: .25rem .25rem 0 0;
        }

        .swal2-popup.swal2-modal .swal2-content {
            padding: 0 1rem;
            max-height: 50vh;
            overflow: auto;
        }

        .swal2-popup.swal2-modal .swal2-confirm {
            background: #6b0d11;
        }

        .swal2-popup.swal2-modal .swal2-actions {
            margin: .5rem auto;
        }
    </style>

</x-layout.master>
