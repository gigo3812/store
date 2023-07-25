@extends('layouts.master')

@section('content')
    <div class="container my-5 help" data-aos="zoom-in" data-aos-duration="2000">

        <h3 class="mt-3 mb-4">راهنمای استفاده از وب سایت</h3>
        <p>این صفحه در صورت نیاز به عدم نمایش از قسمت تنظیمات غیر فعال خواهد شد</p>
        <p> به دلیل نداشتن نماد اعتماد امکان ارسال پیامک برای فرایند خرید تا تحویل مقدور نیست ولی در صورت تمایل می توان از ارسال ایمیل استفاده نمود</p>
        <p>به دلیل جلوگیری از سو استفاده و عدم ارسال بیش از حد پیامک، در هر 2 دقیقه فقط یک بار امکان ارسال پیامک وجود دارد. ضمنا 2 دقیقه باید تکمیل شود و در صورت بستن مرورگر زمان محاسبه نخواهد شد</p>
        <p>اکثر بخش ها به صورت داینامیک در نظر گرفته شده و بدون کد نویسی قابل تغییر می باشد</p>
        <p>تعداد کاربران نمایش داده شده در Footer وب سایت با 50 کاربر اضافه تر نمایش داده می شود</p>
        <p>این وب سایت دارای 3 نقش توسعه دهنده، مدیر سایت و کاربر عادی می باشد</p>
        <p>برای ورود به عنوان کاربر عادی لطفا فرایند ثبت نام را طی نمائید</p>
        <p>برای ورود با نقش مدیر می توانید از شماره همراه : <b class="copy" @click="copyToClipboard('09351629286')"> 09351629286 </b> و کلمه عبور <b class="copy" @click="copyToClipboard('123456789')"> 123456789 </b> استفاده نمائید</p>


        <div class="my-5">
            <a href="/" class="btn-warning ">برگشت به صفحه اصلی</a>
        </div>

        <div class=" box">
            <a href="https://github.com/gigo3812/store" target="_blank"> مسیر پروژه در گیت هاپ همراه با راهنمای پیاده سازی</a>
            <div>
                <h6>
                    پشتیبانی و سوال در مورد وب سایت
                </h6>
                <div class="">
                    <span>Email : codetrend.gigo@gmail.com</span>
                    <br>
                    <span> <small>(حسن عابدینی)</small> Mobile : 09157915935 </span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        body {
            background: rgb(53, 52, 52) !important;
        }

        .help {
            box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 20px;
            background: whitesmoke;
        }

        .box {
            box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 20px;
            background: whitesmoke;
            padding: 20px;
            font-size: 14px;
            line-height: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
        }

        p {
            line-height: 24px;
            text-align: justify;
        }

        .copy {
            background: gray;
            color: white;
            padding: 5px;
            margin: 0 10px;
            border-radius: 12px;
            cursor: copy;
        }
    </style>
@endsection

@section('script')
@endsection
