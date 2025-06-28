<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property='og:type' content='website'>
    <meta property='og:title' content='PON DESIGN'>
    <meta property='og:url' content='https://pon-design.netlify.app/'>
    <meta property='og:description'
        content='PON DESIGNは、新規サイト制作や運用、アプリ開発に強いWeb制作会社です。サイト作りはお客様の夢を叶えること。だからこそ成果を出すサイトを全力でお作りします。'>
    <meta property="og:image" content="https://pon-design.netlify.app/img/ogp.png">
    <meta name="description"
        content="PON DESIGNは、新規サイト制作や運用、アプリ開発に強いWeb制作会社です。サイト作りはお客様の夢を叶えること。だからこそ成果を出すサイトを全力でお作りします。" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js'])
    <link rel="icon" type="image/png" href="{{ asset('img/icon-192x192.png') }}">
    <link rel="apple-touch-icon" type="image/png" href="{{ asset('img/apple-touch-icon-180x180.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
</head>

<body>
    <x-header />

    @yield('content')

    <footer class="l-footer">
        <nav class="l-footer-nav">
            <ul class="l-footer-nav__list">
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('index') }}">HOME</a>
                </li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('news.index') }}">news</a>
                </li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link"
                        href="{{ route('service.index') }}">service</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link"
                        href="{{ route('works.index') }}">works</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link"
                        href="{{ route('company.index') }}">company</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link"
                        href="{{ route('recruit.index') }}">recruit</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link"
                        href="{{ route('contact.index') }}">contact</a></li>
            </ul>
        </nav>
        <div class="c-copyright">
            <a href="{{ route('index') }}" class="c-copyright__link">&copy;PON DESIGN</a>
        </div>
    </footer>

    <div class="c-page-top">
        <a href="#" class="c-page-top__link"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
    </div>

    @if (request()->routeIs('news.detail'))
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async">
        </script>
        <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
        </script>
    @endif
</body>

</html>
