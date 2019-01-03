@extends('layouts.admin.app')

@section('content')

    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <form method="POST" action="{{ route('login') }}" id="authentication" autocomplete="on" method="post">
                {!! csrf_field() !!}
                <label for="user-id" class="form-title">USER ID</label>
                    <input type="text" name="username" id="user-id" class="input input-text">
                <label for="password" class="form-title">PASSWORD</label>
                    <input type="password" id="password" name="password" class="input input-text">
                @if(count($errors) > 0)
                    <label for="password" class="form-title">Error</label>
                @endif
                <label for="submit" class="form-button">
                    <div class="button">
                        <p class="button-text">Login</p>
                    </div>
                </label>


                <input type="submit" id="submit" class="input input-submit">
            </form>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection

