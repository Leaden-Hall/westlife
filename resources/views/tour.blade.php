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
                    <tr id="2000">
                        <th scope="row">2000</th>
                        <td>East Meets Westlife Tour</td>
                        <td>Unknown</td>
                        <td>The East Meets Westlife Tour was the debut tour by the band. It promoted the band's second
                            studio album, Coast to Coast. Details of the tour are scarce and unknown. The trek primarily
                            toured Asia during the summer of 2000.</td>
                    </tr>
                    <tr id="2001">
                        <th scope="row">2001</th>
                        <td>Where Dreams Come True Tour</td>
                        <td>9 February 2001 - 20 May 2001</td>
                        <td>Their second tour, Where Dreams Come True Tour, was the band's first worldwide tour. They
                            performed concerts in Europe, Asia and Africa. The tour was alternatively called the "No
                            Stool Tour" to reflect the band's reputation of performing on stools. Concert footage was
                            released on a video entitled, Where Dreams Come True. The concert was filmed in Dublin.</td>
                    </tr>
                    <tr id="2002">
                        <th scope="row">2002</th>
                        <td>World of Our Own Tour</td>
                        <td>1 April 2002 - 28 June 2002</td>
                        <td>For their third tour, the World Of Our Own Tour, the group promoted their third studio
                            album, World of Our Own. The tour only reached Europe, with a majority of the dates in
                            the United Kingdom and Ireland.</td>
                    </tr>
                    <tr id="2003">
                        <th scope="row">2003</th>
                        <td>Unbreakable Tour</td>
                        <td>13 April 2003 - 25 October 2003</td>
                        <td>The Unbreakable Tour was the band's fourth concert tour and first greatest hits tour. It
                            was commonly referred to as "The Greatest Hits Tour". It supported the compilation album,
                            Unbreakable: The Greatest Hits Volume 1. The imagery for the tour was inspired by Andy Warhol
                            and the Las Vegas revues. A DVD of the tour was released entitled, The Greatest Hit Tour:
                            Live rom M.E.N. Arena.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection