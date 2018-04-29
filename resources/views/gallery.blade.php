@extends('layouts.app')

@section('content')
    <section class="fullwidth-block gallery">
        <div class="container">
            <div class="content fullwidth">
                <h2 class="display-3 text-white">Gallery</h2>

                <div class="filter-links filterable-nav">
                    <select class="mobile-filter">
                        <option value="*">Show all</option>
                        @foreach($galleries as $gallery)
                            <option value=".{{preg_replace('/\s+/', '', $gallery->name)}}">{{$gallery->name}}</option>
                        @endforeach
                    </select>

                    <a href="#" class="current" data-filter="*">Show all</a>

                    @foreach($galleries as $gallery)
                        <a href="/gallery/{{preg_replace('/\s+/', '-', $gallery->name)}}"
                           data-filter=".{{preg_replace('/\s+/', '', $gallery->name)}}">
                            {{$gallery->name}}
                        </a>
                    @endforeach

                </div>

                <div class="filterable-items">
                    @foreach($galleries as $gallery)
                        @foreach($gallery->images as $image)
                            <div class="filterable-item {{preg_replace('/\s+/', '', $gallery->name)}}">
                                <a href="/images/{{preg_replace('/\s+/', '', $gallery->name)}}/{{$image->url}}">
                                    <figure>
                                        <img src="/images/{{preg_replace('/\s+/', '', $gallery->name)}}/{{$image->url}}"
                                             alt="{{$image->caption}}">
                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
