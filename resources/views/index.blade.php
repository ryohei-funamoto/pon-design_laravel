@extends('layouts.main')

@section('title', 'PON DESIGN')

@section('content')
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
                                    <a href="{{ route('news.detail') }}"
                                        class="p-news-list__link">Smoothiesta様のWebサイトを制作いたしました</a>
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
                            <div class="swiper-slide"><img src="{{ asset('img/works/smoothiesta.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide"><img src="{{ asset('img/works/web-conference.jpg') }}" alt="">
                            </div>
                            <div class="swiper-slide"><img src="{{ asset('img/works/lamina.jpg') }}" alt="">
                            </div>
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
        @include('components.contact_section')
    </main>
@endsection
