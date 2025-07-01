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
                    Webサイトの制作のご依頼やお見積りなど、<br class="u-sp-only">お気軽にご相談ください。
                </div>
                <div class="p-contact-form__status-panels">
                    <div class="p-contact-form__status-panel current">入力</div>
                    <div class="p-contact-form__status-panel">確認</div>
                    <div class="p-contact-form__status-panel">完了</div>
                </div>
                <div class="p-contact-form__body">
                    <form class="c-form" action="{{ route('contact.confirm') }}" method="post">
                        @csrf
                        <div class="c-form__item">
                            <div class="c-form__title">お問い合わせ種別<span class="c-form__require">*必須</span></div>
                            <span class="c-form__radio">
                                <input type="radio" id="type01" name="type" value="お仕事のご依頼・ご相談" {{ old('type', 'お仕事のご依頼・ご相談') == 'お仕事のご依頼・ご相談' ? 'checked' : '' }}>
                                <label for="type01">お仕事のご依頼・ご相談</label>
                            </span>
                            <span class="c-form__radio">
                                <input type="radio" id="type02" name="type" value="お見積りのご依頼" {{ old('type', 'お仕事のご依頼・ご相談') == 'お見積りのご依頼' ? 'checked' : '' }}>
                                <label for="type02">お見積りのご依頼</label>
                            </span>
                            <span class="c-form__radio">
                                <input type="radio" id="type03" name="type" value="採用について" {{ old('type', 'お仕事のご依頼・ご相談') == '採用について' ? 'checked' : '' }}>
                                <label for="type03">採用について</label>
                            </span>
                            <span class="c-form__radio">
                                <input type="radio" id="type04" name="type" value="その他" {{ old('type', 'お仕事のご依頼・ご相談') == 'その他' ? 'checked' : '' }}>
                                <label for="type04">その他</label>
                            </span>
                        </div>
                        <div class="c-form__item">
                            <label for="name" class="c-form__title">お名前<span class="c-form__require">*必須</span></label>
                            <input type="text" id="name" name="name" required class="c-form__input" value="{{ old('name') }}">
                        </div>
                        <div class="c-form__item">
                            <label for="company" class="c-form__title">会社名<span class="c-form__require">*必須</span></label>
                            <input type="text" id="company" name="company" required class="c-form__input" value="{{ old('company') }}">
                        </div>
                        <div class="c-form__item">
                            <label for="email" class="c-form__title">メールアドレス<span
                                    class="c-form__require">*必須</span></label>
                            <input type="email" id="email" name="email" required class="c-form__input" value="{{ old('email') }}">
                        </div>
                        <div class="c-form__item">
                            <label for="email_confirmation" class="c-form__title">メールアドレス（確認用）<span
                                    class="c-form__require">*必須</span></label>
                            <input type="email" id="email_confirmation" name="email_confirmation" required class="c-form__input" value="{{ old('email_confirmation') }}">
                        </div>
                        <div class="c-form__item">
                            <label for="tel" class="c-form__title">電話番号<span
                                    class="c-form__note">（半角数字ハイフンなし）</span></label>
                            <input type="tel" id="tel" name="tel" class="c-form__input" value="{{ old('tel') }}">
                        </div>
                        <div class="c-form__item">
                            <label for="comment" class="c-form__title">お問い合わせ内容</label>
                            <textarea id="comment" name="comment" placeholder="お問い合わせ内容を具体的にご記入くださいませ。" class="c-form__textarea">{{ old('comment') }}</textarea>
                        </div>
                        <div class="c-form__item">
                            <label for="job" class="c-form__title">PON DESIGNをどちらでお知りになりましたか？<span
                                    class="c-form__require">*必須</span></label>
                            <select id="job" name="job" required class="c-form__select">
                                <option value="" hidden selected>選択してください</option>
                                <option value="Google/Yahoo検索" {{ old('job') == 'Google/Yahoo検索' ? 'selected' : '' }}>Google/Yahoo検索</option>
                                <option value="SNS" {{ old('job') == 'SNS' ? 'selected' : '' }}>SNS</option>
                                <option value="ブログ" {{ old('job') == 'ブログ' ? 'selected' : '' }}>ブログ</option>
                                <option value="友人や知人" {{ old('job') == '友人や知人' ? 'selected' : '' }}>友人や知人</option>
                                <option value="その他" {{ old('job') == 'SNS' ? 'その他' : '' }}>その他</option>
                            </select>
                        </div>
                        <div class="c-form__btn">
                            <button type="submit" class="c-btn">確認する</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
