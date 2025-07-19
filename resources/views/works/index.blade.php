@extends('layouts.main')

@section('title', 'WORKS - 制作実績｜PON DESIGN')

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
                    <span itemprop="item">
                        <span itemprop="name">works</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <main class="l-contents">
        <section class="p-works-list-wrapper l-section">
            <div class="l-inner">
                <div class="p-works-list c-card-wrapper c-card-wrapper--col3">
                    @foreach ($work_list as $work_item)
                        <div class="c-card">
                            <a href="#" class="c-card__link">
                                <div class="c-card__img-wrapper">
                                    <img class="c-card__img" src="{{ $work_item->thumbnail }}" alt="{{ $work_item->title . ' 様' }}">
                                </div>
                                <div class="c-card__body">
                                    <div class="c-card__caption">{{ $work_item->title . ' 様' }}</div>
                                </div>
                                <div class="c-card__footer">
                                    <time class="c-card__published" datetime="{{ $work_item->created_at->format('Y-m-d') }}">{{ $work_item->created_at->format('Y年m月d日') }}</time>
                                    <span class="c-card__category">{{ $work_item->works_category->name }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="l-works-pagination">
                    {{ $work_list->appends(request()->query())->links('vendor.pagination.custom') }}
                </div>
            </div>
        </section>
        @include('components.contact_section')
    </main>
@endsection
