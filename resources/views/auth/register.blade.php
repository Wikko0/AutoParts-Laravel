@extends('layouts.app')

@section('content')
    <main class="main-content">
        <!-- Start Breadcrumb -->
        <div class="breadcrumbs text-center">
            <div class="container">
                <h1>Create An Account</h1>
                <ul class="breadcrumb bg-transparent m-0 p-0 justify-content-center">
                    <li class="breadcrumb-item"><a href="/" title="Home">Home</a></li>
                    <li class="breadcrumb-item active">Create an Account</li>
                </ul>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Register Account -->
        <div class="create-account">
            <div class="container">
                <div class="row row-sp">
                    <div class="col-sp col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-title text-center">
                            <p class="subtitle mb-0">Creating an account will save you time at checkout and allow you to access <br/>
                                your order status and history.
                            </p>
                        </div>
                        <form action="{{ route('register') }}" method="POST" class="register-form needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>First Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="" required />
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email Address *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="" required />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Password *</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="" required />
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password Confirm *</label>
                                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="form-group button-action mt-1 mt-sm-5 clearfix text-center">
                                <button type="submit" class="account-create btn btn-secondary">Create An Acoount</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Register Account -->
    </main>
@endsection
