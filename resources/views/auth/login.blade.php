<x-layout.master>

    <!-- Modal -->
    <div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-1 bg-transparent d-flex justify-content-center">
                    <div class="social-bar">
                        <nav class="nav justify-content-center">
                            <a id="facebook" class="nav-link" href="#" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a id="twitter" class="nav-link" href="#" target="_blank" title="Tweet"
                                rel="noopener noreferrer nofollow">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a id="instagram" class="nav-link" href="#" target="_blank" rel="noopener">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a id="telegram" class="nav-link" href="#" target="_blank"
                                rel="noopener noreferrer nofollow">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                            <a id="whatsapp" class=" nav-link " href="#" target="_blank">
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
            <h1 class="font-bold fs-28 text-white"><span class="d-inline-block pb-2 px-5"> تسجيل الدخول </span></h1>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container position-relative mb-4">

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="bg-brand fs-24 my-4 p-1 rounded-32 text-center text-white">دخول</div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="">

                            <p class="">
                             يرجي ادخال الايميل وكلمة المرور لتتمكن من طلب الخدمة 
                            </p>
                            <!--<ul class="fs-14 mb-4 pb-3">-->
                            <!--    <li>حسابك الشخصي و معلوماتك </li>-->
                            <!--    <li>التعاقدات الخاصة بك </li>-->
                            <!--    <li>متابعة الزيارات القادمة والسابقة </li>-->
                            <!--    <li>إدارة طلباتك </li>-->
                            <!--    <li>التواصل مع الدعم الفني</li>-->
                            <!--</ul>-->
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- <label for="inputPassword" class="col-sm-3 col-form-label">رقم الجوال</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" data-val="true"
                                            data-val-regex="رقم الجوال لابد ان يبدا ب 05 وان يكون 10 ارقام"
                                            data-val-regex-pattern="^(05)(5|0|3|6|4|9|1|8|7)([0-9]{7})$"
                                            data-val-required="&lt;i class=&quot;fas fa-times-circle mr-2&quot;>&lt;/i>&lt;span id=&quot;Address-error&quot; class=&quot;&quot;>رقم التليفون مطلوب&lt;/span>"
                                            id="UserName" name="UserName" placeholder="رقم الجوال" type="text"
                                            value="" />

                                        <div class="alert alert-danger rounded-0 font-secondary fs-12 mb-0 p-1 border-0 field-validation-valid"
                                            data-valmsg-for="UserName" data-valmsg-replace="true" role="alert"><i
                                                class="fas fa-times-circle mr-2"></i>رسالة خطأ : <span
                                                id="UserName-error" class="">رقم الجوال مطلوب</span></div>
                                    </div> --}}
                            <div>
                                <x-input-label for="email" :value="__('ادخل الايميل ')" />
                                <x-text-input id="email" class="block mt-1 w-full form-control" type="email"
                                    name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-3">
                                {{-- <label for="inputPassword" class="col-sm-3 col-form-label">كلمة المرور</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" data-val="true"
                                            data-val-required="&lt;i class=&quot;fas fa-times-circle mr-2&quot;>&lt;/i>&lt;span id=&quot;Address-error&quot; class=&quot;&quot;>كلمة المرور مطلوبة&lt;/span>"
                                            id="Password" name="Password" placeholder="كلمة المرور"
                                            type="password" />
                                        <div class="alert alert-danger rounded-0 font-secondary fs-12 mb-0 p-1 border-0 field-validation-valid"
                                            data-valmsg-for="Password" data-valmsg-replace="false" role="alert"><i
                                                class="fas fa-times-circle mr-2"></i>رسالة خطأ : <span
                                                id="Password-error" class="">كلمة المرور مطلوبة</span></div>

                                    </div> --}}
                                <x-input-label for="password" :value="__('كلمة المرور ')" />
                                <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                                    name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-9 offset-sm-3 mt-3">
                                    {{-- <button type="submit" class="btn bg-brand btn-block text-white">
                                            دخول</button> --}}
                                    <x-primary-button class="ms-3 btn bg-brand btn-block text-white">
                                        {{ __('دخول') }}
                                    </x-primary-button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3" >
                                    {{-- <a class="forgetPass" href="ForgotPassword.html">نسيت كلمة المرور</a> --}}
                                   
                                    <a class="regLink float-right text-green" style="    display: contents;" href="{{ route('register') }}">حساب جديد</a>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <!-- LOGIN example -->



    </div>


    <style>
        .validation-summary-errors ul {
            margin-bottom: 0;
        }
    </style>
    </div> <!-- inner header -->

</x-layout.master>
