@extends('layouts.app')

@section('content')
    <section class="fullwidth-block inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <img src="{{ $post->logo }}" class="img-fluid d-block m-auto" alt="Sorry, there are no image available">

                    <h1 style="color:#fd5927">{{ $post->title }}</h1>

                    <div style="margin-bottom: 20px;" class="float-right">
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

                    <div style="margin-top: 50px;">
                        <h1 style="border-bottom: 2px solid;color:#fd5927">Leave a Comment</h1>

                        <p style="color:white; font-size:28px">Sign In to comment on this post</p>

                        <form style="margin-top: 20px" class="contact-form">
                            <div class="form-row ">
                                <div class="form-group">
                                    <textarea type="text" class="form-control comment-form" required id="commentContent" cols="80"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="button">Comment</button>
                        </form>
                    </div>

                </div>

                @include('discography')

            </div>
        </div>
    </section>
@endsection
