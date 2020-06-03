@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
<div class="wrapper">
    <div class="container-fluid">
        <div class="registerBox">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Register</h2>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label for="name">Full Name</label>
                        </div>
                        <div class="col-8">
                            <input id="namce" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Full Name">

                            @error('name')
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
                            <label for="email">Email Address</label>
                        </div>
                        <div class="col-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email Address">

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
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="col-8">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Enter Phone Number">

                            @error('phone')
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
                            <label for="password">Password</label>
                        </div>
                        <div class="col-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                            @error('password')
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
                            <label for="password-confirm">Confrim Password</label>
                        </div>
                        <div class="col-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confrim Password">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="row">
                        <div class="col-4">
                            <label for="user_type">User Type</label>
                        </div>
                        <div class="col-8">
                            <select name="user_type" class="form-control" required>
                                <option value="" disabled="disabled" selected="true">
                                    Select User Types
                                </option>
                                <option class="owner" value="owner">
                                    Owner
                                </option>
                                <option class="guest" value="guest">
                                    Guest
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="bhadaBnt">
                        <button type="submit" class="btn btn-bhadaBtn">Register</button>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="alreadyAc">
                        <p>Already have an account ? <a href={{route("login")}}>Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
