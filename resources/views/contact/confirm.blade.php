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
                <div class="p-contact-form__lead">
                    ご入力内容にお間違えが無いか、<br class="u-sp-only">今一度ご確認ください。
                </div>
                <div class="p-contact-form__status-panels">
                    <div class="p-contact-form__status-panel done">入力</div>
                    <div class="p-contact-form__status-panel current">確認</div>
                    <div class="p-contact-form__status-panel">完了</div>
                </div>
                <div class="p-contact-form__body">
                    <form class="c-form">
                        <div class="c-form__item">
                            <div class="c-form__title">お問い合わせ種別<span class="c-form__require">*必須</span></div>
                            <input type="hidden" name="type" value="お仕事のご依頼・ご相談">
                            <p class="c-form__confirm">お仕事のご依頼・ご相談</p>
                        </div>
                        <div class="c-form__item">
                            <label for="name" class="c-form__title">お名前<span class="c-form__require">*必須</span></label>
                            <input type="hidden" name="name" value="山田 太郎">
                            <p class="c-form__confirm">山田 太郎</p>
                        </div>
                        <div class="c-form__item">
                            <label for="company" class="c-form__title">会社名<span class="c-form__require">*必須</span></label>
                            <input type="hidden" name="company" value="海山商事株式会社">
                            <p class="c-form__confirm">海山商事株式会社</p>
                        </div>
                        <div class="c-form__item">
                            <label for="email" class="c-form__title">メールアドレス<span
                                    class="c-form__require">*必須</span></label>
                            <input type="hidden" name="email" value="test@example.com">
                            <p class="c-form__confirm">test@example.com</p>
                        </div>
                        <div class="c-form__item">
                            <label for="tel" class="c-form__title">電話番号<span
                                    class="c-form__note">（半角数字ハイフンなし）</span></label>
                            <input type="hidden" name="tel" value="08012345678">
                            <p class="c-form__confirm">08012345678</p>
                        </div>
                        <div class="c-form__item">
                            <label for="comment" class="c-form__title">お問い合わせ内容</label>
                            <input type="hidden" name="comment"
                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                aliquid assumenda accusantium, totam tempora atque sunt magni tempore iure adipisci. Nulla
                                doloribus minima omnis ex quis est eligendi neque fugiat!">
                            <p class="c-form__confirm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                aliquid assumenda accusantium, totam tempora atque sunt magni tempore iure adipisci. Nulla
                                doloribus minima omnis ex quis est eligendi neque fugiat!</p>
                        </div>
                        <div class="c-form__item">
                            <label for="job" class="c-form__title">PON DESIGNをどちらでお知りになりましたか？<span
                                    class="c-form__require">*必須</span></label>
                            <input type="hidden" name="job" value="Google/Yahoo検索">
                            <p class="c-form__confirm">Google/Yahoo検索</p>
                        </div>
                        <div class="c-form__btn">
                            <button type="submit" class="c-btn">送信する</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
