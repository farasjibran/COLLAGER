@extends('layouts.app')

@section('content')
<div class="bungkussemua">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  bungkus">

            <div class="card  formlogin">
                
                <div class="card-body  bungkus1">
                <br>
                <h2 align="center" style="margin-bottom: 20px;">Login</h2>
                <hr class="garis1">
                <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- input email -->
                        <div class="form-group row  inputemail">
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- input password -->
                        <div class="form-group row  inputpassword">
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8  bungkusbtn">
                                <button type="submit" class="btn btn-primary  inibtn">
                                {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link  forgetpas" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="register">
                @if (Route::has('register'))
                Tidak Punya Akun? 
                <a class="btn btn-link  linkregis" href="{{ route('register') }}">{{ __('Daftar Sekarang')}}</a>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection
