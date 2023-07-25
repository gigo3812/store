@extends('layouts.master')

@section('content')
    <div class="container my-5 cart">

        <h3>وضعیت سفارش</h3>

        <div class="mt-5 row">
            @if (isset($code))
                <div class="col-12 box">
                    <div>
                        <p>
                            سفارش شما با کد پیگیری {{ $code }} با موفقیت ثبت شد. این سفارش به زودی برای شما ارسال خواهد شد.
                        </p>
                        <p>
                            شما می توانید با مراجعه به پنل کاربری خود وضعیت سفارش ثبت شده را بررسی نمائبد.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-success">
                            عملیات موفق
                        </h4>
                    </div>
                </div>
            @else
                <div class="col-12 box">
                    <div>
                        <p>
                            خطا در تراکنش. فرایند تکمیل خرید شما با شکست مواجه شده است.
                        </p>
                        <p>
                            در صورتی که مبلغ کسر شده از حساب شما تا 24 ساعت آینده برگشت نکرد، با پتیبانی سایت تماس بگیرید.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-danger">
                            عملیات ناموفق
                        </h4>
                    </div>
                </div>
            @endif

            <a href="/" class="btn-warning my-5">برگشت به صفحه اصلی</a>
        </div>


    </div>
@endsection

@section('css')
    <style>
        .box {
            box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
            padding: 20px;
            font-size: 14px;
            line-height: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
@endsection

@section('script')
@endsection
