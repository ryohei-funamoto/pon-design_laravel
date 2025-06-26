@extends('layouts.main')

@section('title', 'NEWS - お知らせ｜PON DESIGN')

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
                            @foreach ($news_list as $news_item)
                                <li class="p-news-list__item">
                                    <div class="p-news-list__heading">
                                        <time datetime="{{ $news_item->created_at->format('Y-m-d') }}"
                                            class="p-news-list__date">{{ $news_item->created_at->format('Y.m.d') }}</time>
                                        <div class="p-news-list__label">
                                            <span class="c-label-category">{{ $news_item->category_name }}</span>
                                        </div>
                                    </div>
                                    <div class="p-news-list__body">
                                        <a href="{{ route('news.detail', ['id' => $news_item->id]) }}"
                                            class="p-news-list__link">{{ $news_item->title }}</a>
                                    </div>
                                </li>
                            @endforeach
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
        @include('components.contact_section')
    </main>
@endsection
