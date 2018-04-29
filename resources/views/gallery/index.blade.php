@extends('layouts.app')

@section('content')
    <section class="fullwidth-block gallery">
        <div class="container">
            <div class="content fullwidth">
                <h2 class="display-3 text-white">Gallery</h2>

                <div class="filter-links filterable-nav">
                    <select class="mobile-filter">
                        <option value="*">Show all</option>
                        @foreach($galleries as $gal)
                            <option value=".{{preg_replace('/\s+/', '', $gal->name)}}">{{$gal->name}}</option>
                        @endforeach
                    </select>
                    <a href="#" class="current" data-filter="*">Show all</a>
                    @foreach($galleries as $gal)
                        <a href="/gallery/{{preg_replace('/\s+/', '-', $gal->name)}}"
                           >{{$gal->name}}</a>
                    @endforeach

                </div>
                {{--data-filter=".{{preg_replace('/\s+/', '', $gallery->name)}}"--}}
                <div class="filterable-items">

                    <div class="filterable-item concert">
                        @foreach($gallery->images as $image)
                        <a href="/images/{{preg_replace('/\s+/', '', $image->gallery->name)}}/{{$image->url}}">
                            <figure>
                                <img src="/images/{{preg_replace('/\s+/', '', $image->gallery->name)}}/{{$image->url}}"
                                     alt="{{$image->caption}}">
                            </figure>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
