@extends('layouts.auth')

@section('title')
    Register Admin - Alchemist
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 p-2" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="mb-1 text-center">
                            <h3>Buat Akun</h3>
                            Sudah punya akun? <a href="{{ route('login') }}">Login</a>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="col-2 text-center">Atau</div>
                            <div class="col-5">
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input id="name" type="text" class="form-control" placeholder="Your Name"
                                    @error('name')
                                    is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input id="email" type="email" placeholder="youremail@gmail.com"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirm Password</label>
                                <input id="password-confirm" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100 text-center rounded-pill">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
