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
    <title>NEWS - お知らせ｜PON DESIGN</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js'])
    <link rel="icon" type="image/png" href="{{ asset('img/icon-192x192.png') }}">
    <link rel="apple-touch-icon" type="image/png" href="{{ asset('img/apple-touch-icon-180x180.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
</head>

<body>
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
                    <span itemprop="item">
                        <span itemprop="name">news</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    <main class="l-contents">
        <section class="p-news-list-wrapper l-section">
            <div class="p-news-list-wrapper__inner l-inner">
                <div class="p-news-list-wrapper__body">
                    <div class="p-news-list">
                        <ul class="p-news-list__list">
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.02.01</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.25</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">制作実績</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}" class="p-news-list__link">Smoothiesta様のWebサイトを制作いたしました</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.20</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">採用</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}" class="p-news-list__link">Webデザイナーを１名募集中です！</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.15</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">（２行のテキストの場合）テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                            <li class="p-news-list__item">
                                <div class="p-news-list__heading">
                                    <time datetime="2020-02-01" class="p-news-list__date">2030.01.14</time>
                                    <div class="p-news-list__label">
                                        <span class="c-label-category">お知らせ</span>
                                    </div>
                                </div>
                                <div class="p-news-list__body">
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="p-news-list-wrapper__pagination">
                    <div class="p-pagination">
                        <span class="p-pagination__page pagination__current">1</span>
                        <a href="#" class="p-pagination__page pagination__link">2</a>
                        <a href="#" class="p-pagination__page pagination__link">3</a>
                    </div>
                </div>
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
</body>

</html>
