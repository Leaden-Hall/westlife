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
                        <h1 style="border-bottom: 2px solid;color:#fd5927">{{count($comments)}} Comments</h1>

                        @foreach($comments as $key => $value)
                            <div class="card mb-2 cm-card bg-dark ">
                                <div class="card-body">
                                    <h4 class="card-title text-white font-weight-bold">{{ $value->commenter }}</h4>

                                    <h6 class="card-subtitle mb-2 text-muted">{{ $value->created_at->diffForHumans() }}</h6>

                                    <p class="card-text text-light">{{ $value->content }}</p>
                                    @if(Auth::user())
                                        @if(Auth::user()->username === $value->commenter)
                                            <div class="">
                                                {{ Form::open(array('url' => '/comment/' . $value->id)) }}
                                                {{ Form::hidden('_method', 'delete') }}
                                                {{ Form::submit('Delete', array('class' => 'btn text-danger float-right px-1 cm-links', 'style'=>'margin-left: 5px;')) }}
                                                {{ Form::close() }}

                                                {{ Form::open(array('url' => '/comment/' . $value->id, 'method' => 'put')) }}
                                                {{ Form::submit('Edit', array('class' => 'btn text-primary float-right px-1 cm-links')) }}
                                                {{ Form::close() }}

                                            </div>
                                        @endif
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-5" id="commentSection">
                        <h1 style="border-bottom: 2px solid;color:#fd5927">Leave a Comment</h1>

                        @if(Auth::user())
                            @if(session('content'))
                                {{ Form::open(array('url' => '/comment/update/' . session('id'),'method' => 'put',
                                 'class' => 'contact-form', 'style'=>"margin-top: 20px")) }}
                                {{Form::textarea('content', session('content'), array('class' => 'form-row form-group form-control comment-form',
                                 'required cols'=>"85"))}}
                                {{ Form::hidden('blog', $post->id) }}
                                {{ Form::hidden('blog', $post->id) }}
                            @else
                                {{ Form::open(array('url' => '/comment', 'class' => 'contact-form', 'style'=>"margin-top: 20px")) }}
                                {{Form::textarea('content', null, array('class' => 'form-row form-group form-control comment-form', 'required cols'=>"85"))}}
                                {{ Form::hidden('blog', $post->id) }}
                            @endif

                            {{ Form::submit('Comment', array('class' => 'btn button')) }}
                            {{ Form::close() }}
                        @else
                            <p class="text-white" style="font-size:28px">Sign In to comment on this post</p>
                        @endif
                    </div>
                </div>


                @include('discography')

            </div>
        </div>
    </section>
@endsection
