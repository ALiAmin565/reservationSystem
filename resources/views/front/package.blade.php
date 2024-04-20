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

    <div class="container">
        <div class="row py-lg-4 py-3">
            <div class="col-lg-12 col-md-12 pb-4">
                <div class="bg-brand fs-24 mb-4 p-1 text-center text-white">الباقات</div>
                <div class="row">
                    <div class="col-md-12 text-md-left text-center">
                        <div
                            class="align-items-center align-items-lg-center align-items-md-start big-title-with-line d-flex flex-column flex-md-row justify-content-center justify-content-md-between mt-5">
                            <span class="pr-0 pr-md-4">الباقات المميزة</span>
                            <div class="align-items-center d-flex flex-column flex-md-row">
                                <span class="bg-white fs-18 p-2" style="z-index: 2;">أو</span>
                                <a href="{{route('design-plan')}}" class="btn btn-danger btn-lg text-white"
                                    style="z-index: 2;border: 10px solid #FFF;border-radius: 3rem;display: flex;align-items: center;">
                                    <img src="Content/img/click1.png">
                                    صمم باقتك بنفسك
                                </a>
                            </div>
                        </div>
                        <div class="align-items-center d-flex flex-column flex-md-row justify-content-center mb-4">
                            <div class="mb-4 mb-md-0 periods-filter ">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item periods-filter ">
                                        <!-- Morning Period Link -->
                                        <a href="{{ route('services.index', ['period' => 'morning']) }}"
                                            class="nav-link {{ $period === 'morning' ? 'active' : '' }}">
                                            <div><img src="Content/img/filter-check.png" class="mr-1">الفترة الصباحية
                                            </div>
                                            <div class="fs-12">فترة التوصيل من 10 ص إلى 12 م</div>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <!-- Evening Period Link -->
                                        <a href="{{ route('services.index', ['period' => 'evening']) }}"
                                            class="nav-link {{ $period === 'evening' ? 'active' : '' }}">
                                            <div><img src="Content/img/filter-check.png" class="mr-1">الفترة المسائية
                                            </div>
                                            <div class="fs-12">فترة التوصيل من 7 م إلى 9 م</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--
                            <span style="width: 2px;background: #b61018;height: 30px;"
                                class="d-md-inline d-none mx-2"></span>
                                <div class="hours-filter mb-4 mb-md-0">
                                <button type="button" class="mx-2 px-3 HourFilter" value="4"
                                    onclick="GetPackagesForPackage(4)" id="Hour_4">4 ساعات</button>
                                <div>
                                </div>
                            </div>
                            -->
                        </div>
                        <div id="ResultDiv">
                            <div class="container">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div id="accordionFixed" role="tablist">
                                            @if (!empty($services))
                                                @foreach ($services as $service)
                                                    <div class="card Mshift" id="Mshift" style="display:none;">
                                                        <div class="card-header" role="tab"
                                                            id="heading_{{ Illuminate\Support\Str::slug($service->name . '-' . $service->price) }}">
                                                            <h5 class="mb-0">
                                                                <a data-toggle="collapse"
                                                                    href="#collapse_{{ Illuminate\Support\Str::slug($service->name . '-' . $service->price) }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse_{{ Illuminate\Support\Str::slug($service->name . '-' . $service->price) }}">
                                                                    <span>زيارة {{ $service->number_of_visits }} ساعات
                                                                        {{ $service->period->period }} بـ
                                                                        {{ $service->price }} ريال </span>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapse_{{ Illuminate\Support\Str::slug($service->name . '-' . $service->price) }}"
                                                            class="collapse " role="tabpanel"
                                                            aria-labelledby="heading_{{ Illuminate\Support\Str::slug($service->name . '-' . $service->price) }}"
                                                            data-parent="#accordionFixed">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="align-items-center row">
                                                                            <div
                                                                                class="border-mg-left col-md-5 mb-3 mb-md-0 pb-2 pb-md-0">
                                                                                <div class="fs-20 fs-lg-36 text-brand">
                                                                                    زيارة
                                                                                    4
                                                                                    ساعات
                                                                                    {{ $service->period->period }} بـ
                                                                                    {{ $service->price }}
                                                                                    ريال </div>

                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div
                                                                                    class="text-808080 fs-20 font-weight-normal mb-1">
                                                                                    تفاصيل الباقه :</div>
                                                                                <div class=" fs-18 mt-2 ">زيارة
                                                                                    {{ $service->time->time }} ساعات
                                                                                    للفترة
                                                                                    {{ $service->period->period }} بـ
                                                                                    {{ $service->price }} ريال
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-6 fs-14 text-808080">
                                                                                        الجنسية : أوغندا </div>
                                                                                    <div
                                                                                        class="col-6 fs-14 text-808080">
                                                                                        {{ $service->number_of_visits }}
                                                                                        زيارة اسبوعيا </div>
                                                                                    <div
                                                                                        class="col-6 fs-14 text-808080">
                                                                                        1
                                                                                        مقدمة خدمة</div>
                                                                                    <div
                                                                                        class="col-6 fs-14 text-808080">
                                                                                        {{ $service->time->time }}
                                                                                        ساعة للزيارة</div>
                                                                                    <div
                                                                                        class="col-6 fs-14 text-808080">
                                                                                        {{ $service->period->period }}
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" mt-2">
                                                                                    السعر : <span
                                                                                        class="text-danger line-through">
                                                                                        {{ $service->price }}
                                                                                        ريال
                                                                                    </span>
                                                                                </div>
                                                                                <div class=" mb-3">
                                                                                    السعر بعد الخصم : <span
                                                                                        class="">
                                                                                        {{ $service->discount }}
                                                                                        ريال
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 text-center mt-3 mt-md-0">


                                                                        <div>
                                                                            <form action="{{ route('services-user.show') }}" method="POST" style="display: inline;">
                                                                                @csrf
                                                                                <input type="hidden" name="service_id" value="{{ $service->id }}">
                                                                                <button type="submit" class="btn btn-danger btn-sm btn-block">احجز الآن</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="text-center mt-4">
                                                <a href="javascript:;" id="load1"
                                                    class="btn btn-outline-danger loadmore rounded-32">
                                                    تحميل المزيد
                                                    <img src="Content/img/more-arrow.png" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
