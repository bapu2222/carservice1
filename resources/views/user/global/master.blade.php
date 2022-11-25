<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
@extends('user.global.header')
<link rel = "icon" href="{{asset('favicon_io/android-chrome-512x512.png')}}" type = "image/x-icon">

<body>
{{--sdfsfsdfsd--}}
@include('user.global.topbar')
{{--sdfsdfsd--}}
@yield('content')

@include('user.global.footer')

@include('user.global.script')
@yield('customJs')
</body>
</html>