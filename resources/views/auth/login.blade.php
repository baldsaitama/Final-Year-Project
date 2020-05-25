@extends('layouts.app')


@section('content')
<form method="POST" action="{{ route('login') }}">
@csrf
<div class="wrapper logBox">
    <div class="container-fluid">
        <div class="registerBox logBox">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Log In</h2>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Email Address</label>
                        </div>
                        <div class="col-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label>Password</label>
                        </div>
                        <div class="col-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="bhadaBnt">
                        <button type="submit" class="btn btn-bhadaBtn">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12 ">
                    <div class="alreadyAc">
                        <p>Don't have an account ? <a href="{{route("register")}}">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
</body>

</html>
