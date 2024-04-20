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
                        <form method="POST" action="#" class="regForm" id="registerForm" role="form">
                            @csrf
                            <div class="mt-4">
                                <x-input-label for="city" :value="__('المدينةوالحي')" />
                                <x-text-input id="city" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="city" :value="old('city')" />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="street" :value="__('اسم الشارع')" />
                                <x-text-input id="street" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="street" :value="old('street')" />
                                <x-input-error :messages="$errors->get('street')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="number_home" :value="__('رقم العمارة')" />
                                <x-text-input id="number_home" class="block mt-1 w-full form-control col-sm-9"
                                    type="number" name="number_home" :value="old('number_home')" />
                                <x-input-error :messages="$errors->get('number_home')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="number_row" :value="__('رقم الطابق')" />
                                <x-text-input id="number_row" class="block mt-1 w-full form-control col-sm-9"
                                    type="number" name="number_row" :value="old('number_row')" />
                                <x-input-error :messages="$errors->get('number_row')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="number_room" :value="__('رقم الشقة')" />
                                <x-text-input id="number_room" class="block mt-1 w-full form-control col-sm-9"
                                    type="number" name="number_room" :value="old('number_room')" />
                                <x-input-error :messages="$errors->get('number_room')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="address" :value="__(' العنوان بالكامل ')" />
                                <x-text-input id="address" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="address" :value="old('address')" />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <div>
                                    <x-input-label for="phone" :value="__(' رقم الهاتف')" />
                                    <x-text-input id="phone" class=" mt-1 w-full form-control col-sm-9"
                                        type="text" name="phone" :value="old('phone')" />
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>
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
                            <div class="mt-4">
                                <x-input-label for="time_value" :value="__(' مده التعاقد ')" />
                                <x-text-input id="time_value" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="time_value" :value="old('time_value')" disabled />
                                <x-input-error :messages="$errors->get('time_value')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="first_visit" :value="__(' تاريخ أول زيارة ')" />
                                <x-text-input id="first_visit" class="block mt-1 w-full form-control col-sm-9"
                                    type="date" name="first_visit" :value="old('first_visit')" />
                                <x-input-error :messages="$errors->get('first_visit')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="payment_way" style="display: block" :value="__('اختر طريقة الدفع ')" />
                                <select id="payment_way" class="mt-1 w-full form-control col-sm-9 custom-select"
                                    name="payment_way">
                                    {{-- <option value=""> اختر طريقة الدفع</option> --}}
                                    <option value="cash"> الدفع عند استلام الخدمة(كاش)</option>
                                    <option value="bank"> عن طريق تحويل بنكي</option>
                                </select>
                                <x-input-error :messages="$errors->get('payment_way')" class="mt-2" />
                            </div>

                         
                            {{-- <div class="mt-4">
                                <div class="col-sm-9 offset-sm-3">
                                    <a href="{{ route('login') }}">لديك حساب بالفعل ؟</a>
                                </div>
                            </div> --}}
                        </form>
                        <div class="mt-4">
                            <div class="col-sm-9 offset-sm-3">
                                <x-primary-button class="ms-4 btn bg-brand text-white btn-block">
                                    <a href="{{ route('bank-information') }}">{{ __('التالي ') }}</a>
                                </x-primary-button>
                            </div>
                        </div>
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
