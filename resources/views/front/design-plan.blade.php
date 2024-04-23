<x-layout.master>
    <!-- Modal -->
    <div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-1 bg-transparent d-flex justify-content-center">
                    <div class="social-bar">
                        <nav class="nav justify-content-center">
                            <a id="facebook" class="nav-link"
                                href="https://www.facebook.com/sharer/sharer.php?%20%20%20%20%20u=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister&amp;t=almutahidah"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a id="twitter" class="nav-link"
                                href="https://twitter.com/intent/tweet?%20%20%20url=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister&amp;text=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister"
                                target="_blank" title="Tweet" rel="noopener noreferrer nofollow">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a id="instagram" class="nav-link"
                                href="https://www.instagram.com/mutahidahco/?igshid=MzRlODBiNWFlZA" target="_blank"
                                rel="noopener">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a id="telegram" class="nav-link"
                                href="https://telegram.me/share/url?%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20url=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister&amp;text=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister"
                                target="_blank" rel="noopener noreferrer nofollow">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                            <a id="whatsapp" class=" nav-link "
                                href="https://wa.me/?text=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister&amp;url=https%3a%2f%2fwww.almutahidah.com%2fAccount%2fRegister"
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
            <h1 class="font-bold fs-28 text-white"><span class="d-inline-block pb-2 px-5"> صمم باقتك </span>
            </h1>
        </div>
    </div>
    <div class="container position-relative mb-4">
        <div class="row py-lg-4 py-3">
            <div class="col-lg-10 offset-lg-1">
                <div class="bg-brand fs-24 my-4 p-1 rounded-32 text-center text-white ">صمم باقتك</div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <span class="text-success">
                            <div class="validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                        </span>
                        <form method="POST" action="{{ route('user_details.store') }}">
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

                            <!-- حقل عدد مقدمي الخدمة -->
                            <div class="mt-4">
                                <x-input-label for="service_count" :value="__('عدد مقدمي الخدمة')" />
                                <select id="service_count" class="block mt-1 w-full form-control col-sm-9"
                                    name="service_count" required>
                                    <option value="">اختر عدد المقدمين</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('service_count')" class="mt-2" />
                            </div>

                            <!-- حقل عدد الزيارات الأسبوعية -->
                            <div class="mt-4">
                                <x-input-label for="weekly_visits" :value="__('عدد الزيارات الأسبوعية')" />
                                <select id="weekly_visits" class="block mt-1 w-full form-control col-sm-9"
                                    name="weekly_visits" required>
                                    <option value="">اختر عدد الزيارات</option>
                                    @for ($i = 1; $i <= 6; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('weekly_visits')" class="mt-2" />
                            </div>
                            <!-- حقل عدد الزيارات الأسبوعية -->
                            <div class="mt-4">
                                <x-input-label for="hours_count" :value="__('عدد الساعات')" />
                                <select id="hours_count" class="block mt-1 w-full form-control col-sm-9"
                                    name="hours_count" required>
                                    <option value="">اختر عدد الساعات </option>
                                    @foreach ($times as $time)
                                        <option value="{{ $time->time }}">{{ $time->time }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('hours_count')" class="mt-2" />
                            </div>

                            <!-- حقل مدة التعاقد -->
                            <div class="mt-4">
                                <x-input-label for="contract_duration" :value="__('مدة التعاقد')" />
                                <select id="contract_duration" class="block mt-1 w-full form-control col-sm-9"
                                    name="contract_duration" required>
                                    <option value="">اختر مدة التعاقد</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">{{ $i }} شهور</option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('contract_duration')" class="mt-2" />
                            </div>

                            <!-- حقل تاريخ الزيارة الأولى -->
                            <div class="mt-4">
                                <x-input-label for="first_visit" :value="__('تاريخ الزيارة الأولى')" />
                                <x-text-input id="first_visit" class="block mt-1 w-full form-control col-sm-9"
                                    type="date" name="first_visit" :value="old('first_visit')" required />
                                <x-input-error :messages="$errors->get('first_visit')" class="mt-2" />
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
    <style>
        .custom-select {
            appearance: none;
            /* إزالة الشكل الافتراضي للسهم */
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg>') no-repeat right 0.75rem center/20px 20px;
            border: 1px solid #ccc;
            padding-right: 2.5rem;
            /* توفير مساحة للسهم */
            cursor: pointer;
        }
    </style>
    <script>
        $(document).on("click", "#Registerbtn", function() {

            var form = $(this).closest("form");

            if (form.valid()) {
                $("#fakeLoader").fakeLoader({
                    timeToHide: 120000,
                    bgColor: "#28282e",
                    spinner: "spinner1",
                    zIndex: 1051,
                });
            }
        });
    </script> <!-- inner header -->
</x-layout.master>
