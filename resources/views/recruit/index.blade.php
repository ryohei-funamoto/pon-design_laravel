@extends('layouts.main')

@section('title', 'RECRUIT - 採用情報｜PON DESIGN')

@section('content')
    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">recruit<span class="c-heading-primary__sub">採用情報</span>
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
        @include('components.contact_section')
    </main>
@endsection
