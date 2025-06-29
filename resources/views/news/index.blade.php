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
        <section class="p-search-form l-section">
            <div class="p-search-form__inner l-inner">
                <div class="p-search-form__body">
                    <form class="c-form" action="{{ route('news.index') }}" method="get">
                        <div class="c-form__item">
                            <label for="keyword" class="c-form__title">キーワード検索</label>
                            <input type="text" id="keyword" name="keyword" class="c-form__input">
                        </div>
                        <div class="c-form__item">
                            <label for="category" class="c-form__title">カテゴリー</label>
                            <select id="category" name="category" class="c-form__select">
                                <option value="">選択してください</option>
                                @foreach ($category_list as $category_item)
                                    <option value="{{ $category_item->name }}">{{ $category_item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="c-form__btn">
                            <button type="submit" class="c-btn">検索する</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="p-news-list-wrapper l-section">
            <div class="p-news-list-wrapper__inner l-inner">
                <div class="p-news-list-wrapper__body">
                    @if ($news_list->isEmpty())
                        <p class="c-message">記事が見つかりませんでした。</p>
                    @else
                        <div class="p-news-list">
                            <ul class="p-news-list__list">
                                @foreach ($news_list as $news_item)
                                    <li class="p-news-list__item">
                                        <div class="p-news-list__heading">
                                            <time datetime="{{ $news_item->created_at->format('Y-m-d') }}"
                                                class="p-news-list__date">{{ $news_item->created_at->format('Y.m.d') }}</time>
                                            <div class="p-news-list__label">
                                                <span class="c-label-category">{{ $news_item->news_category->name }}</span>
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
                    @endif
                </div>
                {{ $news_list->links('vendor.pagination.custom') }}
            </div>
        </section>
        @include('components.contact_section')
    </main>
@endsection
