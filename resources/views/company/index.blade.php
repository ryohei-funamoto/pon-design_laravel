@extends('layouts.main')

@section('title', 'COMPANY - 私たちについて｜PON DESIGN')

@section('content')
    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">company<span class="c-heading-primary__sub">私たちについて</span>
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
                        <span itemprop="name">company</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <main class="l-contents">
        <section class="p-greeting l-section">
            <div class="p-greeting__inner l-inner">
                <div class="p-greeting__heading">
                    <h3 class="c-heading-secondary">メッセージ</h3>
                </div>
                <div class="p-greeting__message">
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
                <div class="p-greeting__ceo">
                    <div class="c-media">
                        <div class="c-media__img-wrapper">
                            <img src="{{ asset('img/ceo.jpg') }}" class="c-media__img" alt="">
                        </div>
                        <div class="c-media__body">
                            <div class="c-media__text">
                                <p>
                                    テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>代表取締役社長
                                    猫山ポン太郎
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-company-info l-section">
            <div class="l-inner">
                <div class="p-company-info__heading">
                    <h3 class="c-heading-secondary">会社概要</h3>
                </div>
                <div class="p-company-info__table">
                    <table class="c-table01">
                        <tr>
                            <th>社名</th>
                            <td>株式会社PON DESIGN</td>
                        </tr>
                        <tr>
                            <th>設立</th>
                            <td>2025.02.10</td>
                        </tr>
                        <tr>
                            <th>代表取締役</th>
                            <td>猫山ポン太郎</td>
                        </tr>
                        <tr>
                            <th>資本金</th>
                            <td>1,000,000円</td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                            <td>〒555-5555 東京都千代田区 ポンビルディング 606</td>
                        </tr>
                    </table>
                </div>
                <div class="p-company-info__access">
                    <div class="p-access">
                        <div class="p-access__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030380878!2d139.76493611544558!3d35.68123618019435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1603888975255!5m2!1sja!2sjp"
                                width="100%" height="auto"" frameborder=" 0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="p-access__map-link">
                            <a href="https://goo.gl/maps/b5AqA853AfsPSw1Y7" target="_blank">Google mapで見る</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.contact_section')
    </main>
@endsection
