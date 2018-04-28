@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <h2 class="entry-title">Blog</h2>

                        <div class="post">
                            <div class="entry-date">
                                <div class="date">23</div>
                                <span class="month">Jun</span>
                            </div>
                            <div class="featured-image">
                                <img src="dummy/featured-image-1.jpg" alt="">
                            </div>
                            <h2 class="entry-title"><a href="post.html">Sed et persipiatis unde omnis iste natus</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
                            <a href="post.html">Read more</a>
                        </div>

                        <div class="post">
                            <div class="entry-date">
                                <div class="date">23</div>
                                <span class="month">Jun</span>
                            </div>
                            <div class="featured-image">
                                <img src="dummy/featured-image-2.jpg" alt="">
                            </div>
                            <h2 class="entry-title"><a href="post.html">Consectetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
                            <a href="post.html">Read more</a>
                        </div>

                        <div class="post">
                            <div class="entry-date">
                                <div class="date">23</div>
                                <span class="month">Jun</span>
                            </div>
                            <div class="featured-image">
                                <img src="dummy/featured-image-3.jpg" alt="">
                            </div>
                            <h2 class="entry-title"><a href="post.html">Adipisci voluptates molestiae iusto</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
                            <a href="post.html">Read more</a>
                        </div>

                        <div class="post">
                            <div class="entry-date">
                                <div class="date">23</div>
                                <span class="month">Jun</span>
                            </div>
                            <div class="featured-image">
                                <img src="dummy/featured-image-4.jpg" alt="">
                            </div>
                            <h2 class="entry-title"><a href="post.html">Obcaecati officia quo dicta</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
                            <a href="post.html">Read more</a>
                        </div>

                        <div class="post">
                            <div class="entry-date">
                                <div class="date">23</div>
                                <span class="month">Jun</span>
                            </div>
                            <div class="featured-image">
                                <img src="dummy/featured-image-5.jpg" alt="">
                            </div>
                            <h2 class="entry-title"><a href="post.html">Nesciunt eligendi asperiores</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
                            <a href="post.html">Read more</a>
                        </div>
                    </div>
                </div>

                @include('discography')

            </div>
        </div>
    </section>
@endsection