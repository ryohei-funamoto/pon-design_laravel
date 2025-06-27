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
                        <span itemprop="name">{{ $news->title }}</span>
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
                                {{ $news->title }}
                            </div>
                            <div class="p-post__info">
                                <time class="p-post__date"
                                    datetime="{{ $news->created_at->format('Y-m-d') }}">{{ $news->created_at->format('Y.m.d') }}</time>
                                <div class="c-label-category">{{ $news->news_category->name }}</div>
                            </div>
                        </div>
                        <div class="p-post__body">
                            <p><img src="{{ $news->thumbnail }}" alt="{{ $news->title }}"></p>
                            <p>{{ $news->content }}</p>
                        </div>
                        <div class="p-post__sns">
                            <div class="p-sns-share">
                                <ul class="p-sns-share__list">
                                    <li class="p-sns-share__item">
                                        <div class="fb-like" data-href="{{ url()->current() }}" data-layout="button_count"
                                            data-action="like" data-size="large" data-show-faces="false" data-share="true">
                                        </div>
                                    </li>
                                    <li class="p-sns-share__item">
                                        <a href="https://x.com/share?url={{ url()->current() }}"
                                            class="twitter-share-button" data-size="large" data-show-count="false"
                                            data-lang="ja">ツイート</a>
                                    </li>
                                    <li class="p-sns-share__item">
                                        <a href="http://b.hatena.ne.jp/entry/{{ url()->current() }}"
                                            class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label"
                                            data-hatena-bookmark-lang="ja" data-hatena-bookmark-height="28"
                                            title="このエントリーをはてなブックマークに追加"><img
                                                src="https://b.st-hatena.com/images/entry-button/button-only@2x.png"
                                                alt="このエントリーをはてなブックマークに追加" width="20" height="20"
                                                style="border: none;" /></a>
                                    </li>
                                    <li class="p-sns-share__item">
                                        <div class="line-it-button" data-lang="ja" data-type="share-c"
                                            data-url="{{ url()->current() }}" style="display: none;"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-post__pager">
                            <div class="p-post-pager">
                                <div class="p-post-pager__list">
                                    @if (isset($prev_news))
                                        <div class="p-post-pager__item p-post-pager__item--prev">
                                            <a href="{{ route('news.detail', ['id' => $prev_news->id]) }}"
                                                class="p-post-pager__link">
                                                {{ $prev_news->title }}
                                            </a>
                                        </div>
                                    @endif
                                    @if (isset($next_news))
                                        <div class="p-post-pager__item p-post-pager__item--next">
                                            <a class="p-post-pager__link"
                                                href="{{ route('news.detail', ['id' => $next_news->id]) }}">
                                                {{ $next_news->title }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="p-post-pager__home">
                                <a href="">news一覧</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        @include('components.contact_section')
    </main>
@endsection
