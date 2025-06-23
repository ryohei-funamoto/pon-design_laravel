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
    <title>CONTACT - お問い合わせ｜PON DESIGN</title>
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
            <h2 class="c-heading-primary c-heading-primary--white">contact<span
                    class="c-heading-primary__sub">お問い合わせ</span>
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
                        <span itemprop="name">contact</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>

    <main class="l-contents">
        <section class="p-contact-form l-section">
            <div class="p-contact-form__inner l-inner">
                <div class="p-contact-form__lead">
                    Webサイトの制作のご依頼やお見積りなど、<br class="u-sp-only">お気軽にご相談ください。
                </div>
                <div class="p-contact-form__body">

                    <form class="c-form">
                        <div class="c-form__item">
                            <div class="c-form__title">お問い合わせ種別<span class="c-form__require">*必須</span></div>
                            <span class="c-form__radio">
                                <input type="radio" id="type01" name="type" value="お仕事のご依頼・ご相談"
                                    checked><label for="type01">お仕事のご依頼・ご相談</label></span>
                            <span class="c-form__radio"><input type="radio" id="type02" name="type"
                                    value="お見積りのご依頼"><label for="type02">お見積りのご依頼</label></span>
                            <span class="c-form__radio"><input type="radio" id="type03" name="type"
                                    value="採用について"><label for="type03">採用について</label></span>
                            <span class="c-form__radio"><input type="radio" id="type04" name="type"
                                    value="その他"><label for="type04">その他</label></span>
                        </div>

                        <div class="c-form__item">
                            <label for="name" class="c-form__title">お名前<span
                                    class="c-form__require">*必須</span></label>
                            <input type="text" id="name" name="name" required class="c-form__input">
                        </div>
                        <div class="c-form__item">
                            <label for="company" class="c-form__title">会社名<span
                                    class="c-form__require">*必須</span></label>
                            <input type="text" id="company" name="company" required class="c-form__input">
                        </div>
                        <div class="c-form__item">
                            <label for="email" class="c-form__title">メールアドレス<span
                                    class="c-form__require">*必須</span></label>
                            <input type="email" id="email" name="email" required class="c-form__input">
                        </div>
                        <div class="c-form__item">
                            <label for="tel" class="c-form__title">電話番号<span
                                    class="c-form__note">（半角数字ハイフンなし）</span></label>
                            <input type="tel" id="tel" name="tel" class="c-form__input">
                        </div>

                        <div class="c-form__item">
                            <label for="comment" class="c-form__title">お問い合わせ内容</label>
                            <textarea id="comment" name="comment" placeholder="お問い合わせ内容を具体的にご記入くださいませ。" class="c-form__textarea"></textarea>
                        </div>

                        <div class="c-form__item">
                            <label for="job" class="c-form__title">PON DESIGNをどちらでお知りになりましたか？<span
                                    class="c-form__require">*必須</span></label>
                            <select id="job" name="job" required class="c-form__select">
                                <option value="">選択してください</option>
                                <option value="Google/Yahoo検索">Google/Yahoo検索</option>
                                <option value="SNS">SNS</option>
                                <option value="ブログ">ブログ</option>
                                <option value="友人や知人">友人や知人</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div class="c-form__btn">
                            <button type="submit" class="c-btn">送信する</button>
                        </div>

                    </form>
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
