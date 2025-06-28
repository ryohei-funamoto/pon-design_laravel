@if (request()->routeIs('news.detail'))
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0"
        nonce="l8bnbbly"></script>
@endif

<header class="l-header">
    <div class="l-header__logo">
        <h1 class="logo">
            <a href="{{ route('index') }}" class="logo__link"><img class="logo__img" src="{{ asset('img/logo.svg') }}"
                    alt="PON DESIGN"></a>
        </h1>
    </div>
    <div class="l-header__nav">
        <nav class="p-global-nav">
            <ul class="p-global-nav__list">
                <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('news.index') }}">news</a>
                </li>
                <li class="p-global-nav__item"><a class="p-global-nav__link"
                        href="{{ route('service.index') }}">service</a></li>
                <li class="p-global-nav__item"><a class="p-global-nav__link" href="{{ route('works.index') }}">works</a>
                </li>
                <li class="p-global-nav__item"><a class="p-global-nav__link"
                        href="{{ route('company.index') }}">company</a></li>
                <li class="p-global-nav__item"><a class="p-global-nav__link"
                        href="{{ route('recruit.index') }}">recruit</a></li>
                <li class="p-global-nav__item"><a class="p-global-nav__link"
                        href="{{ route('contact.index') }}">contact</a></li>
            </ul>
        </nav>
    </div>
    <button type="button" class="c-btn-menu js-btn-menu">
        <span class="c-btn-menu__line"></span>
    </button>
</header>
