@extends('layouts.admin.app')

@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <a href="#" class="l-main-button">
                <div class="button">
                    <a href="{{url('admin/admin-post')}}">
                        <p class="button-text">New Article</p>
                    </a>
                </div>
            </a>
            <ul class="archive archive-admin">
                @foreach($articles as $key => $article)
                <li class="archive-item">
                    <a href="{{url('admin/editArticle/'.$article->id)}}" class="post-article">
                        <time class="post-article-date" datetime="{{date("Y-n-d",strtotime($article->created_at))}}">
                            {{date("d M, Y",strtotime($article->created_at))}}
                        </time>
                        <h1 class="post-article-title">{{$article->title}}</h1>
                    </a>
                </li>
                @endforeach

            </ul>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection
