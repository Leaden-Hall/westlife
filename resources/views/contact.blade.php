@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">
            <h2 class="page-title">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="#" class="contact-form">
                        <input type="text" placeholder="Your name..">
                        <input type="text" placeholder="Email Address..">
                        <input type="text" placeholder="Website...">
                        <textarea name="#" placeholder="Message..."></textarea>
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