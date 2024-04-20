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
                        <span class="text-danger">
                            <div class="validation-summary-valid" data-valmsg-summary="true">
                                <ul>
                                    <li style="display:none"></li>
                                </ul>
                            </div>
                        </span>
                        <form method="POST" action="{{ route('register') }}" class="regForm" id="registerForm"
                            role="form">
                            @csrf
                            <div class="mt-4">
                                <x-input-label for="city" :value="__('المدينةوالحي')" />
                                <x-text-input id="city" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="city" :value="old('city', $user->city ?? '')" required />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="street" :value="__('اسم الشارع')" />
                                <x-text-input id="street" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="street" :value="old('street', $user->street_name ?? '')" required />
                                <x-input-error :messages="$errors->get('street')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="number_home" :value="__('رقم العمارة')" />
                                <x-text-input id="number_home" class="block mt-1 w-full form-control col-sm-9"
                                    type="number" name="number_home" :value="old('number_home')" required />
                                <x-input-error :messages="$errors->get('number_home')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="number_row" :value="__('رقم الطابق')" />
                                <x-text-input id="number_row" class="block mt-1 w-full form-control col-sm-9"
                                    type="number" name="number_row" :value="old('number_row')" required />
                                <x-input-error :messages="$errors->get('number_row')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="number_room" :value="__('رقم الشقة')" />
                                <x-text-input id="number_room" class="block mt-1 w-full form-control col-sm-9"
                                    type="number" name="number_room" :value="old('number_room')" required />
                                <x-input-error :messages="$errors->get('number_room')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="address" :value="__(' العنوان بالكامل ')" />
                                <x-text-input id="address" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="address" :value="old('address')" required />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <div>
                                    <x-input-label for="phone" :value="__(' رقم الهاتف')" />
                                    <x-text-input id="phone" class=" mt-1 w-full form-control col-sm-9"
                                        type="text" name="phone" :value="old('phone')" required />
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-input-label for="num_service" style="display: block" :value="__('عدد مقدمي الخدمة')" />
                                <select id="num_service" class="mt-1 w-full form-control col-sm-9 custom-select"
                                    name="num_service" required>
                                    <option value="1">عامل واحد</option>
                                    <option value="2">عاملين</option>
                                    <option value="3">3 عمال</option>
                                    <option value="4">4 عمال</option>
                                    <option value="5">5 عمال</option>
                                    <option value="6">6 عمال</option>
                                    <option value="7">7 عمال</option>
                                    <option value="8">8 عمال</option>
                                    <option value="9">9 عمال</option>
                                    <option value="10">10 عمال</option>
                                </select>
                                <x-input-error :messages="$errors->get('num_service')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="timeservice" style="display: block" :value="__('عدد الزيارات الاسبوعية ')" />
                                <select id="timeservice" class="mt-1 w-full form-control col-sm-9 custom-select"
                                    name="timeservice" required>
                                    <option value="1"> 1 زيارة اسبوعيا</option>
                                    <option value="2">2 زيارة اسبوعيا</option>
                                    <option value="3">3 زيارة اسبوعيا</option>
                                    <option value="4">4 زيارة اسبوعيا</option>
                                    <option value="5">5 زيارة اسبوعيا</option>
                                    <option value="6">6 زيارة اسبوعيا</option>

                                </select>
                                <x-input-error :messages="$errors->get('timeservice')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="num_hour" style="display: block" :value="__('عدد  الساعات ')" />
                                <select id="num_hour" class="mt-1 w-full form-control col-sm-9 custom-select"
                                    name="num_hour" required>
                                    <option value=""> اختر عدد الساعات</option>
                                    @foreach ($times as $time)
                                        <option value="{{ $time->id }}">{{ $time->time }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('timeservice')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="time_value" style="display: block" :value="__('مده التعاقد')" />
                                <select id="time_value" class="mt-1 w-full form-control col-sm-9 custom-select"
                                    name="time_value" required>
                                    <option value="اسبوع">اسبوع </option>
                                    <option value="اسبوعين">اسبوعين </option>
                                    <option value="3 اسابيع">3 اسابيع</option>
                                    <option value="4 اربع اسابيع">4 اسابيع</option>
                                    <option value="5 خمس اسابيع ">5 اسابيع </option>
                                    <option value="6 ست اسابيع ">6 اسابيع </option>
                                    <option value="7 سبع اسابيع ">7 اسابيع </option>
                                    <option value="8 ثمن اسابيع ">8 اسابيع </option>
                                    <option value="9 تسع اسابيع ">9 اسابيع </option>
                                    <option value="10 عشره اسابيع ">10 اسابيع </option>
                                    <option value="11  اسبوع ">11 اسبوع </option>
                                    <option value="3 شهور ">3 شهور </option>
                                    <option value="4 شهور ">4 شهور </option>
                                    <option value="5 شهور ">5 شهور </option>
                                    <option value="6 شهور ">6 شهور </option>
                                    <option value="7 شهور ">7 شهور </option>
                                    <option value="8 شهور ">8 شهور </option>
                                    <option value="9 شهور ">9 شهور </option>
                                    <option value="10 شهور ">10 شهور </option>
                                    <option value="11 شهر ">11 شهر </option>
                                    <option value="12 شهر ">12 شهر </option>



                                </select>
                                <x-input-error :messages="$errors->get('time_value')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="first_visit" :value="__(' تاريخ أول زيارة ')" />
                                <x-text-input id="first_visit" class="block mt-1 w-full form-control col-sm-9"
                                    type="date" name="first_visit" :value="old('first_visit')" required />
                                <x-input-error :messages="$errors->get('first_visit')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="payment_way" style="display: block" :value="__('اختر طريقة الدفع ')" />
                                <select id="payment_way" class="mt-1 w-full form-control col-sm-9 custom-select"
                                    name="payment_way" required>
                                    {{-- <option value=""> اختر طريقة الدفع</option> --}}
                                    <option value="cash"> الدفع عند استلام الخدمة(كاش)</option>
                                    <option value="bank"> عن طريق تحويل بنكي</option>
                                </select>
                                <x-input-error :messages="$errors->get('payment_way')" class="mt-2" />
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
