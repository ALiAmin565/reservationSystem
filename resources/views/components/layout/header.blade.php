<div class="w-100 z-index1" id="top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand p-lg-0" href="https://smart.27lashabab.com/"><img
                    src="https://shining.ajeerco.com/wp-content/uploads/2023/10/cropped-logo6.png" id="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler02"
        aria-controls="navbarToggler02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

            <div class="collapse navbar-collapse" style="    display: flex;justify-content: center;font-size: xx-large;"
                id="navbarToggler02">
                <ul class=" mr-3  mt-lg-0 navbar-nav" style="display: flex;
    align-items: center;">
                     <li class='nav-item '>
                        <a class="nav-link" href="https://shining.ajeerco.com/" id="dropdown07"
                            aria-haspopup="true" aria-expanded="false">الرئيسية</a>
                       
                    </li>
                    <li class='nav-item '>
                        <a class="nav-link" href="https://shining.ajeerco.com/#about">من نحن</a>
                    </li>
                   
                    <li class='nav-item  '>
                        <a class="nav-link" href="#" id="dropdown11" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            اتصل بنا
                        </a>
                    </li>
                    @if (Auth::user())
                    <li class='nav-item '>
                        <a class="nav-link" href="{{ route('profile') }}">لوحة التحكم</a>
                    </li>
                    @endif
              
         <li  class='nav-item d-flex '>
             
            @if (Auth::user())
                <!-- Settings Dropdown -->


                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();" class="nav-link">
                        {{ __(' تسجيل خروج') }}
                    </x-dropdown-link>
                </form>
            @else
                <x-dropdown-link :href="route('login')" class="nav-link">
                    {{ __('تسجيل دخول') }}
                </x-dropdown-link>
            @endif
         </li>
  </ul>
            </div>

        </nav>
        <div class="align-items-center d-flex d-lg-none justify-content-between py-3">

            
            <div class="align-items-center  flex-column  top-apps ">

            </div>
        </div>
    </div>
</div>
<style>
    a:hover{
            color: #38b34a;
    }
    #navbarToggler02 {
    display: none;
}
#logo {
    width: 120px !important;
        margin-bottom: -1.5rem;

}
#top,#top .navbar-toggler{
        background-color: #ffffff !important;
}
#top .nav-link{
    color: #393939;
        font-size: large;

}
#top .nav-link:hover{
     color: #38b34a;
}
.navbar-light .navbar-toggler-icon{
    font-size: x-large;
    margin-top: 2rem;
}
.navbar-nav{
        margin-top: 1.5rem !important;
    margin-bottom: -2rem;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var navbarToggler = document.querySelector('.navbar-toggler');
    var navbarMenu = document.getElementById('navbarToggler02');

    // تأكد من أن القائمة مغلقة عند تحميل الصفحة
    navbarMenu.style.display = 'none';  // إعداد القائمة لتكون مخفية
    navbarToggler.setAttribute('aria-expanded', 'false'); // إعداد الزر ليعكس الحالة المغلقة

    navbarToggler.addEventListener('click', function() {
        // تبديل الخاصية display من none إلى block والعكس
        if (navbarMenu.style.display === 'block') {
            navbarMenu.style.display = 'none';
            this.setAttribute('aria-expanded', 'false');
        } else {
            navbarMenu.style.display = 'block';
            this.setAttribute('aria-expanded', 'true');
        }
    });
});

</script>