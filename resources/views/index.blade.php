@extends('layouts.app')

@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <div class="archive">
                <ul class="archive-list">
                @foreach($articles as $key => $article)
                    <li class="archive-item">
                        <article class="card">
                            <a href="{{url('single/'.$article->id)}}" class="card-link">
                                <img src="{{$article->image}}" alt="" class="card-image">
                                <div class="card-bottom">
                                    <h1 class="card-title">{{$article->title}}</h1>
                                    <time class="card-date" datetime="{{date("Y-n-d",strtotime($article->created_at))}}">
                                       {{date("d M, Y",strtotime($article->created_at))}}
                                    </time>
                                </div>
                            </a>
                        </article>
                    </li>
                @endforeach
                </ul>
            </div>
            <a href="#" class="archive-button">
                <div class="button">
                    <a href="{{url('archive')}}"><p class="button-text">More</p></a>
                </div>
            </a>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection
