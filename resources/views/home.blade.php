@extends('layouts.app')

@section('content')

    <!-- carousel hero section-->
    <section class="hero">
        <div class="slider">
            <ul class="slides">
                @foreach($featureAlbums as $ftAlbum)
                <li class="lazy-bg" data-background="/images/{{$ftAlbum->cover}}">
                    <div class="container">
                        <h2 class="slide-title">{{$ftAlbum->title}}</h2>
                        <h3 class="slide-subtitle">{{$ftAlbum->released->toFormattedDateString()}}</h3>

                        <a href="/album/{{preg_replace('/\s+/', '-', $ftAlbum->title)}}" class="button cut-corner">Listen Now</a>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </section>


    <!-- quote slider-->
    <section class="fullwidth-block testimonial-section">
        <div class="container">
            <div class="quote-slider">
                <ul class="slides">
                    <li>
                        <blockquote>
                            <p>"So impossible as it may seem, you've got to fight for every dream... for whose to know
                                which one you let go, would have made your life complete"</p>
                            <cite>Our Story</cite>
                            <span>Westlife</span>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>"Day after day <br>
                                Time passed away <br>
                                And I just can’t get you off my mind"</p>
                            <cite>If I Let You Go</cite>
                            <span>Westlife</span>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>"Life is too short to hold back. I won’t live in the past being lonely.
                                Now I know, this is the time of my life. Yes I’m sure, what I want is what I’ve got…"</p>
                            <cite>What I Want Is What I’ve Got</cite>
                            <span>Westlife</span>
                        </blockquote>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- events section-->
    <section class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">
                    <a href="/tour" id="feature-tours">Feature Tours</a>
                </h2>

                <div class="event-nav">
                    <a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
                    <a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
                </div>

            </header>
            <div class="event-carousel">
                @foreach($featureTours as $featureTour)
                <div class="event" style="height: 150px;">
                    <div class="entry-date">
                        <div class="date">{{$featureTour->start->format('M')}}</div>
                        <span class="month">{{$featureTour->start->year}}</span>
                    </div>
                    <h2 class="entry-title p-1"><a href="/tour#{{ $featureTour->id  }}">{{ $featureTour->name }}</a></h2>
                    <p class="p-1">{{$featureTour->summary}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- greatest hits section -->
    <section class="fullwidth-block why-chooseus-section">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">Greatest Albums</h2>
            </header>

            <div class="row">
                @foreach($greatestAlbums as $gtAlbum)
                <div class="col-md-4">
                    <div class="feature">
                        <figure class="cut-corner">
                            <img src="images/{{$gtAlbum->logo}}" alt="{{$gtAlbum->title}}" class="img-fluid">
                        </figure>
                        <h3 class="feature-title">
                            <a href="/album/{{preg_replace('/\s+/', '-', $gtAlbum->title)}}" class="GA-links">{{$gtAlbum->title}}</a>
                        </h3>
                        <p class="GA-summary">{{$gtAlbum->summary}}</p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection

