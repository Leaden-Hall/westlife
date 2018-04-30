@extends('layouts.app')

@section('content')
    <section class="fullwidth-block download">
        <div class="container">
            <h2 class="page-title display-4 mb-5">Albums</h2>
            <div class="row">

                @foreach($albums as $album)
                <div class="col-md-6 col-12">
                    <div class="item">
                        <div class="row">
                            <div class="col-4">
                                <figure>
                                    <img src="images/{{$album->logo}}" class="img-fluid" alt="{{$album->title}}">
                                </figure>
                            </div>
                            <div class="col-8">
                                <div class="mt-3">
                                    <h2 class="item-title">{{$album->title}}</h2>
                                    <h4 class="year">{{$album->released->year}}</h4>
                                    <a href="album/{{preg_replace('/\s+/', '-', $album->title)}}" class="btn button primary">Listen</a>
                                    <a href="album/download" class="btn button secondary">Download</a>
                                    <div class="social-share">
                                        <span>Share:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
