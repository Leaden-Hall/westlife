@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <img src="/images/{{ $post->logo }}" class="img-fluid d-block m-auto" alt="Sorry, there are no image available">

                    <h1 style="color:#fd5927" class="my-4">{{ $post->title }}</h1>

                    <div class="float-right mb-4">
					<span>
						<i class="fa fa-calendar" aria-hidden="true"></i> {{ $post->created_at->format('d/M/Y') }}
					</span>
                        <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <span>
						<i class="fa fa-pencil" aria-hidden="true"></i> {{ $post->published_by }}
					</span>
                    </div>

                    <div class="clearfix"></div>
                    <div>
                        <p style="text-align: justify;">
                            {{ $post->content }}
                        </p>
                    </div>

                    <div class="mt-5">
                        <h1 style="border-bottom: 2px solid;color:#fd5927">Leave a Comment</h1>

                        <p style="color:white; font-size:28px">Sign In to comment on this post</p>

                        <div class="card mb-2 cm-card bg-dark ">
                            <div class="card-body">
                                <h4 class="card-title text-white font-weight-bold">Dinh</h4>

                                <h6 class="card-subtitle mb-2 text-muted">3 hours ago</h6>

                                <p class="card-text text-light">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <div class="">
                                    <a href="#" class="text-danger float-right px-1 cm-links">Delete</a>
                                    <a href="#" class="text-warning float-right px-1 cm-links">Edit</a>
                                </div>

                            </div>
                        </div>

                        <div class="card mb-2 cm-card bg-dark ">
                            <div class="card-body">
                                <h4 class="card-title text-white font-weight-bold">Thanh</h4>

                                <h6 class="card-subtitle mb-2 text-muted">4 hours ago</h6>

                                <p class="card-text text-light">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>

                        <form style="margin-top: 20px" class="contact-form">
                            <div class="form-row ">
                                <div class="form-group">
                                    <textarea type="text" class="form-control comment-form" required cols="85"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn button">Comment</button>
                        </form>



                    </div>

                </div>

                @include('discography')

            </div>
        </div>
    </section>
@endsection
