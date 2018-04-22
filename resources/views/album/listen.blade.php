@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/mp3Player.css" type="text/css">
    <section class="fullwidth-block inner-content">
        <div class="container">

            <div class="background"></div>

            <div id="album-section">
                <div class="album-info">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="album-art">
                                <img src="https://target.scene7.com/is/image/Target/51223401?wid=520&amp;hei=520&amp;fmt=pjpeg" alt="album-logo" style="margin-top:30px;">
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="album-details">
                                <h1>Unleashed</h1>
                                <span>
							<span>2018</span>
							<span>&copy; 2018 Atlantic Recording Corporation</span>
						</span>

                                <p>Unleashed is the tenth album by American Christian rock band Skillet, released on August 5, 2016. The album was announced on May 20, 2016, and a lyric video was released for the track "Feel Invincible" at the same time on the band's YouTube channel. Six days later, the band released a lyric video for the track "Stars" on their YouTube channel.</p>
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
    @endsection