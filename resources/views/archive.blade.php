@extends('layouts.app')

@section('content')

    <nav class="nav js-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-link">TOP</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Facebook</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Twitter</a>
            </li>
        </ul>
    </nav>

    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <div class="page-number">
                Page <span >{{$articles->currentPage()}}/{{$articles->lastPage()}}</span>
            </div>
            <div class="archive">
                <ul class="archive-list">
                @foreach($articles as $key => $article)
                    <li class="archive-item">
                        <article class="card">
                            <a href="{{url('single/'.$article->id)}}" class="card-link">
                                <img src="{{asset($article->image)}}" alt="" class="card-image">
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
            {{ $articles->onEachSide(3)->links('layouts.paginate') }}
    </div>
    </main>
    <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection
