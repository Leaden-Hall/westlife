@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <h2 class="entry-title">Blog</h2>

                        @foreach($blogs as $key => $value)
                        <div class="post">
                            <div class="entry-date">
                                <span class="date">{{ $value->created_at->format('M') }}</span>
                                <div class="year">{{ $value->created_at->format('Y') }}</div>
                            </div>
                            <div class="featured-image">
                                <img src="{{ $value->logo }}" alt="Sorry, there are no image available">
                            </div>
                            <h2 class="entry-title"><a href="#">{{ $value->title }}</a></h2>
                            <p>{{ $value->summary }}</p>
                            <a href="{{ URL::to('blog/' . $value->id) }}">Read more</a>
                        </div>
                        @endforeach

                    </div>
                </div>

                @include('discography')

            </div>
        </div>
    </section>
@endsection