@extends('voyager::auth.master')

@section('content')

    <div class="container" v-if="!isLoading">

        {{-- error  --}}
        @if (!$errors->isEmpty())
            <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $err)
                        @if ($err == 'These credentials do not match our records.')
                            <span class="text-danger">اطلاعات وارد شده یافت نشد</span>
                        @else
                            <li>{{ $err }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- login --}}
        <div class="login-container" v-if="typePage=='login'">
            <h6 class="my-3">ورود به وب سایت</h6>

            <div class="form-group form-group-default">
                <label for="mobile" class="control-label">شماره موبایل</label>
                <input type="tel" class="form-control" name="mobile" v-model="mobile">
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <label>رمز عبور</label>
                <div class="controls">
                    <input type="password" name="password" class="form-control" v-model="password">
                </div>
            </div>

            <div class="form-group" id="rememberMeGroup">
                <div class="controls d-flex align-items-center">
                    <input type="checkbox" name="remember" id="remember" value="1"><label for="remember" class="remember-me-text m-0 mx-2">من را به خاطر بسپر</label>
                </div>
            </div>

            <button type="button" @click="login" class="btn btn-block my-4" >
                <span class="signin">ورود به سیستم</span>
            </button>
            <div class="d-flex flex-column">
                <span class="click" @click="typePage='register'">ثبت نام در وب سایت</span>
                <span class="click" @click="typePage='forget'"> بازیابی کلمه عبور</span>
            </div>
        </div>

        {{-- login --}}
        <div class="login-container" v-if="typePage=='register'">
            <h6 class="my-3">ثبت نام در وب سایت</h6>
            <div v-if='stepRegister == 0'>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label">شماره موبایل</label>
                    <input type="tel" class="form-control" name="mobile" v-model="mobile">
                </div>
                <button type="button" class="btn btn-block my-4" @click='checkMobileUniq()'>
                    <span class="signin">تائید شماره تلفن</span>
                </button>
                <div class="d-flex flex-column">
                    <span class="click" @click="typePage='login'">ورود به وب سایت</span>
                </div>
            </div>
            {{-- name and password --}}
            <div v-if='stepRegister == 1'>
                <div class="form-group form-group-default pincode">
                    <label for="mobile" class="control-label">کد 5 رقمی ارسال شده به تلفن همراه</label>
                    <input type="text" class="form-control" v-model="pincode" @input="filterNonNumeric" maxlength="5">
                </div>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label">نام و نام خانوادگی</label>
                    <input type="text" class="form-control" v-model="name">
                </div>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label">کلمه عبور</label>
                    <input type="password" class="form-control" v-model="password">
                </div>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label">تکرار کلمه عبور</label>
                    <input type="password" class="form-control" v-model="passwordRepeat">
                </div>
                <button type="button" class="btn btn-block my-4" @click='register()'>
                    <span class="signin">تائید شماره تلفن</span>
                </button>
                <div class="d-flex flex-column">
                    <span v-if="resendTime"> @{{ resendTime }} ثانیه تا ارسال محدد کد </span>
                    <span class="click" @click="stepRegister = 0" v-if="!resendTime">ارسال مجدد کد </span>
                </div>
            </div>
        </div>

        {{-- forget --}}
        <div class="login-container" v-if="typePage=='forget'">
            <h6 class="my-3">بازیابی کلمه عبور</h6>
            <div v-if='stepRegister == 0'>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label"> شماره موبایل </label>
                    <input type="tel" class="form-control" name="mobile" v-model="mobile">
                </div>
                <button type="button" class="btn btn-block my-4" @click="checkMobileUniq('forget')">
                    <span class="signin">تائید شماره تلفن</span>
                </button>
                <div class="d-flex flex-column">
                    <span class="click" @click="typePage='register'"> ثبت نام در وب سایت</span>
                </div>
            </div>
            {{-- name and password --}}
            <div v-if='stepRegister == 1'>
                <div class="form-group form-group-default pincode">
                    <label for="mobile" class="control-label">کد 5 رقمی ارسال شده به تلفن همراه</label>
                    <input type="text" class="form-control" v-model="pincode" @input="filterNonNumeric" maxlength="5">
                </div>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label">کلمه عبور</label>
                    <input type="password" class="form-control" v-model="password">
                </div>
                <div class="form-group form-group-default">
                    <label for="mobile" class="control-label">تکرار کلمه عبور</label>
                    <input type="password" class="form-control" v-model="passwordRepeat">
                </div>
                <button type="button" class="btn btn-block my-4" @click='submitForget()'>
                    <span class="signin">تغییر کلمه عبور</span>
                </button>
                <div class="d-flex flex-column">
                    <span v-if="resendTime"> @{{ resendTime }} ثانیه تا ارسال محدد کد </span>
                    <span class="click" @click="stepRegister = 0" v-if="!resendTime">ارسال مجدد کد </span>
                </div>
            </div>
        </div>

    </div>

@endsection
