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
    <title>Webデザインニュースサイト「ウェブマガジン」に取材いただきました｜PON DESIGN</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js'])
    <link rel="icon" type="image/png" href="{{ asset('img/icon-192x192.png') }}">
    <link rel="apple-touch-icon" type="image/png" href="{{ asset('img/apple-touch-icon-180x180.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0"
        nonce="l8bnbbly"></script>

    <header class="l-header">
        <div class="l-header__logo">
            <h1 class="logo">
                <a href="{{ route('index') }}" class="logo__link"><img class="logo__img" src="{{ asset('img/logo.svg') }}" alt="PON DESIGN"></a>
            </h1>
        </div>
        <div class="l-header__nav">
            <nav class="p-global-nav">
                <ul class="p-global-nav__list">
                    <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('news.index') }}">news</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('service.index') }}">service</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('works.index') }}">works</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('company.index') }}">company</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('recruit.index') }}">recruit</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('contact.index') }}">contact</a></li>
                </ul>
            </nav>
        </div>
        <button type="button" class="c-btn-menu js-btn-menu">
            <span class="c-btn-menu__line"></span>
        </button>
    </header>

    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">news<span class="c-heading-primary__sub">お知らせ</span>
            </h2>
        </div>
    </div>

    <div class="p-breadcrumb">
        <div class="l-inner">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="p-breadcrumb__list">
                <!-- 1つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                    class="p-breadcrumb__item">
                    <a itemprop="item" href="{{ route('index') }}" class="p-breadcrumb__link">
                        <span itemprop="name">HOME</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <!-- 2つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                    class="p-breadcrumb__item">
                    <a itemprop="item" href="{{ route('news.index') }}" class="p-breadcrumb__link">
                        <span itemprop="name">news</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <!-- 3つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                    class="p-breadcrumb__item">
                    <span itemprop="item">
                        <span itemprop="name">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</span>
                    </span>
                    <meta itemprop="position" content="3" />
                </li>
            </ol>
        </div>
    </div>

    <main class="l-contents">
        <section class="article-wrapper l-section">
            <div class="article-wrapper__inner l-inner">
                <article class="article">
                    <div class="p-post">
                        <div class="p-post__head">
                            <div class="p-post__title">
                                Webデザインニュースサイト「ウェブマガジン」に取材いただきました
                            </div>
                            <div class="p-post__info">
                                <time class="p-post__date">2030.02.01</time>
                                <div class="c-label-category">お知らせ</div>
                            </div>
                        </div>
                        <div class="p-post__body">
                            <p><img src="{{ asset('img/news-article.jpg') }}" alt=""></p>
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </p>
                            <h3>
                                大見出し
                            </h3>
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </p>
                            <h4>
                                小見出し
                            </h4>
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </p>
                            <p>
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </p>
                        </div>
                        <div class="p-post__sns">
                            <div class="p-sns-share">
                                <ul class="p-sns-share__list">
                                    <li class="p-sns-share__item">
                                        <div class="fb-like" data-href="URLが入る" data-layout="button_count"
                                            data-action="like" data-size="large" data-show-faces="false"
                                            data-share="true"></div>
                                    </li>
                                    <li class="p-sns-share__item">
                                        <a href="https://twitter.com/share?url=URLが入る" class="twitter-share-button"
                                            data-size="large" data-show-count="false" data-lang="ja">ツイート</a>
                                    </li>
                                    <li class="p-sns-share__item">
                                        <a href="http://b.hatena.ne.jp/entry/URLが入る" class="hatena-bookmark-button"
                                            data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja"
                                            data-hatena-bookmark-height="28" title="このエントリーをはてなブックマークに追加"><img
                                                src="https://b.st-hatena.com/images/entry-button/button-only@2x.png"
                                                alt="このエントリーをはてなブックマークに追加" width="20" height="20"
                                                style="border: none;" /></a>
                                    </li>
                                    <li class="p-sns-share__item">
                                        <div class="line-it-button" data-lang="ja" data-type="share-c"
                                            data-url="URLが入る" style="display: none;"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-post__pager">
                            <div class="p-post-pager">
                                <div class="p-post-pager__list">
                                    <div class="p-post-pager__item p-post-pager__item--prev">
                                        <a href="{{ route('news.detail') }}" class="p-post-pager__link">Web Conference様のサイトを制作いたしました</a>
                                    </div>
                                    <div class="p-post-pager__item p-post-pager__item--next">
                                        <a class="p-post-pager__link" href="{{ route('news.detail') }}">プライバシーマーク取得のお知らせ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-post-pager__home">
                                <a href="{{ route('news.index') }}">news一覧</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="p-contact">
            <div class="l-inner">
                <div class="p-contact__heading">
                    <h2 class="c-heading-primary">
                        contact<span class="c-heading-primary__sub">お問い合わせ</span>
                    </h2>
                </div>
                <div class="p-contact__body">
                    <div class="p-contact__text">
                        <p>Webサイトの制作のご依頼やお見積りなど、<br class="u-sp-only">お気軽にご相談ください。</p>
                    </div>
                </div>
                <div class="p-contact__link">
                    <a href="{{ route('contact.index') }}" class="c-btn">more</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="l-footer">
        <nav class="l-footer-nav">
            <ul class="l-footer-nav__list">
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('index') }}">HOME</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('news.index') }}">news</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('service.index') }}">service</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('works.index') }}">works</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('company.index') }}">company</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('recruit.index') }}">recruit</a></li>
                <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('contact.index') }}">contact</a></li>
            </ul>
        </nav>
        <div class="c-copyright">
            <a href="{{ route('index') }}" class="c-copyright__link">&copy;PON DESIGN</a>
        </div>
    </footer>

    <div class="c-page-top">
        <a href="#" class="c-page-top__link"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
    </div>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async">
    </script>
    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
    </script>
</body>

</html>
