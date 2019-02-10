@extends('layouts.master')
@section('content')
    <form method="POST" action="{{ action('URLShortenerController@doShort')  }}" aria-label="{{ __('URL Shortener') }}">
        @csrf
        <div class="row">
            <div class="input-field">
                <input id="urlform" type="url" class="validate" name="url" value="{{ isset($url) ? $url : "" }}"
                       placeholder="https://" required autofocus>
                <label for="urlform">{{ __('URL') }}</label>
            </div>
        </div>

        <div class="row" id="bg_result">
            <div class="input-field">
                <input id="customurlform" type="text" class="validate" name="customurl"
                       placeholder="CustomURL <none: generated by system>">
                <label for="customurlform">{{ __('Custom URL') }}</label>
            </div>
        </div>

        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Short</button>
        </div>
    </form>
@endsection
@section('jsscript')
    @if(isset($error))
        <script>M.toast({html: '{{ $error }}', classes: 'red', displayLength: 10000})</script>
    @endif
@endsection