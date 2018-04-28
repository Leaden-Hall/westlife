@extends('layouts.app')

@section('content')

    <!-- carousel hero section-->
    <section class="hero">
        <div class="slider">
            <ul class="slides">
                <li class="lazy-bg" data-background="images/slide-1.jpg">
                    <div class="container">
                        <h2 class="slide-title">Header goes here</h2>
                        <h3 class="slide-subtitle">Less important text goes here</h3>
                        <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p>

                        <a href="#" class="button cut-corner">Listen Now</a>
                    </div>
                </li>

                <li class="lazy-bg" data-background="images/slide-2.jpg">
                    <div class="container">
                        <h2 class="slide-title">Header goes here</h2>
                        <h3 class="slide-subtitle">Less important text goes here</h3>
                        <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p>

                        <a href="#" class="button cut-corner">Listen Now</a>
                    </div>
                </li>

                <li class="lazy-bg" data-background="images/slide-3.jpg">
                    <div class="container">
                        <h2 class="slide-title">Header goes here</h2>
                        <h3 class="slide-subtitle">Less important text goes here</h3>
                        <p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p>

                        <a href="#" class="button cut-corner">Listen Now</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <!-- quote slider-->
    <section class="fullwidth-block testimonial-section">
        <div class="container">
            <div class="quote-slider">
                <ul class="slides">
                    <li>
                        <blockquote>
                            <p>"So impossible as it may seem, you've got to fight for every dream... for whose to know
                                which one you let go, would have made your life complete"</p>
                            <cite>Our Story</cite>
                            <span>Westlife</span>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>"Day after day <br>
                                Time passed away <br>
                                And I just can’t get you off my mind"</p>
                            <cite>If I Let You Go</cite>
                            <span>Westlife</span>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote>
                            <p>"Life is too short to hold back. I won’t live in the past being lonely.
                                Now I know, this is the time of my life. Yes I’m sure, what I want is what I’ve got…"</p>
                            <cite>What I Want Is What I’ve Got</cite>
                            <span>Westlife</span>
                        </blockquote>
                    </li>


                </ul>
            </div>
        </div>
    </section>


    <!-- events section-->
    <section class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">
                    <a href="/tour" id="feature-tours">Feature Tours</a>
                </h2>

                <div class="event-nav">
                    <a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
                    <a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
                </div>

            </header>
            <div class="event-carousel">
                <div class="event">
                    <div class="entry-date">
                        <div class="date">23</div>
                        <span class="month">Jun</span>
                    </div>
                    <h2 class="entry-title"><a href="/tour#2000">East Meets Westlife</a></h2>
                    <p>The East Meets Westlife Tour was the debut tour by the band.</p>
                </div>

                <div class="event">
                    <div class="entry-date">
                        <div class="date">9</div>
                        <span class="month">Feb</span>
                    </div>
                    <h2 class="entry-title"><a href="/tour#2001">Where Dreams Come True Tour</a></h2>
                    <p>Their second tour, Where Dreams Come True Tour, was the band's first worldwide tour.</p>
                </div>

                <div class="event">
                    <div class="entry-date">
                        <div class="date">9</div>
                        <span class="month">Feb</span>
                    </div>
                    <h2 class="entry-title"><a href="/tour#2002">World of Our Own Tour</a></h2>
                    <p>For their third tour, the World Of Our Own Tour.</p>
                </div>

                <div class="event">
                    <div class="entry-date">
                        <div class="date">23</div>
                        <span class="month">Jun</span>
                    </div>
                    <h2 class="entry-title"><a href="/tour#2003">Unbreakable Tour</a></h2>
                    <p>The Unbreakable Tour was the band's fourth concert tour and first greatest hits tour.</p>
                </div>

                <div class="event">
                    <div class="entry-date">
                        <div class="date">9</div>
                        <span class="month">Feb</span>
                    </div>
                    <h2 class="entry-title"><a href="/tour#2002">World of Our Own Tour</a></h2>
                    <p>For their third tour, the World Of Our Own Tour.</p>
                </div>

                <div class="event">
                    <div class="entry-date">
                        <div class="date">23</div>
                        <span class="month">Jun</span>
                    </div>
                    <h2 class="entry-title"><a href="/tour#2003">Unbreakable Tour</a></h2>
                    <p>The Unbreakable Tour was the band's fourth concert tour and first greatest hits tour.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- greatest hits section -->
    <section class="fullwidth-block why-chooseus-section">
        <div class="container">
            <header class="section-header">
                <h2 class="section-title">Greatest Albums</h2>
            </header>

            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <figure class="cut-corner">
                            <img src="images/Coast-To-Coast.jpg" alt="Coast To Coast" class="img-fluid">
                        </figure>
                        <h3 class="feature-title"><a href="" class="GA-links">Coast To Coast</a></h3>
                        <p class="GA-summary"><b>Coast to Coast</b> is the second studio album by Irish boy band Westlife. It was released on
                            6 November 2000 by RCA Records.In January 2005, the album was re-issued in a two-in-one box
                            set compilation with the group's third album, World of our Own. A video album, entitled
                            Coast to Coast - Up Close and Personal, was released on 27 November 2000.It peaked at number
                            one on the UK Visual Chart.</p>
                    </div> <!-- .feature -->
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <figure class="cut-corner">
                            <img src="images/Back-Home.png" alt="Back Home" class="img-fluid">
                        </figure>
                        <h3 class="feature-title"><a href="" class="GA-links">Back Home</a></h3>
                        <p class="GA-summary"><b>Back Home</b> is the eighth studio album by Irish boy band Westlife, released on 5 November
                            2007 through Syco Music, Sony Music and RCA Records. The album was produced by Steve Mac,
                            Quiz & Larossi, Per Magnusson, David Kreuger and Rami Yacoub, who also produced some of
                            the group's previous material. Back Home was the group's final album before their
                            temporary break from music in 2008.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature">
                        <figure class="cut-corner">
                            <img src="images/Greatest-Hits.jpg" alt="Greatest Hits" class="img-fluid">
                        </figure>
                        <h3 class="feature-title"><a href="" class="GA-links">Greatest Hits</a></h3>
                        <p class="GA-summary"><b>Greatest Hits</b> is the second greatest hits album and final release by Irish boy band Westlife.
                            It was released on 18 November 2011 by RCA Records and Sony Music. Greatest Hits is the
                            group's second greatest hits album following Unbreakable: The Greatest Hits Volume 1 (2002).
                            The album is the group's first album not under Syco Music and not under the tutelage of
                            Simon Cowell, having left Syco and Cowell in March 2011</p>
                    </div> <!-- .feature -->
                </div>

            </div>
        </div> <!-- .container -->
    </section>
@endsection

