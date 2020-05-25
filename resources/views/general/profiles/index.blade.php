@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="wrapper">
            <div class="container-fluid" style="margin-bottom: 11pc">
                <div class="registerBox">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Please Verify Yourself</h2>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="name">House Number</label>
                                </div>
                                <div class="col-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter House No.">

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
                                    <label for="name">Upload citizenship photo(both sides)</label>
                                </div>
                                <div class="uploader__box js-uploader__box l-center-box">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                               aria-describedby="inputGroupFileAddon01" multiple value="Select Files"   >
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-12 mb-4">
                            <div class="bhadaBnt">
                                <button type="submit" class="btn btn-bhadaBtn">Verify Now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
