<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('client.layouts.header')

<body>
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow customize-text" role="status"></div>
    </div>
        <!-- Spinner End -->


    @include('client.layouts.navbar')
    @php
        $temp = (isset($template))?$template:'client.404';
    @endphp


    @include($temp)

    @include('client.layouts.script')
</body>
