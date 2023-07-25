@extends('layouts.master')
@section('title', $data->seo_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)

@section('content')
    <div class="read">
        <div class="my-5 container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-8">
                    {{-- title and gallery --}}
                    <div data-aos="fade-up" data-aos-duration="2000">
                        {{-- main image --}}
                        <img class="img" src="{{ asset('storage/' . $data->pic) }}">

                        {{-- gallery --}}
                        <div class="images" v-viewer>
                            @foreach (json_decode($data->pics) as $index => $pic)
                                <img :key="{{ $index + 1 }}" src="{{ asset('storage/' . $pic) }}">
                            @endforeach
                        </div>
                    </div>
                    {{-- excerpt --}}
                    <div class="excerpt" data-aos="fade-up" data-aos-duration="2000">
                        <div class="title">
                            <h4>توضیحات کوتاه</h4>
                        </div>
                        {{ $data->summary }}
                    </div>
                    {{-- description --}}
                    <div class="excerpt" data-aos="fade-up" data-aos-duration="2000">
                        <div class="title">
                            <h4> معرفی محصول </h4>
                        </div>
                        {!! $data->description !!}
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="physical-product-detail">
                        {{-- En name --}}
                        <div class="physical-product-name my-4">
                            <span>{{ $data->enName }}</span>
                        </div>
                        {{-- name --}}
                        <div class="physical-product-name my-4">
                            <h4>{{ $data->name }}</h4>
                        </div>
                        {{-- price --}}
                        <div class="product-price d-flex align-items-center justify-content-between my-4 ">
                            <span>قیمت</span>
                            <div class="d-flex align-items-center">
                                @if ($data->offPrice)
                                    <span class="price-active">{{ number_format($data->offPrice) }} تومان</span>
                                    <span class="price-off">{{ number_format($data->price) }} تومان</span>
                                @else
                                    <span class="price-active">{{ number_format($data->price) }} تومان</span>
                                @endif
                            </div>
                        </div>
                        {{-- count --}}
                        <div>
                            <div class="product-number d-flex align-items-center justify-content-between my-4 ">
                                <span>تعداد</span>
                                <div class=" counter-cart d-flex justify-content-between align-items-center">
                                    <span @click="product.count++" :class="{ 'disabled': product.count >= product.max_order }">+</span>
                                    <span class="mb-1">@{{ product.count }}</span>
                                    <span style="position: relative;top: -5px" @click="product.count--" :class="{ 'disabled': product.count <= product.min_order }">_</span>
                                </div>
                            </div>
                        </div>

                        <hr />
                        <div class="brand my-3">
                            <img src="{{ asset('source/logo-very-sm.png') }}" class="img-fluid img" alt="Vector Logo Images" />
                        </div>

                        {{-- store state --}}
                        <div>
                            @if ($data->stock)
                                {{-- <div class="status-available d-flex align-items-center my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30.392" height="28.192" viewBox="0 0 30.392 28.192">
                                        <g id="Group_729" data-name="Group 729" transform="translate(3062.438 732.878)">
                                            <path id="inbox"
                                                d="M107.687,381.551a1.117,1.117,0,0,0-.2-.575c-1.546-2.082-3.11-4.167-4.678-6.231a.691.691,0,0,0-.489-.241q-1.575-.005-3.157,0l-1.729,1.683h3.952a.607.607,0,0,1,.582.237c1.143,1.546,2.3,3.081,3.455,4.62.036.047.065.1.133.212H95.9a3.5,3.5,0,0,1-1.4,2.7,3.262,3.262,0,0,1-2.211.658,3.4,3.4,0,0,1-3.189-3.351H79.425c.1-.151.169-.248.237-.342,1.1-1.471,2.2-2.934,3.3-4.412a.721.721,0,0,1,.647-.331c1.316,0,2.628,0,3.944,0L85.829,374.5q-1.575,0-3.157,0a.7.7,0,0,0-.485.241q-2.357,3.107-4.678,6.235a1.106,1.106,0,0,0-.2.615q-.016,6.095-.011,12.193c0,.773.194.964.985.964h28.5c.683,0,.9-.216.9-.892Q107.7,387.694,107.687,381.551Z"
                                                transform="translate(-3139.739 -1099.436)" fill="#39b35e" />
                                            <g id="Group_728" data-name="Group 728" transform="translate(-3053.429 -732.878)">
                                                <rect id="Rectangle_400" data-name="Rectangle 400" width="15.783" height="3.031" rx="1" transform="translate(4.162 11.16) rotate(-45)" fill="#39b35e" />
                                                <rect id="Rectangle_401" data-name="Rectangle 401" width="8.741" height="3.031" rx="1" transform="translate(6.181 13.304) rotate(-135)" fill="#39b35e" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="mx-2">موجود در
                                        انبار</span>
                                </div> --}}
                            @else
                                <div class="status-available d-flex align-items-center my-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.482" height="26.894" viewBox="0 0 31.482 26.894">
                                        <g id="Group_730" data-name="Group 730" transform="translate(4187.438 670.88)">
                                            <path id="inbox"
                                                d="M108.775,381.8a1.157,1.157,0,0,0-.2-.6c-1.6-2.156-3.222-4.317-4.846-6.454a.715.715,0,0,0-.507-.25q-1.631-.006-3.27,0l-1.791,1.743h4.093a.628.628,0,0,1,.6.246c1.184,1.6,2.384,3.192,3.579,4.786.037.048.067.1.138.22H96.563a3.63,3.63,0,0,1-1.445,2.8,3.379,3.379,0,0,1-2.291.682,3.526,3.526,0,0,1-3.3-3.471H79.5c.108-.156.175-.257.246-.354,1.14-1.523,2.283-3.039,3.415-4.57a.747.747,0,0,1,.67-.343c1.363,0,2.723,0,4.086,0L86.135,374.5q-1.631,0-3.27,0a.721.721,0,0,0-.5.25q-2.441,3.218-4.846,6.458a1.146,1.146,0,0,0-.2.637q-.017,6.313-.011,12.63c0,.8.2,1,1.021,1h29.524c.708,0,.935-.224.935-.924Q108.785,388.167,108.775,381.8Z"
                                                transform="translate(-4264.738 -1039.463)" fill="#e73c3c" />
                                            <g id="Group_727" data-name="Group 727" transform="translate(-4177.615 -670.88)">
                                                <rect id="Rectangle_398" data-name="Rectangle 398" width="14.04" height="2.697" rx="1.348" transform="translate(1.907 0) rotate(45)" fill="#e73c3c" />
                                                <rect id="Rectangle_399" data-name="Rectangle 399" width="14.04" height="2.697" rx="1.348" transform="translate(0 9.928) rotate(-45)" fill="#e73c3c" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="mx-2"> ناموجود </span>
                                </div>
                            @endif
                        </div>

                        {{-- submit pay --}}
                        <div>
                            @auth
                                @if ($data->stock)
                                    <div>
                                        <button class="btn" @click="addToCart({{ $data->id }})">افزودن به سبد
                                            خرید</button>
                                    </div>
                                @endif
                            @endauth
                            @guest
                                <a href="{{ route('voyager.login') }}">
                                    <button class="btn">ورود به سیستم</button>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- computed load data --}}
    <input type="hidden" v-model="loadProduct" id="loadProduct">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/front/read.css') }}">
@endsection

@section('script')
    <script>
        var product = {!! json_encode($data) !!};

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("loadProduct").value = product;
        });
    </script>

@endsection
