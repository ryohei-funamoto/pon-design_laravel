@extends('layouts.main')

@section('title', 'Webデザインニュースサイト「ウェブマガジン」に取材いただきました｜PON DESIGN')

@section('content')
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
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
                    <a itemprop="item" href="{{ route('index') }}" class="p-breadcrumb__link">
                        <span itemprop="name">HOME</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <!-- 2つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
                    <a itemprop="item" href="{{ route('news.index') }}" class="p-breadcrumb__link">
                        <span itemprop="name">news</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <!-- 3つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
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
                                            data-action="like" data-size="large" data-show-faces="false" data-share="true">
                                        </div>
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
                                        <div class="line-it-button" data-lang="ja" data-type="share-c" data-url="URLが入る"
                                            style="display: none;"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-post__pager">
                            <div class="p-post-pager">
                                <div class="p-post-pager__list">
                                    <div class="p-post-pager__item p-post-pager__item--prev">
                                        <a href="{{ route('news.detail') }}" class="p-post-pager__link">Web
                                            Conference様のサイトを制作いたしました</a>
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
@endsection
