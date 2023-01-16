@extends('layouts.app')

@section('content')
    <main class="main-content">
        <!-- Start Breadcrumb -->
        <div class="breadcrumbs text-center">
            <div class="container">
                <h1>{{__('auth.login')}}</h1>
                <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" title="Home">{{__('auth.home')}}</a></li>
                    <li class="breadcrumb-item active">{{__('auth.login')}}</li>
                </ul>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Login Account -->
        <div class="login-account">
            <div class="container">
                <div class="row row-sp">
                    <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="page-title text-center">
                            <p class="subtitle mb-0">{{__('auth.subtitle-login')}}</p>
                        </div>

                        <form action="{{ route('login') }}" method="POST" class="login-form needs-validation" novalidate>
                            @csrf
                            <div class="form-group">
                                <label>{{__('auth.email')}} *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="" required />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{__('auth.password-type')}} *</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="" required />
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="remember" {{ old('remember') ? 'checked' : '' }} required />
                                    <label class="form-check-label ml-3 mb-0" for="dropdownCheck">{{__('auth.rememberme')}}</label>
                                </div>
                            </div>
                            <div class="form-group button-action clearfix text-center">
                                <div class="login-forget pull-left">
                                    <button type="submit" class="btn btn-primary">{{__('auth.signin')}}</button>
                                    @if (Route::has('password.request'))
                                        <a class="forgot-password ml-4" href="{{ route('password.request') }}">{{__('auth.forgotpassword')}}</a>
                                    @endif
                                </div>
                                <div class="account-create pull-right">
                                    <a class="btn btn-secondary" href="register">{{__('auth.createaccount')}}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Account -->
    </main>



@endsection



