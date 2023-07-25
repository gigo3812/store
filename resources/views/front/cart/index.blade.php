@extends('layouts.master')

@section('content')
    <div class="container my-5 cart-page">

        <h2>سبد خرید</h2>

        <div class="mt-5 row">
            <div class="col-12  col-lg-5">
                <h6>اطلاعات تحویل گیرنده</h6>

                {{-- detail --}}
                <div class="detail">
                    {{-- name and mobile --}}
                    <div class="d-flex justify-content-around my-5">
                        <div>
                            <span>نام و نام خانوادگی :</span>
                            <span>
                                {{ Auth::user()->name }}
                            </span>
                        </div>
                        <div>

                            <span>تلفن :</span>
                            <span>{{ Auth::user()->mobile }}</span>
                        </div>
                    </div>
                </div>

                {{-- address --}}
                <div class="my-3" v-if='carts.products'>
                    <label for="">
                        آدرس :
                    </label>
                    <textarea class="form-control" type="text" v-model="carts.address"></textarea>
                </div>

                {{-- <h4 class="my-5">مبلغ قابل پرداخت @{{ numberWithCommas(amount) }}</h4> --}}

                {{-- btn action --}}
                <div class="my-4">

                    <a href="/" class="btn-warning mx-2">برگشت</a>
                    <button class="btn" @click="goToPayment()" v-if='carts.products'>رفتن به درگاه پرداخت</button>

                </div>
            </div>
            <div class="col-12 col-lg-7 cart-detail" v-if='carts.products' >

                <h6 >لیست محصولات انتخابی</h6>

                <table class="mt-4">
                    <thead>
                        <tr>
                            <th>حذف</th>
                            <th class="d-none d-md-block">تصویر</th>
                            <th>نام محصول</th>
                            <th>تعداد</th>
                            <th class="d-none d-md-block">قیمت هر واحد</th>
                            <th> مجموع </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="cart in carts.products">
                            {{-- remove btn --}}
                            <td title="حذف">

                                <svg class="remove" xmlns="http://www.w3.org/2000/svg" width="17" height="22.923" viewBox="0 0 17 22.923">
                                    <path id="ui-delete"
                                        d="M144.849,6.329c-2.233-.011-4.465,0-6.7,0-2.361,0-4.724-.016-7.085.009-1.178.011-1.458.321-1.3,1.472.623,4.541,1.274,9.077,1.918,13.613.172,1.215.472,1.472,1.7,1.474q4.755.007,9.51,0c1.362,0,1.669-.337,1.829-1.678q.777-6.539,1.623-13.069c.2-1.506,0-1.811-1.5-1.82Zm-10.4,14.17c-.77.094-1.059-.525-1.137-1.176-.374-3.138-.724-6.28-1.086-9.418-.071-.623.112-1.151.761-1.258.715-.119,1.063.39,1.148,1.025.245,1.854.458,3.713.678,5.57.151,1.281.3,2.563.442,3.844.069.674-.027,1.32-.807,1.414Zm4.6-1.185c0,.639-.268,1.219-.972,1.208-.756-.014-.963-.607-.956-1.3.016-1.547,0-3.1,0-4.644h-.016c0-1.547.007-3.1,0-4.644,0-.665.11-1.309.9-1.35s1.02.594,1.024,1.251Q139.074,14.571,139.057,19.314Zm4.971-9.322q-.567,4.707-1.18,9.407c-.083.633-.419,1.176-1.116,1.075-.75-.11-.878-.724-.784-1.412.211-1.533.381-3.071.578-4.607s.4-3.069.584-4.607c.08-.66.275-1.284,1.061-1.226s.935.717.857,1.371Zm-7.779-8.034c.385-1.923.584-2.122,1.875-1.921,2.2.344,2.253.415,1.967,2.553,1.7.3,3.394.626,5.1.894.74.117,1.4.289,1.279,1.206-.135.981-.93.846-1.595.736-3.942-.66-7.883-1.348-11.823-2.026-.857-.149-1.712-.321-2.574-.449-.692-.1-1.091-.463-.972-1.167.124-.722.676-.885,1.327-.772,1.806.309,3.61.63,5.414.947Z"
                                        transform="translate(-129.487 0.025)" opacity="0.37" />
                                </svg>
                            </td>
                            {{-- image --}}
                            <td class="d-none d-md-block">
                                <img :src="'/storage/' + cart.pic" alt="">
                            </td>
                            {{-- name --}}
                            <td>@{{ cart.name }}</td>
                            {{-- count --}}
                            <td>
                                <div class=" counter-cart d-flex justify-content-between align-items-center">
                                    <span @click="cart.pivot.count++" :class="{ 'disabled': cart.pivot.count >= cart.max_order }">+</span>
                                    <span class="mb-1">@{{ cart.pivot.count }}</span>
                                    <span style="position: relative;top: -5px" @click="cart.pivot.count--" :class="{ 'disabled': cart.pivot.count <= cart.min_order }">_</span>
                                </div>
                            </td>
                            {{-- price --}}
                            <td class="d-none d-md-block">
                                @{{ numberWithCommas(cart.offPrice ? cart.offPrice : cart.price) }} تومان
                            </td>
                            {{-- prices --}}
                            <td>
                                <span v-if="cart.offPrice">
                                    @{{ numberWithCommas(cart.pivot.count * cart.offPrice) }} تومان
                                </span>
                                <span v-else>
                                    @{{ numberWithCommas(cart.pivot.count * cart.price) }} تومان
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center" v-if='!carts.products'>
                <h6>
                    <svg xmlns="http://www.w3.org/2000/svg" width="205.341" height="203.433" viewBox="0 0 105.341 103.433">
                        <g id="Group_2" data-name="Group 2" transform="translate(-314 -320.439)">
                            <g id="Group_1" data-name="Group 1" transform="translate(360.087 321.5)">
                                <line id="Line_1" data-name="Line 1" x1="28.969" y2="28.969" fill="none" stroke="red" stroke-width="3" />
                                <line id="Line_2" data-name="Line 2" x2="28.969" y2="28.969" fill="none" stroke="red" stroke-width="3" />
                            </g>
                            <path id="cart_1_" data-name="cart (1)"
                                d="M162.39,152.825l-76.021-.012-3.19-10.965a4.955,4.955,0,0,0-3.43-3.37l-11.158-3.009A5.18,5.18,0,0,0,67.3,135.3a4.919,4.919,0,0,0-1.288,9.665l8.486,2.3,17.224,62.143a7.269,7.269,0,1,0,10.5,6.512,2.037,2.037,0,0,0-.012-.277h35.073c0,.1-.012.193-.012.277a7.27,7.27,0,1,0,8.161-7.21c-8.714-1.408-44.293-3.129-44.293-3.129l-1.168-4.574H144.36a5.131,5.131,0,0,0,4.911-3.707l9.6-33.822H162.4a5.326,5.326,0,1,0-.012-10.652Zm-56.534,36.843H97.539c-.229,0-.566.048-.71-.481-.193-.674-.469-1.613-.469-1.613L89.836,164.6a.349.349,0,0,1,.06-.325.365.365,0,0,1,.3-.144h10.11a.363.363,0,0,1,.361.289l5.513,24.7.024.072a.333.333,0,0,1,.012.108A.357.357,0,0,1,105.856,189.667Zm21.232-25.1L122.6,189.379a.373.373,0,0,1-.361.289h-6.271a.363.363,0,0,1-.361-.289l-4.489-24.794a.365.365,0,0,1,.072-.313.4.4,0,0,1,.289-.144h15.262a.343.343,0,0,1,.289.144.366.366,0,0,1,.06.3Zm21.268.024-7.041,24.795a.387.387,0,0,1-.361.277h-8.606a.359.359,0,0,1-.289-.144.365.365,0,0,1-.072-.313l5.537-24.795a.373.373,0,0,1,.361-.289h10.11a.4.4,0,0,1,.3.144A.434.434,0,0,1,148.356,164.6Z"
                                transform="translate(251.607 200.684)" />
                        </g>
                    </svg>

                </h6>
            </div>

        </div>
    </div>

    {{-- computed load data --}}
    <input type="hidden" v-model="loadCarts" id="loadCarts">
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/front/cart.css') }}">
@endsection

@section('script')
    <script>
        var carts = {!! json_encode($cart) !!};

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("loadCarts").value = carts;
        });
    </script>
@endsection
