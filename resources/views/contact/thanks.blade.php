@extends('layouts.main')

@section('title', 'CONTACT - お問い合わせ｜PON DESIGN')

@section('content')
    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">contact<span class="c-heading-primary__sub">お問い合わせ</span>
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
                <div class="p-contact-form__status-panels">
                    <div class="p-contact-form__status-panel done">入力</div>
                    <div class="p-contact-form__status-panel done">確認</div>
                    <div class="p-contact-form__status-panel current">完了</div>
                </div>
                <div class="p-contact-form__body">
                    <p class="p-contact-form__message">
                        {{ $name }} さん、お問い合わせありがとうございます。<br>
                        お問い合わせいただいた内容を確認の上、3営業日以内に折り返しご連絡させていただきます。
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection
