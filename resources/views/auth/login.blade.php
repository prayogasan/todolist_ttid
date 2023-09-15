@extends('layouts.auth')

@section('content')
<div class="login-form login-signin">
    <!--begin::Form-->
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <!--begin::Title-->
        <div class="pb-13 pt-lg-0 pt-5">
            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to Metronic</h3>
            <span class="text-muted font-weight-bold font-size-h4">New Here?
                <a href="{{route('register')}}" class="text-primary font-weight-bolder">Create an
                    Account</a></span>
        </div>
        <!--begin::Title-->
        <!--begin::Form group-->
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" id="email" type="email"
                name="email" value="{{ old('email') }}" required autocomplete="email" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Form group-->
        <div class="form-group">
            <div class="d-flex justify-content-between mt-n5">
                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                    id="kt_login_forgot">Forgot Password ?</a>
            </div>
            <input
                class="form-control form-control-solid h-auto py-6 px-6 rounded-lg @error('password') is-invalid @enderror"
                id="password" type="password" name="password" rquired autocomplete="current-password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <!--end::Form group-->
        <!--begin::Action-->
        <div class="pb-lg-0 pb-5">
            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{
                __('Login') }}</button>
        </div>
        <!--end::Action-->
    </form>
    <!--end::Form-->
</div>
@endsection