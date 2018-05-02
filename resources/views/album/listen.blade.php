@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('/css/mp3Player.css')}}" type="text/css">
    <section class="fullwidth-block inner-content">
        <div class="container">

            <div class="background" style="background-image: url('/images/{{$albumListen->cover}}')"></div>

            <div id="album-section">
                <div class="album-info">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="album-art">
                                <img src="/images/{{$albumListen->logo}}" alt="{{$albumListen->logo}}" style="margin-top:30px;">
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="album-details">
                                <h1>{{$albumListen->title}}</h1>
                                <span>
							<span>{{$albumListen->released->year}}</span>
							<span>&copy; 2018 Westlife.com</span>
						</span>

                                <p>{{$albumListen->summary}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div>
                <div class="column add-bottom">
                    <div id="mainwrap">
                        <div id="nowPlay">
                            <span class="left" id="npAction">Paused...</span>
                            <span class="right" id="npTitle"></span>
                        </div>
                        <div id="audiowrap" style="">
                            <div id="audio0">
                                <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                            </div>
                            <div id="tracks">
                                <a id="btnPrev">&larr;</a>
                                <a id="btnNext">&rarr;</a>
                            </div>
                        </div>
                        <hr>
                        <div id="plwrap">
                            <ul id="plList" style=""></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('/bootstrap4/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/html5media.min.js') }}"></script>
    <script src="{{ asset('/js/plyr.js') }}"></script>
    <script src="{{ asset('/js/prefixfree.min.js') }}"></script>

    @include('album.player')

    @endsection