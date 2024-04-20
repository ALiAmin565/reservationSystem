<div class="w-100 z-index1" id="top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand p-lg-0" href="../Home.html"><img
                    src="https://shining.ajeerco.com/wp-content/uploads/2023/10/cropped-logo6.png" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler02"
                aria-controls="navbarToggler02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="    display: flex;justify-content: center;font-size: xx-large;"
                id="navbarToggler02">
                <ul class=" mr-3 mt-2 mt-lg-0 navbar-nav">
                    <li class='nav-item '>
                        <a class="nav-link" href="../Home/VisionAndMission.html">من نحن</a>
                    </li>
                    <li class='nav-item  dropdown'>
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="dropdown07" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">خدماتنا</a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdown07">
                        </ul>
                    </li>
                    <li class='nav-item  dropdown'>
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown11" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            اتصل بنا
                        </a>
                    </li>
                    @if (Auth::user())
                    <li class='nav-item '>
                        <a class="nav-link" href="{{ route('profile') }}">لوحة التحكم</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="mx-3 top-social d-none d-lg-flex ">
                <a href="#" target="_blank"></a>
                <a href="#" target="_blank"></a>
                <a href="#" class="top-instagram" target="_blank"></a>
            </div>
            @if (Auth::user())
                <!-- Settings Dropdown -->


                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            @else
                <x-dropdown-link :href="route('login')">
                    {{ __('Log In') }}
                </x-dropdown-link>
            @endif


        </nav>
        <div class="align-items-center d-flex d-lg-none justify-content-between py-3">

            <div class=" top-social ">
                <a href="https://twitter.com/almutahidah" class="top-twitter" target="_blank"></a>
                <a href="https://www.facebook.com/almutahidahrec/" class="top-facebook" target="_blank"></a>
                <a href="https://www.instagram.com/mutahidahco/?igshid=MzRlODBiNWFlZA" class="top-instagram"
                    target="_blank"></a>
            </div>
            <div class="align-items-center  flex-column  top-apps ">

            </div>
        </div>
    </div>
</div>
