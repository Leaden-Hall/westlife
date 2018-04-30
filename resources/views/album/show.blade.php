@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">

            <div class="background"></div>

            <div id="album-section">
                <div class="album-info">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="album-art">
                                <img src="/images/{{$album->logo}}" alt="{{$album->title}}" class="img-fluid">

                                <div class="actions">
                                    <div style="width: 100%;"><a href="listen.html" class="play">listen</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="album-details">
                                <h1>{{$album->title}}</h1>
                                <span>
                                    <span>Released: {{$album->released->toFormattedDateString()}}</span>
                                    <span>&copy; 2018 Westlife.com</span>
						        </span>

                                <p>{{$album->summary}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="album-tracks">
                    <ol>
                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Feel Invincible</a></span>

                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Back From The Dead</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Stars</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">I Want To Live</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Undefeated</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Famous</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Lions</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Out Of Hell</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Burn It Down</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                        <li>
                            <span class="album-track-name"><a href="" class="album-track-link">Watching For Comets</a></span>
                            <div>
                                <span class="album-track-length">3:49</span>
                                <a href="" class="album-track-download"><span class="fa fa-download"></span></a>
                                <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                            </div>
                        </li>

                    </ol>
                </div>
            </div>

        </div>
    </section>
@endsection