<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('client.layouts.header')

<body>

    @php
        $temp = (isset($template))?$template:'client.404';
    @endphp


    @include($temp)

    @include('client.layouts.script')
</body>
