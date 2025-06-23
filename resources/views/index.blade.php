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
    <title>PON DESIGN</title>
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

    <div class="p-hero">
        <div class="p-hero__inner">
            <div class="p-hero__heading">
                <div class="p-hero__title">
                    WEB DESIGN SPECIALIST
                </div>
                <div class="p-hero__subtitle">
                    お客様の夢を叶える<br class="u-sp-only">Webサイトを制作
                </div>
            </div>
            <div class="p-hero__link">
                <a href="{{ route('contact.index') }}" class="c-btn c-btn--transparent">contact</a>
            </div>
        </div>
        <span class="p-hero__scroll">SCROLL</span>
    </div>

    <main class="l-contents">
        <section class="p-news l-section">
            <div class="p-news__inner l-inner">
                <div class="p-news__heading">
                    <h2 class="c-heading-primary">news<span class="c-heading-primary__sub">お知らせ</span>
                    </h2>
                </div>
                <div class="p-news__body">
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
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-service l-section">
            <div class="p-service__inner l-inner">
                <div class="p-service__heading">
                    <h2 class="c-heading-primary">service<span class="c-heading-primary__sub">事業内容</span>
                    </h2>
                </div>
                <div class="p-service__body">
                    <div class="c-card-wrapper c-card-wrapper--col3">
                        <div class="c-card">
                            <div class="c-card__img-wrapper">
                                <img class="c-card__img" src="{{ asset('img/service01.jpg') }}" alt="">
                            </div>
                            <div class="c-card__body">
                                <div class="c-card__title">Webサイト制作</div>
                                <div class="c-card__text">
                                    <p>新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
                                </div>
                            </div>
                        </div>
                        <div class="c-card">
                            <div class="c-card__img-wrapper">
                                <img class="c-card__img" src="{{ asset('img/service02.jpg') }}" alt="">
                            </div>
                            <div class="c-card__body">
                                <div class="c-card__title">Webサイト運用</div>
                                <div class="c-card__text">
                                    <p>サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
                                </div>
                            </div>
                        </div>
                        <div class="c-card">
                            <div class="c-card__img-wrapper">
                                <img class="c-card__img" src="{{ asset('img/service03.jpg') }}" alt="">
                            </div>
                            <div class="c-card__body">
                                <div class="c-card__title">アプリ開発</div>
                                <div class="c-card__text">
                                    <p>スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-service__link">
                    <a href="{{ route('service.index') }}" class="c-btn">more</a>
                </div>
            </div>
        </section>

        <section class="p-works l-section">
            <div class="p-works__inner l-inner">
                <div class="p-works__img-wrapper">
                    <div class="swiper-container js-swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('img/works/smoothiesta.jpg') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('img/works/web-conference.jpg') }}" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('img/works/lamina.jpg') }}" alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="p-works__desc">
                    <div class="p-works__heading">
                        <h2 class="c-heading-primary">works<span class="c-heading-primary__sub">制作実績</span>
                        </h2>
                    </div>
                    <div class="p-works__body">
                        <div class="p-works__text">
                            <p>様々なジャンルのWebサイト制作が可能です。<br>
                                ご購入やお申込み数の増加などを実現します！</p>
                        </div>
                    </div>
                    <div class="p-works__link">
                        <a href="{{ route('works.index') }}" class="c-btn">more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-company l-section">
            <div class="p-company__inner l-inner">
                <div class="p-company__heading">
                    <h2 class="c-heading-primary">company<span class="c-heading-primary__sub">私たちについて</span>
                    </h2>
                </div>
                <div class="p-company__body">
                    <div class="p-message">
                        <div class="p-message__heading">
                            <span class="p-message__underline">サイトのゴール = <br class="u-sp-only">夢を叶えること</span>
                        </div>
                        <div class="p-message__text">
                            <p>お客様の夢を叶えること。<br>
                                それがWebサイトのゴールであり、<br class="u-sp-only">私たちが目指すことです。<br>
                                だからこそちゃんと成果を出すサイトを<br class="u-sp-only">全力でお作りします。<br>
                                お客様の笑顔を見たい。<br>
                                夢を実現する手助けをさせてください。</p>
                        </div>
                    </div>
                </div>
                <div class="p-company__link">
                    <a href="{{ route('company.index') }}" class="c-btn">more</a>
                </div>
            </div>
        </section>

        <section class="p-recruit l-section">
            <div class="p-recruit__inner l-inner">
                <div class="p-recruit__desc">
                    <div class="p-recruit__desc-inner">
                        <div class="p-recruit__heading">
                            <h2 class="c-heading-primary">recruit<span class="c-heading-primary__sub">採用情報</span>
                            </h2>
                        </div>
                        <div class="p-recruit__body">
                            <div class="p-recruit__text">
                                <p>私たちと一緒に働きませんか？</p>
                            </div>
                        </div>
                        <div class="p-recruit__btn">
                            <a href="{{ route('recruit.index') }}" class="c-btn">more</a>
                        </div>
                    </div>
                </div>
                <div class="p-recruit__img-wrapper">
                    <!-- <img class="p-recruit__img" src="img/recruit.jpg" alt=""> -->
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
