@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <section class="container">

            @if(session()->has('verificationSuccess'))
                <div class="jumbotron" style="background: transparent;">
                    <h1 class="display-3 text-white">Welcome, {{session('verificationSuccess')}}</h1>
                    <p class="lead" style="font-size: 22px">Thank you for being a part of our community, hope you have a great time with us!</p>
                    <hr class="my-4" style="border-color: #9F9F9F;">
                    <p style="font-size: 18px">Let's make the first log in</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg" href="/login" role="button">Log In</a>
                    </p>
                </div>

            @else
            <div class="jumbotron" style="background: transparent;">
                <div class="container">
                    <h1 class="display-3" style="color:white;">OOps...</h1>
                    <p class="lead" style="font-size: 22px">This URL is invalid or already been used to verify email address.</p>
                </div>
            </div>
            @endif

        </section>
    </section>
@endsection