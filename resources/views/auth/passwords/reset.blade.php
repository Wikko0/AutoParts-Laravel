@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
    <main class="main-content">
        <!-- Start Breadcrumb -->
        <div class="breadcrumbs text-center">
            <div class="container">
                <h1>{{__('auth.forgot-password')}}</h1>
                <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" title="Home">{{__('auth.home')}}</a></li>
                    <li class="breadcrumb-item active">{{__('auth.forgot-password')}}</li>
                </ul>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Forgot Password -->
        <div class="forgot-password">
            <div class="container">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row row-sp">
                    <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="page-title text-center">
                            <h1>{{__('auth.forgot-password')}}</h1>
                            <p class="subtitle mb-0">{{__('auth.subtitle-forgot')}}</p>
                        </div>

                        <form action="{{ route('password.update') }}" method="POST" class="pass-forgot-form needs-validation" novalidate>
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label>{{__('auth.email')}} *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="" required />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>{{__('auth.password-type')}} *</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{__('auth.password-confirm')}} *</label>
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                            <div class="forgot-password-btn mt-5 text-center">
                                <button type="submit" class="btn btn-primary btn-block">{{__('auth.passwordreset')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Forgot Password -->
    </main>
@endsection

