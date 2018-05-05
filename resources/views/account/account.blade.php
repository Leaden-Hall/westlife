<style>

</style>

@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success mt-4">
            <span style="font-size: 18px">{{ session()->get('message') }}</span>
        </div>
    @endif
    <div class="row justify-content-center mt-5">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills bg-dark" >
                <a class="nav-link py-3 @if(url()->current() == 'http://westlife.com/account') selected @endif"
                   href="/account">
                    My Account</a>

                <a class="nav-link py-3 @if(strpos(url()->current(), '/account/email') != false ) selected @endif"
                   href="/account/email">
                    Email</a>

                <a class="nav-link py-3 @if(strpos(url()->current(), '/account/password') != false ) selected @endif"
                   href="/account/password">
                    Password</a>

                <a class="nav-link py-3 @if(strpos(url()->current(), '/account/blogs') != false ) selected @endif"
                   href="/account/blogs">
                    Blogs</a>

            </div>
        </div>

        <div class="col-md-9 ">
            @yield('accountAction')
        </div>



    </div>
</div>

@endsection