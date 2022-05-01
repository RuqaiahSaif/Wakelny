@extends('client.master_layout')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between flex-wrap">
            <h3 class="my-5"> تصميم شعار لموقع بيع ملابس</h3>
            <div class="card--actions hidden-xs my-5">
                <div class="dropdown btn-group">

                    <a tabindex="-1" class="wak_btn" href="#">
                        <i class="fa fa-xmark px-1"></i>
                        <span class="action-text">اغلاق المشروع </span>
                    </a>

                    <button class="dropdown-toggle wak_btn" style="border-radius: 0px" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{-- <i class="fa fa-caret-down"></i> --}}
                    </button>
                    <ul class="dropdown-menu dropdown-left dropdown-menu-left p-1 " role="menu" aria-labelledby="خيارات">
                        <li class="text-end my-2 px-2">
                            <a tabindex="-1" href="{{ route('editPosts') }}">
                                <i class="fa fa-fw fa-gear"></i>
                                <span class="action-text">تعديل المشروع</span>
                            </a>
                        </li>
                        <li class="text-end my-2 px-2">
                            <a tabindex="-1" href="https://mostaql.com/register?t=SO0TO7smnWJanTpKDpZ2jcSQnLT4WEeSPn3gAUNK">
                                <i class="fa fa-fw fa-flag"></i>
                                <span class="action-text">تبليغ عن محتوى</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <h5 class="card-header">تفاصيل المشروع</h5>

                    <div class="card-body">
                        <p class="card-text">اريد مصمم لتصميم شعار موقع بيع ملابس</p>
                    </div>

                </div>
                <div class="card mt-3">
                    <h5 class="card-header">المهارات المطلوبة</h5>

                    <div class="skills mt-3">

                        <a class="btn-tag color-gray-lighter" href="#" role="button">
                            <i class="fa-solid fa-tags"></i>
                            <span class="me-1">فوتوشوب</span>
                        </a>
                        <a class="btn-tag color-gray-lighter" href="#" role="button">
                            <i class="fa-solid fa-tags"></i>

                            <span class="me-1">تصميم</span>
                        </a>
                    </div>
                </div>
                <div class="accordion mt-3" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                العروض المقدمة
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">

                                <div class="card p-4  my-3" style="direction: rtl;">
                                    <div class="box d-flex justify-content-between flex-wrap">
                                        <div class="image d-flex flex-wrap">



                                            <img class="rounded-circle mr-4 border"
                                                style="width:60px ; height:60px ; object-fit: cover"
                                                src="{{ asset('assets/client/images/user-profile-2.png') }}" alt="">



                                            <div class="info mx-4">
                                                <h4 class="font-md">
                                                    <a href="#">داوود بسليمان</a>
                                                </h4>

                                                <div class="rate">

                                                    <i class="fa fa-star clr-amber rating-star" style="color: orange;"></i>

                                                    <i class="fa fa-star clr-amber rating-star"
                                                        style="color: gainsboro;"></i>



                                                    <span class="px-1 font-sm color-gray-dark "></span>
                                                    <i class="fa fa-fw fa-briefcase font-xs color-gray-dark"></i>

                                                    <span class="color-gray-dark px-1 font-sm">مصمم جرافيك</span>

                                                    <span class="px-1 font-sm color-gray-dark "></span>
                                                    <i class="fa fa-clock font-xs color-gray-dark"></i>

                                                    <span class="color-gray-dark px-2 font-sm">منذ 18 ساعة</span>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="card--actions hidden-xs">
                                            <div class="dropdown btn-group">

                                                <a tabindex="-1" class="wak_btn" href="#">
                                                    <i class="fa-solid fa-gear px-1"></i>
                                                    <span class="action-text">خيارات </span>
                                                </a>

                                                <button class="dropdown-toggle wak_btn" style="border-radius: 0px"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{-- <i class="fa fa-caret-down"></i> --}}
                                                </button>
                                                <ul class="dropdown-menu dropdown-left dropdown-menu-left p-1 " role="menu"
                                                    aria-labelledby="خيارات">

                                                    <li class="text-end my-2 px-2">
                                                        <a tabindex="-1"
                                                            href="https://mostaql.com/register?t=SO0TO7smnWJanTpKDpZ2jcSQnLT4WEeSPn3gAUNK">
                                                            <i class="fa fa-fw fa-flag"></i>
                                                            <span class="action-text">تبليغ عن محتوى</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around m-3 bg-lighter-gray p-3">
                                        <div>
                                            <div>المبلغ</div>
                                            <div>35.00$</div>
                                        </div>
                                        <div>
                                            <div>مدة التنفيذ</div>
                                            <div>3 أيام</div>
                                        </div>
                                        <div>
                                            <div>معرض الأعمال</div>
                                            <div>9 أعمال</div>
                                        </div>
                                        <div>
                                            <div>تقييم العرض</div>
                                            <div><i class="fa-thin fa-circle"></i></div>
                                        </div>
                                    </div>

                                    <p class="font-sm mt-3">مرحبا أخي

                                        نحن في الخدمة سوف نقدم لك شعار حسب وصفك للمشروع حيث نعرض عليك أكثر من نموذج و
                                        أنت
                                        تختار أفضل و بصيغ متعددة مفتوحة المصدر لكي تعدل عليها متى تشاء و التعديل حتى نصل
                                        إلى
                                        ما يعجبك .

                                        هدفنا هو تقديم الإضافة لهذه المنصة و مساعدة اصحاب المشاريع مثلك

                                        و في الأخير نتمنى العمل معك .</p>

                                    <div class="m-2">
                                        <a tabindex="-1" class="wak_btn mx-2" href="#">
                                            <i class="fa fa-check px-1"></i>
                                            <span class="action-text"> قبول العرض </span>
                                        </a>
                                        <a tabindex="-1" class="wak_btn green_border" href="#">
                                            <i class="fa fa-send px-1"></i>
                                            <span class="action-text"> تواصل مع المستقل </span>
                                        </a>
                                    </div>

                                </div>


                            </div>
                        </div>




                    </div>

                </div>


            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <h5 class="card-header">بطاقة المشروع</h5>

                    <div class="card-body">
                        <div class="d-flex justify-content-between ">
                            <div>
                                <div class="my-3"> حالة المشروع</div>
                                <div class="my-3"> تاريخ النشر</div>
                                <div class="y-3"> الميزانية </div>
                                <div class="my-3"> مدة التنفيذ</div>
                                <div class="my-3"> متوسط العروض </div>
                                <div class="my-3"> عدد العروض</div>
                            </div>
                            <div>
                                <div class="my-3"> <span class="px-1"
                                        style="background-color: green ; color:white;">مفتوح</span></div>
                                <div class="my-3"> منذ 17 دقيقة</div>
                                <div class="my-3"> $250.00 - $500.00</div>

                                <div class="my-3"> $500.00</div>

                                <div class="my-3"> 60 يوما</div>
                                <div class="my-3"> 2</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <p><i class="fa fa-circle-chevron-left px-2 "></i>مرحلة تلقي العروض</p>
                        <p> <i class="fa fa-circle-dot px-2 color-gray-light"></i>مرحلة التنفيذ</p>
                        <p> <i class="fa fa-circle-dot px-2 color-gray-light"></i>مرحلة التسليم </p>

                    </div>
                    <hr>
                    <div>
                        <p>صاحب المشروع</p>
                        <div class="image d-flex">



                            <img class="rounded-circle mr-4 border" style="width:60px ; height:60px ; object-fit: cover"
                                src="{{ asset('assets/client/images/user-profile-2.png') }}" alt="">



                            <div class="info mx-4">
                                <h4 class="font-md">
                                    <a href="#">داوود بسليمان</a>
                                </h4>

                                <div class="rate">
                                    <span class="px-1 font-sm color-gray-dark "></span>
                                    <i class="fa fa-fw fa-briefcase font-xs color-gray-dark"></i>
                                    <span class="color-gray-dark px-1 font-sm">مصمم جرافيك</span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="card mt-3">
                    <h5 class="card-header">شارك المشروع</h5>

                    <div class=" mt-3">
                        <form class=" m-3">
                            <input type="text">
                        </form>

                        <!-- Facebook -->
                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i
                                class="fab fa-twitter"></i></a>


                        </a>
                        <!-- Linkedin -->
                        <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>


        </div>


    </div>
@endsection
