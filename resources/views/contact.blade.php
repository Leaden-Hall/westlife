@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">
            @if(session()->get('message') == 'contacted')
                <div class="alert alert-success" style="border-left: 5px solid #28a745;">
                    <strong>Thank you!</strong> Your message has been recorded!
                </div>
            @elseif($errors->first())
                <div class="alert alert-danger" style="border-left: 5px solid #dc3545;">
                    {{$errors->first()}}
                </div>
            @endif

            <h2 class="page-title">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="/contact/new" method="POST" class="contact-form">
                        @csrf
                        <input type="text" placeholder="Your name.." name="name" required>
                        <input type="email" placeholder="Email Address.." name="email" required>
                        <input type="url" placeholder="Website..." name="url">
                        <textarea placeholder="Message..." required name="message"></textarea>
                        <input type="submit" value="Send message">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map-wrapper">
                        <div id="ggMap"></div>
                        <script src="{{ asset('/js/ggMap.js') }}"></script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxrgQ16DvJw6OSlLilDCnG0Rd3m5lWJKY&callback=siteMap"></script>
                        <address>
                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Faculty of Information Technology</strong>
                                    <a href="mailto:westlifegithanu@gmail.com">westlifegithanu@gmail.com</a>
                                </div>
                                <div class="col-sm-6">
                                    <span>Hanoi University</span><br>
                                    <apan>Thanh Xuan Dist, Hanoi, Vietnam</apan>
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection