@extends('layouts.auth')

@section('title')
    Register Admin - Alchemist
@endsection

@section('content')
    <div class="page-content page-auth" id="register">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center justify-content-center row-login">
                    <div class="col-lg-4">
                        <h2 class="text-center">Register Admin</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Full name</label>
                                <input v-model="name" id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" style="border-radius: 24px"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input v-model="email" id="email" @change="checkForEmailAvailability()" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    :class="{ 'is-invalid': this.email_unavailable }" style="border-radius: 24px"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" style="border-radius: 24px"
                                    name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input id="password-confirm" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    style="border-radius: 24px" name="password_confirmation" required
                                    autocomplete="new-password">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block mt-4" style="border-radius: 24px"
                                :disabled="this.email_unavailable">Sign Up Now</button>
                            <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-2"
                                style="border-radius: 24px">Back to Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
