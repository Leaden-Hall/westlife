@extends('layouts.app')

@section('content')
    <section class="fullwidth-block gallery">
        <div class="container">
            <div id="carousel" class="carousel slide mt-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/images/westlife-2.jpg') }}" alt="westlife-2">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/westlife-3.jpg') }}" alt="westlife-3">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/westlife-5.jpg') }}" alt="westlife-5">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/westlife-9.jpg') }}" alt="westlife-9">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/westlife-10.jpg') }}" alt="westlife-10">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="content fullwidth">
                <h2 class="text-center display-3" style="color: #fff;">Westlife Tours</h2>

                <table class="table table-hover table-dark table-responsive">
                    <thead>
                    <tr>
                        <th scope="col" width="50" class="text-center font-weight-bold">Year</th>
                        <th scope="col" width="250" class="text-center font-weight-bold">Title</th>
                        <th scope="col" width="250" class="text-center font-weight-bold">Duration</th>
                        <th scope="col" class="text-center font-weight-bold">Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tours as $tour)
                            <tr id="{{$tour->id}}">
                                <th scope="row">{{ $tour->start->year }}</th>
                                <td>{{ $tour->name }}</td>
                                <td>{{ $tour->start->toFormattedDateString() }}
                                    -
                                    {{ $tour->end->toFormattedDateString() }}</td>
                                <td>{{ $tour->summary }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection