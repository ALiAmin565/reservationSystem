
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
                            <a href="../../Account/Login0393.html" class="btn btn-danger btn-lg text-white"
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
                                    <a class="nav-link {{ $selectedPeriod === 'morning' ? 'active' : '' }}" id="home-tab" data-shift="false" data-toggle="tab"
                                        href="#home" role="tab" aria-controls="home" aria-selected="true"
                                        onclick="@this.call('loadServices', 'morning')">
                                        <div><img src="Content/img/filter-check.png" class="mr-1">الفترة الصباحية
                                        </div>
                                        <div class="fs-12">فترة التوصيل من 10 ص إلى 12 م</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $selectedPeriod === 'evening' ? 'active' : '' }}" id="profile-tab" data-shift="true" data-toggle="tab"
                                        href="#profile" role="tab" aria-controls="profile" aria-selected="false"
                                        onclick="@this.call('loadServices', 'evening')">
                                        <div><img src="Content/img/filter-check.png" class="mr-1">الفترة المسائية
                                        </div>
                                        <div class="fs-12">فترة التوصيل من 7 م إلى 9 م</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <span style="width: 2px;background: #b61018;height: 30px;"
                            class="d-md-inline d-none mx-2"></span>
                        <div class="hours-filter mb-4 mb-md-0">
                            <button type="button" class="mx-2 px-3 HourFilter" value="4"
                                onclick="GetPackagesForPackage(4)" id="Hour_4">4 ساعات</button>
                            <div>
                            </div>
                        </div>
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
                                                                    {{ $service->period->period }} بـ {{ $service->price }} ريال </span>
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
                                                                            <div class="fs-20 fs-lg-36 text-brand">زيارة
                                                                                4
                                                                                ساعات {{ $service->period->period }} بـ {{ $service->price }}
                                                                                ريال </div>

                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <div
                                                                                class="text-808080 fs-20 font-weight-normal mb-1">
                                                                                تفاصيل الباقه :</div>
                                                                            <div class=" fs-18 mt-2 ">زيارة
                                                                                {{ $service->time->time }} ساعات
                                                                                للفترة
                                                                                {{ $service->period->period }} بـ {{ $service->price }} ريال
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-6 fs-14 text-808080">
                                                                                    الجنسية : أوغندا </div>
                                                                                <div class="col-6 fs-14 text-808080">
                                                                                    {{ $service->number_of_visits }}
                                                                                    زيارة اسبوعيا </div>
                                                                                <div class="col-6 fs-14 text-808080"> 1
                                                                                    مقدمة خدمة</div>
                                                                                <div class="col-6 fs-14 text-808080">
                                                                                    {{ $service->time->time }}
                                                                                    ساعة للزيارة</div>
                                                                                <div class="col-6 fs-14 text-808080">
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
                                                                                السعر بعد الخصم : <span class="">
                                                                                    {{ $service->discount }}
                                                                                    ريال
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 text-center mt-3 mt-md-0">


                                                                    <div>
                                                                        <a href="../../Account/Login5f49.html"
                                                                            class="btn btn-block btn-danger btn-sm">
                                                                            احجز
                                                                            الآن</a>
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
