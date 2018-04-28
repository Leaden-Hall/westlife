@extends('layouts.app')

@section('content')
    <section class="fullwidth-block gallery">
        <div class="container">
            <div class="content fullwidth">
                <h2 class="entry-title" style="margin-top: 60px;">Gallery</h2>

                <div class="filter-links filterable-nav">
                    <select class="mobile-filter">
                        <option value="*">Show all</option>
                        <option value=".concert">Concert</option>
                        <option value=".band">Band</option>
                        <option value=".stuff">Stuff</option>
                    </select>
                    <a href="#" class="current" data-filter="*">Show all</a>
                    <a href="#" data-filter=".concert">Concert</a>
                    <a href="#" data-filter=".band">Band</a>
                    <a href="#" data-filter=".stuff">Stuff</a>
                </div>

                <div class="filterable-items">
                    <div class="filterable-item concert">
                        <a href="images/large-gallery/gallery-1.jpg"><figure><img src="images/gallery-1.jpg" alt="gallery 1"></figure></a>
                    </div>
                    <div class="filterable-item concert">
                        <a href="images/large-gallery/gallery-2.jpg"><figure><img src="images/gallery-2.jpg" alt="gallery 2"></figure></a>
                    </div>
                    <div class="filterable-item stuff">
                        <a href="images/large-gallery/gallery-3.jpg"><figure><img src="images/gallery-3.jpg" alt="gallery 3"></figure></a>
                    </div>
                    <div class="filterable-item concert">
                        <a href="images/large-gallery/gallery-4.jpg"><figure><img src="images/gallery-4.jpg" alt="gallery 4"></figure></a>
                    </div>
                    <div class="filterable-item band">
                        <a href="images/large-gallery/gallery-5.jpg"><figure><img src="images/gallery-5.jpg" alt="gallery 5"></figure></a>
                    </div>
                    <div class="filterable-item stuff">
                        <a href="images/large-gallery/gallery-6.jpg"><figure><img src="images/gallery-6.jpg" alt="gallery 6"></figure></a>
                    </div>
                    <div class="filterable-item concert">
                        <a href="images/large-gallery/gallery-7.jpg"><figure><img src="images/gallery-7.jpg" alt="gallery 7"></figure></a>
                    </div>
                    <div class="filterable-item band">
                        <a href="images/large-gallery/gallery-8.jpg"><figure><img src="images/gallery-8.jpg" alt="gallery 8"></figure></a>
                    </div>
                    <div class="filterable-item band">
                        <a href="images/large-gallery/gallery-9.jpg"><figure><img src="images/gallery-9.jpg" alt="gallery 9"></figure></a>
                    </div>
                    <div class="filterable-item stuff">
                        <a href="images/large-gallery/gallery-10.jpg"><figure><img src="images/gallery-10.jpg" alt="gallery 10"></figure></a>
                    </div>
                    <div class="filterable-item band">
                        <a href="images/large-gallery/gallery-11.jpg"><figure><img src="images/gallery-11.jpg" alt="gallery 11"></figure></a>
                    </div>
                    <div class="filterable-item stuff">
                        <a href="images/large-gallery/gallery-12.jpg"><figure><img src="images/gallery-12.jpg" alt="gallery 12"></figure></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
