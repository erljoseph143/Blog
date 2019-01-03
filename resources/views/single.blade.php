@extends('layouts.app')

@section('content')
    <div class="l-container u-clear">
        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <div class="single">
                <img src="{{asset($article->image)}}" alt="" class="single-image">
                <div class="l-container u-clear">
                    <h1 class="single-title">{{$article->title}}</h1>
                    <time class="single-date" datetime="{{date("Y-n-d",strtotime($article->created_at))}}">{{date("d M, Y",strtotime($article->created_at))}}</time>
                    <p class="single-desc">
                        {!!  nl2br(e($article->contents)) !!}
                    </p>
                    <div class="single-button">
                        <div class="button">
                            <a href="{{url('/')}}"><p class="button-text">Top</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection
