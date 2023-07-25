@extends('layouts.master')

@section('content')
    {{-- Start banner --}}
    @if ($banners->count())
        <div class="div-banner" data-aos="fade-up" data-aos-duration="1000">
            <section class="container">
                <carousel :autoplay="10000">
                    @foreach ($banners as $key => $banner)
                        <slide :key="{{ $key }}">
                            <div class="carousel__item">

                                <a href="/post/{{ $banner->slug }}">
                                    <img src="{{ asset('/storage/' . $banner->image) }}" alt="baner">
                                </a>
                                <div class="d-none d-md-block ">
                                    <h3 class="mt-4">{{ $banner->title }}</h3>
                                    <p class="body mt-2">{{ Str::limit($banner->excerpt, 400, ' . . .') }}</p>
                                </div>
                                <a href="/post/{{ $banner->slug }}" class="link">
                                    ادامه مطلب
                                </a>
                            </div>
                        </slide>
                    @endforeach
                    <template #addons>
                        <navigation></navigation>
                        <pagination></pagination>
                    </template>
                </carousel>
            </section>
        </div>
    @endif
    {{-- End banner --}}

    <!-- Start product list in 3d-caroucel -->
    @if ($products->count())
        <section class="products container" data-aos="fade-up" data-aos-duration="1000">
            <!-- slider -->
            <h5 class="title-product text-center">
                محصولات هنرستان البرز

                <span class="shine"></span>
            </h5>
            <!-- 3d-caroucel -->
            <div class="banner">
                <Carousel :items-to-show="sliderCount()" :breakpoints="breakpoints">
                    @foreach ($products as $product)
                        <slide :key="{{ $product->id }}">
                            <div class="slide-custome">
                                <!-- img -->
                                <div class="p-3 div-img">
                                    <img src="{{ asset('storage/' . $product->pic) }}" alt="" />
                                </div>
                                <!-- title & text -->
                                <div>
                                    <p class="title">{{ $product->name }}</p>
                                    <p class="body">{{ Str::limit($product->summary, 170, ' . . .') }}</p>
                                </div>
                                <a href="/product/{{ $product->slug }}" class="link">
                                    ادامه مطلب
                                </a>
                            </div>
                        </slide>
                    @endforeach

                    <template #addons>
                        <navigation />
                    </template>
                </carousel>
            </div>

            <!-- btn show all -->
            <div class="btn-show-all">
                <a class="btn" href="/products">مشاهده همه محصولات</a>
            </div>

        </section>
    @endif
    <!-- End product list in 3d-caroucel -->

    <!-- Start options fasted and free and etc card-->
    <div class="options" data-aos="fade-up" data-aos-duration="1000">
        <div class="row container content">
            <div class="col-12 col-md-4">
                <div class="option">
                    <!-- title -->
                    <h5 class="title">ایجاد اقتصاد مقاوم چرخه‌ای
                    </h5>
                    <!-- svg and text -->
                    <div class="content-option">
                        <div class="logo-option">
                            <svg id="_24-hours-svgrepo-com" data-name="24-hours-svgrepo-com" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 116.045 141.996">
                                <path fill="#ffffffad" id="Path_7" data-name="Path 7"
                                    d="M122.245,83.968A58.022,58.022,0,1,1,53.323,27.013V20.5A10.266,10.266,0,0,1,54.209,0H76.582a10.266,10.266,0,0,1,.894,20.5V27.54a57.953,57.953,0,0,1,19.4,8.515l8.917-8.917,7.18,27.513L85.461,47.479l6.238-6.24A50.824,50.824,0,1,0,115.077,83.97h7.168Zm-72.462.54c-4.882,3.432-8.229,6.4-9.982,8.913a15.136,15.136,0,0,0-2.66,9v.01H63.278V95.808H46.5l.023-.056C47.792,93.985,50.143,92,53.6,89.817q5.591-3.579,7.634-6.429a12.253,12.253,0,0,0,2.034-7.232,11.386,11.386,0,0,0-3.564-8.67,13.052,13.052,0,0,0-9.269-3.365q-6.074,0-9.528,3.652c-2.3,2.44-3.386,5.726-3.275,9.894h7.389a8.3,8.3,0,0,1,1.337-5.292,4.742,4.742,0,0,1,4.026-1.942,5.072,5.072,0,0,1,3.88,1.561,5.642,5.642,0,0,1,1.477,4.085,7.316,7.316,0,0,1-1.333,4.246A18.654,18.654,0,0,1,49.783,84.508Zm30.905,17.928V93.992H65.518V87.479L79.673,64.1h8.4V88H92.4V93.99H88.075v8.444H80.688Zm0-14.429V72.041l-9.3,15.44-.306.525h9.606ZM66.564,39H62.99v7.18h3.574Zm0,81.364H62.99v7.18h3.574Zm42.478-35.3V81.481h-7.18v3.576Zm-81.358,0V81.481H20.5v3.576Z"
                                    transform="translate(-6.2 0)" />
                            </svg>
                        </div>
                        <p>تمامی نهادهای اقتصادی با مصرف‌کنندگان محصولاتشان و تامین‌کنندگان نیازهای ورودی‌شان پیوند اقتصادی دارند. این ارتباط دو سویه، موجب ایجاد شبکه ارتباطی و وابسته بین نهادهای مختلف اقتصاد می‌شود و این باعث می‌شود که اقتصاد خود را مقاوم و تکثیر کنند.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="option">
                    <!-- title -->
                    <h5 class="title">تضمین کیفیت</h5>
                    <!-- svg and text -->
                    <div class="content-option">
                        <div class="logo-option">
                            <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 113.666 113.664">
                                <path fill="#ffffffad" id="bale-svgrepo-com"
                                    d="M54.11,113.6a57.864,57.864,0,0,1-13.971-2.434q-.788-.3-1.591-.549A56.682,56.682,0,0,1,.062,59.372C.024,58.619,0,48.526,0,31.922,0,3.363-.023,5.386.332,4.277A6.1,6.1,0,0,1,5.8.024c1.994-.161,3.315.417,7.592,3.311,2.662,1.8,5.3,3.694,8.506,6.1,1.492,1.122,1.672,1.236,1.781,1.17L25.333,9.52a57.707,57.707,0,0,1,8.051-4.476A56.421,56.421,0,0,1,46.253,1,53,53,0,0,1,55.919.048a54.944,54.944,0,0,1,14.928,1.7,56.689,56.689,0,0,1,42.5,48.791c.156,1.733.185,2.037.251,2.894.038.5.071,1.923.071,3.168a52.78,52.78,0,0,1-.8,9.775q-.124.613-.218,1.231a48.031,48.031,0,0,1-1.89,7.27,52.033,52.033,0,0,1-3.239,7.734A56.6,56.6,0,0,1,95.1,98.89,56.75,56.75,0,0,1,79.471,109.01a58.932,58.932,0,0,1-9.95,3.249,52.875,52.875,0,0,1-5.579.957,58.157,58.157,0,0,1-9.832.388ZM51.221,85.567a13.276,13.276,0,0,0,4.092-1.6c.682-.469,2.027-1.781,9.775-9.534q4.145-4.184,8.355-8.3c.08,0,7.99-7.909,7.99-8S89.2,50.331,89.3,50.331a2.548,2.548,0,0,0,.559-.5A10.965,10.965,0,0,0,93.248,42.5a11.448,11.448,0,0,0-1.028-5.664,12.086,12.086,0,0,0-4.656-4.85,9.292,9.292,0,0,0-4.206-1.279,13.148,13.148,0,0,0-4.49.355,13.125,13.125,0,0,0-4.04,2.278c-.2.166-6.057,5.991-13.015,12.944L49.165,58.931l-5.177-5.162c-2.842-2.842-5.3-5.276-5.47-5.409a11.457,11.457,0,0,0-6.337-2.415,13.293,13.293,0,0,0-5.8,1.184,13.688,13.688,0,0,0-3.121,2.491,12.308,12.308,0,0,0-1.373,1.823c-.014.142-.043.208-.308.758a10.95,10.95,0,0,0-1.061,4.31,9.544,9.544,0,0,0,.09,2.325,11.333,11.333,0,0,0,2.415,5.281c.237.3,4.594,4.7,9.68,9.775,7.137,7.128,9.377,9.33,9.823,9.657a11.743,11.743,0,0,0,5.214,2.16,11.571,11.571,0,0,0,3.476-.142Z"
                                    transform="translate(0 0)" />
                            </svg>
                        </div>

                        <p>از دیرباز هجوم عمده کالاهای وارداتی از جمله لباس به زیمباوه، سبب ایجاد تنوع کالاهای غیرمتعارف شده است. در نتیجه مصرف‌کنندگان محلی تغییر سلیقه داده اند و در کوتاه مدت به این محصولات روی آورده اند. امکان نظارت بر این واردات افراطی بسیار کار دشواری است.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="option">
                    <!-- title -->
                    <h5 class="title"> ثبات قیمت

                    </h5>
                    <!-- svg and text -->
                    <div class="content-option">
                        <div class="logo-option">
                            <svg id="percentage-percent-svgrepo-com" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 124.187 124.187">
                                <path fill="#ffffffad" id="Path_8" data-name="Path 8" d="M181.406,90.477Z" transform="translate(-59.16 -28.383)" />
                                <path fill="#ffffffad" id="Path_9" data-name="Path 9" d="M62.093,3.881A58.213,58.213,0,1,1,3.881,62.093,58.279,58.279,0,0,1,62.093,3.881m0-3.881a62.093,62.093,0,1,0,62.093,62.093A62.094,62.094,0,0,0,62.093,0Z" />
                                <path fill="#ffffffad" id="Path_10" data-name="Path 10" d="M211.768,284.663l-20.836-20.679L170.1,284.663h8.941v22.272h23.79V284.663Z" transform="translate(-128.839 -199.954)" />
                                <path fill="#ffffffad" id="Path_11" data-name="Path 11"
                                    d="M178.369,86.911c0,7.913-4.967,12.046-10.4,12.046-5.718,0-10.226-4.308-10.226-11.408,0-6.751,4.1-11.87,10.515-11.87C174.728,75.68,178.369,80.451,178.369,86.911Zm-14.1.407c0,3.957,1.327,6.809,3.871,6.809,2.486,0,3.7-2.559,3.7-6.809,0-3.84-1.04-6.809-3.755-6.809C165.484,80.51,164.273,83.535,164.273,87.319Zm4.158,27.469L189.984,75.68h4.737l-21.61,39.107Zm36.977-12.163c0,7.913-4.967,12.046-10.4,12.046-5.662,0-10.168-4.308-10.226-11.408,0-6.751,4.1-11.87,10.515-11.87C201.768,91.394,205.408,96.165,205.408,102.625Zm-14.039.407c-.058,3.957,1.269,6.809,3.813,6.809,2.486,0,3.7-2.559,3.7-6.809,0-3.84-.982-6.809-3.7-6.809C192.524,96.223,191.369,99.248,191.369,103.032Z"
                                    transform="translate(-119.483 -57.324)" />
                            </svg>

                        </div>
                        <p>
                            حجم قابل توجهی از مواد مصرفی، وسایل نقلیه و مواد اولیه وارداتی از بازار موازی، تامین مالی می‌شوند. همچنین اشاره شده است که فروشندگان چنین کالاها از مدل های قیمت گذاری مبتنی بر بازار موازی استفاده می‌کنند تا قیمت کالاها را در بازارهای محلی تنظیم کنند.

                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End options fasted and free and etc card-->

    <!-- Start posts list in 3d-caroucel -->
    @if ($posts->count())
        <section class="products container" data-aos="fade-up" data-aos-duration="2000">
            <!-- title -->
            <h5 class="title-product text-center">
                محتوای آموزشی

                <span class="shine"></span>
            </h5>
            <!-- 3d-caroucel -->
            <div class="banner">
                <Carousel :items-to-show="sliderCount()" :breakpoints="breakpoints">
                    @foreach ($posts as $post)
                        <slide :key="{{ $post->id }}">
                            <div class="slide-custome">
                                <!-- img -->
                                <div class="p-3 div-img">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" />
                                </div>
                                <!-- title & text -->
                                <div>
                                    <p class="title">{{ $post->title }}</p>
                                    <p class="body">{{ Str::limit($post->excerpt, 170, ' . . .') }}</p>
                                </div>
                                <a href="/post/{{ $post->slug }}" class="link">
                                    ادامه مطلب
                                </a>
                            </div>
                        </slide>
                    @endforeach

                    <template #addons>
                        <navigation />
                    </template>
                </carousel>
            </div>

            <!-- btn show all -->
            <div class="btn-show-all">
                <a href="/posts" class="btn">مشاهده همه مطالب</a>
            </div>

        </section>
    @endif
    <!-- End posts list in 3d-caroucel -->
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/front/index.css') }}">
@endsection
