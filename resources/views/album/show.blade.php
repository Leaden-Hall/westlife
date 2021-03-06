@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">

            <div class="background" style="background-image: url('/images/{{$album->cover}}')"></div>

            <div id="album-section">
                <div class="album-info">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="album-art">
                                <img src="/images/{{$album->logo}}" alt="{{$album->title}}" class="img-fluid">

                                <div class="actions">
                                    <div style="width: 100%;">
                                        <a href="listen/{{preg_replace('/\s+/', '-', $album->title)}}"
                                           class="play">listen</a>
                                    </div>
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
                        @if(count($album->songs) == 0)
                            <h4 class="text-center text-white">
                                We haven't update songs for this album.  Sorry for the inconvenience</h4>
                        @endif

                        @foreach($album->songs as $song)
                            <li>
                                <span class="album-track-name">
                                    <span class="album-track-link">{{$song->name}}</span>
                                </span>

                                <div>
                                    <span class="album-track-length">{{$song->length}}</span>
                                    <a href="/song/download/{{preg_replace('/\s+/', '-', $album->title)}}/{{preg_replace('/\s+/', '-', $song->name)}}"
                                       class="album-track-download"><span class="fa fa-download"></span></a>
                                    <a href="" class="album-track-share"><span class="fa fa-share"></span></a>
                                </div>
                            </li>
                        @endforeach

                    </ol>
                </div>
            </div>

        </div>
    </section>
@endsection