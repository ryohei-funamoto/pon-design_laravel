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
    <title>RECRUIT - 採用情報｜PON DESIGN</title>
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
    <header class="l-header">
        <div class="l-header__logo">
            <h1 class="logo">
                <a href="{{ route('index') }}" class="logo__link"><img class="logo__img"
                        src="{{ asset('img/logo.svg') }}" alt="PON DESIGN"></a>
            </h1>
        </div>
        <div class="l-header__nav">
            <nav class="p-global-nav">
                <ul class="p-global-nav__list">
                    <li class="p-global-nav__item"><a class="p-global-nav__link"
                            href="{{ route('news.index') }}">news</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link"
                            href="{{ route('service.index') }}">service</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link"
                            href="{{ route('works.index') }}">works</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link"
                            href="{{ route('company.index') }}">company</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link"
                            href="{{ route('recruit.index') }}">recruit</a></li>
                    <li class="p-global-nav__item"><a class="p-global-nav__link"
                            href="{{ route('contact.index') }}">contact</a></li>
                </ul>
            </nav>
        </div>
        <button type="button" class="c-btn-menu js-btn-menu">
            <span class="c-btn-menu__line"></span>
        </button>
    </header>

    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">recruit<span
                    class="c-heading-primary__sub">採用情報</span>
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
                        <span itemprop="name">recruit</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    <main class="l-contents l-contents--page-recruit ">
        <section class="p-recruit-message l-section">
            <div class="p-recruit-message__heading">
                <h3 class="p-recruit-message__title">
                    Enjoy Creation for Client
                </h3>
                <div class="p-recruit-message__subtitle">
                    楽しむ心が良いモノを生む
                </div>
            </div>
            <div class="p-recruit-message__body">
                <p>心を弾ましながら<br>夢いっぱいのサイトを作ろう！<br>お客様も自分もみんなが幸せになれるように</p>
            </div>
            <div class="p-recruit-message__img-wrapper">
                <img src="{{ asset('img/recruit01.jpg') }}" alt="スタッフ３人が楽しげに仕事をしている様子">
            </div>
        </section>

        <section class="p-job-list l-section">
            <div class="l-inner">
                <div class="p-job-list__heading">
                    <h3 class="c-heading-secondary">
                        募集中の職種
                    </h3>
                </div>
                <div class="p-job-list__detail">
                    <h4 class="p-job-list__name">
                        Webデザイナー
                    </h4>
                    <div class="p-job-list__table">
                        <table class="c-table01">
                            <tr>
                                <th>雇用形態</th>
                                <td>
                                    <p>正社員</p>
                                </td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>
                                    <p>400万円〜600万円（経験・能力を考慮のうえ優遇）</p>
                                </td>
                            </tr>
                            <tr>
                                <th>仕事内容</th>
                                <td>
                                    <p>Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>
                                    <p>10:00 〜 19:00（実働8時間、休憩1時間）</p>
                                </td>
                            </tr>
                            <tr>
                                <th>応募資格</th>
                                <td>
                                    <p>PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。<br>実務未経験でも学校や独学で学習した方を歓迎します。</p>
                                    <ul>
                                        <li>デザインやコーディングを楽しめる方</li>
                                        <li>常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方</li>
                                        <li>お客様と一緒に楽しみながら高い目的を目指せる方</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="p-job-list__link">
                        <a href="#" class="c-btn">応募する</a>
                        <span class="p-job-list__link-note">求人サイトへ遷移します</span>
                    </div>
                </div>
            </div>
        </section>


        <section class="p-company-video l-section">
            <div class="l-inner">
                <h3 class="p-company-video__heading">
                    <div class="c-heading-secondary">
                        社内ムービー
                    </div>
                </h3>
                <div class="p-company-video__video">
                    <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VwbnZHvQ3CE"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
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
