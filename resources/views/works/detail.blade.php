@extends('layouts.main')

@section('title', $work->title . ' 様｜PON DESIGN')

@section('content')
    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">works<span class="c-heading-primary__sub">制作実績</span>
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
                    <a itemprop="item" href="{{ route('works.index') }}" class="p-breadcrumb__link">
                        <span itemprop="name">works</span>
                    </a>
                    <meta itemprop="position" content="2" />
                </li>
                <!-- 3つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
                    <span itemprop="item">
                        <span itemprop="name">{{ $work->title . ' 様' }}</span>
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
                            <div class="p-post__title">{{ $work->title . ' 様' }}</div>
                            <div class="p-post__info">
                                <time class="p-post__date"
                                    datetime="{{ $work->created_at->format('Y-m-d') }}">{{ $work->created_at->format('Y年m月d日') }}</time>
                                <a href="{{ route('works.index', ['category' => $work->works_category->name]) }}"
                                    class="c-label-category">{{ $work->works_category->name }}</a>
                            </div>
                        </div>
                        <div class="p-post__body">
                            <p><img src="{{ asset($work->thumbnail) }}" alt="{{ $work->title . ' 様' }}"></p>
                            <p>{{ $work->content }}</p>
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
                                    @if (isset($prev_work))
                                        <div class="p-post-pager__item p-post-pager__item--prev">
                                            <a href="{{ route('news.detail', ['id' => $prev_work->id]) }}"
                                                class="p-post-pager__link">
                                                {{ $prev_work->title . ' 様' }}
                                            </a>
                                        </div>
                                    @endif
                                    @if (isset($next_work))
                                        <div class="p-post-pager__item p-post-pager__item--next">
                                            <a class="p-post-pager__link"
                                                href="{{ route('news.detail', ['id' => $next_work->id]) }}">
                                                {{ $next_work->title . ' 様' }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="p-post-pager__home">
                                <a href="{{ route('works.index') }}">works一覧</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        @include('components.contact_section')
    </main>
@endsection
