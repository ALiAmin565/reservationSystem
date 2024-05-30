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
            <h1 class="font-bold fs-28 text-white"><span class="d-inline-block pb-2 px-5"> تسجيل حساب جديد </span>
            </h1>
        </div>
    </div>


    <div class="container position-relative mb-4">
        <div class="row py-lg-4 py-3">

            <div class="col-lg-10 offset-lg-1">
                <div class="bg-brand fs-24 my-4 p-1 rounded-32 text-center text-white ">حساب جديد</div>
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
                            <div class="form-group row">
                                <div>
                                    <x-input-label for="name" :value="__('الاسم الاول')" />
                                    <x-text-input id="name" class="block mt-1 w-full form-control" type="text"
                                        name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="mx-5">
                                    <x-input-label for="last_name" :value="__('الاسم الاخير ')" />
                                    <x-text-input id="last_name" class="block mt-1 w-full form-control" type="text"
                                        name="last_name" :value="old('last_name')" required />
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                </div>
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
                                <x-input-label for="email" :value="__('البريد الالكتروني')" />
                                <x-text-input id="email" class="block mt-1 w-full form-control col-sm-9"
                                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('كلمة المرور')" />
                                <x-text-input id="password" class="block mt-1 w-full form-control col-sm-9"
                                    type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('اعادة كلمة المرور')" />
                                <x-text-input id="password_confirmation"
                                    class="block mt-1 w-full form-control col-sm-9" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <!-- Add City Field -->
                            <div class="mt-4">
                                <x-input-label for="city" :value="__('المدينة')" />
                                <x-text-input id="city" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="city" :value="old('city')" required />
                                <x-input-error :messages="$errors->get('city')" class="mt-2" />
                            </div>

                            <!-- Add Street Name Field -->
                            <div class="mt-4">
                                <x-input-label for="street_name" :value="__('اسم الشارع')" />
                                <x-text-input id="street_name" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="street_name" :value="old('street_name')" required />
                                <x-input-error :messages="$errors->get('street_name')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="address" :value="__(' العنوان بالكامل ')" />
                                <x-text-input id="address" class="block mt-1 w-full form-control col-sm-9"
                                    type="text" name="address" :value="old('address')" required />
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <div class="col-sm-9 offset-sm-3">
                                    <x-primary-button class="ms-4 btn bg-brand text-white btn-block">
                                        {{ __('تسجيل ') }}
                                    </x-primary-button>
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="col-sm-9 offset-sm-3">
                                    <a href="{{ route('login') }}"  style="color:#218838">لديك حساب بالفعل ؟</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
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
