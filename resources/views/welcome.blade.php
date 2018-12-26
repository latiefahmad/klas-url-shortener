@extends('layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="row justify-content-center">
            <img class="img-logo" alt="KLAS LOGO" src="{{ asset('img/logo.png') }}" height="100%" width="auto">
        </div>
        <div class="row justify-content-center">
            <h2><b>PEMENDEK TAUTAN SEDERHANA DAN CEPAT</b></h2>
            <p style="font-size: 18px;">oleh Kelompok Linux Arek Suroboyo</p>
        </div>
        <form method="POST" action="{{ action('URLShortenerController@doShort')  }}" aria-label="{{ __('URL Shortener') }}">
            @csrf
            <div class="form-group row">
                <label for="urlform" class="col-sm-2 col-form-label text-md-right">{{ __('URL') }}</label>

                <div class="col-md-8">
                    <input id="urlform" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" placeholder="https://" required autofocus>

                    @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('url') }}</strong></span>
                    @endif
                </div>
            </div>

            <div class="form-group row" id="bg_result">
                <label for="customurlform"
                       class="col-sm-2 col-form-label text-md-right">{{ __('Custom URL') }}</label>

                <div class="col-md-8">
                    <input id="customurlform" type="text"
                           class="form-control{{ $errors->has('customurl') ? ' is-invalid' : '' }}"
                           name="customurl" placeholder="CustomURL <none: generated by system>"
                           value="{{ old('customurl') }}">

                    @if ($errors->has('customurl'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('customurl') }}</strong></span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0 justify-content-center">
                <div class="col-md-8 offset-md-6" id="bg_btn">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Short') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection