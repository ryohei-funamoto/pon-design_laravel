@extends('layouts.main')

@section('title', 'SERVICE - 事業内容｜PON DESIGN')

@section('content')
    <div class="p-sub-hero">
        <div class="p-sub-hero__inner">
            <h2 class="c-heading-primary c-heading-primary--white">service<span class="c-heading-primary__sub">事業案内</span>
            </h2>
        </div>
    </div>
    <div class="p-breadcrumb">
        <div class="l-inner">
            <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="p-breadcrumb__list">
                <!-- 1つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
                    <a itemprop="item" href="." class="p-breadcrumb__link">
                        <span itemprop="name">HOME</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <!-- 2つめ -->
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="p-breadcrumb__item">
                    <span itemprop="item" href="service.html">
                        <span itemprop="name">service</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <main class="l-contents">
        <section class="p-service-list-wrapper l-section">
            <div class="p-service-list-wrapper__inner l-inner">
                <div class="p-service-list">
                    <div class="c-media">
                        <div class="c-media__img-wrapper">
                            <img src="{{ asset('img/service01.jpg') }}" class="c-media__img" alt="">
                        </div>
                        <div class="c-media__body">
                            <h3 class="c-media__title">
                                Webサイト制作
                            </h3>
                            <div class="c-media__text">
                                <p>新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。<br>
                                    サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-media">
                        <div class="c-media__img-wrapper">
                            <img src="{{ asset('img/service02.jpg') }}" class="c-media__img" alt="">
                        </div>
                        <div class="c-media__body">
                            <h3 class="c-media__title">
                                Webサイト運用
                            </h3>
                            <div class="c-media__text">
                                <p>
                                    サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。<br>日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。<br>
                                    また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-media">
                        <div class="c-media__img-wrapper">
                            <img src="{{ asset('img/service03.jpg') }}" class="c-media__img" alt="">
                        </div>
                        <div class="c-media__body">
                            <h3 class="c-media__title">
                                アプリ開発
                            </h3>
                            <div class="c-media__text">
                                <p>スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。
                                    開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
