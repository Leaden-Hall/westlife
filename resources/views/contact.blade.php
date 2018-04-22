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
                        <div class="map"></div>
                        <address>
                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Company Name INC.</strong>
                                    <span>40 Sibley St, Detroit</span>
                                </div>
                                <div class="col-sm-6">
                                    <a href="mailto:office@companyname.com">office@companyname.com</a> <br>
                                    <a href="tel:532930098891">(532) 930 098 891</a>
                                </div>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection