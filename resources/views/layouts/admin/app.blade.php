<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="description" content="sample text,sample tex">
    <meta name="keywords" content="word1,word2,word3">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">
    <meta property="og:description" content="sample text,sample tex">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="blog">
    <meta property="fb:admins" content="">
    <meta property="og:image" content="{{asset('assets/images/common/ogp.png')}}">

    <meta name="apple-mobile-web-app-title" content="">

    <link rel="shortcut icon" href="{{asset('assets/images/common/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/common/apple-touch-icon-precomposed.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <script src="{{asset('assets/lib/modernizr.js')}}"></script>

</head>
<body id="js-body">
<div id="fb-root"></div>

<noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
<div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

<input type="hidden" value="./" id="js-base-url">

    <div class="l-wrap js-wrap">
    <!--start header-->
    <header class="l-header l-header-admin js-header">
        <div class="l-header-top u-clear">

            <div class="l-header-logo">

                <a class="logo " href="{{url('/')}}">
                    <img src="{{asset('assets/images/logo-admin.png')}}" width="138" height="28" alt="BLOG"/>
                </a>

            </div>
            <div class="l-header-text">
                <p>ADMIN PAGE</p>
            </div>

        </div>
    </header>
    <!--end header-->

        @yield('content')


        <!--footer ここから-->
        <footer class="l-footer l-footer-admin">
            <div class="l-footer-button">
                <a class="page-top js-scroll" href="#js-body">
                    <span class="page-top-arrow"></span>
                </a>
            </div>
            <div class="l-footer-copyright">
                <small class="copyright">&copy;copyright</small>
            </div>

        </footer>
        <!--footer ここまで-->
    </div>

<!--javascript ここから-->
<script src="{{asset('assets/lib/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<!--javascript ここまで-->
</body>
</html>
