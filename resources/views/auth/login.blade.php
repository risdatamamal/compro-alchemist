@extends('layouts.auth')

@section('title')
    Login Admin - Alchemist
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 20px;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h5 text-gray-900 mb-4">Login Admin</h1>
                                        @if ($notification = Session::get('success'))
                                            <div class="alert alert-success">
                                                <strong>"{{ $notification }}"</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="youremail@gmail.com" name="email" value="{{ old('email') }}"
                                                required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password" placeholder="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 ">
                                            <div class="text-end fw-light">
                                                <a href="{{ route('password.request') }}">Lupa Password?</a>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 rounded-pill text-center">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 mx-auto my-auto">
                                <div class="text-center">
                                    <p>Belum punya akun?</p>
                                    <a href="{{ route('register') }}"
                                        class="mt-3 btn btn-primary w-50 rounded-pill text-center">
                                        Register
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
