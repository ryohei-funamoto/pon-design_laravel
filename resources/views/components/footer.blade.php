<footer class="l-footer">
    <nav class="l-footer-nav">
        <ul class="l-footer-nav__list">
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('index') }}">HOME</a>
            </li>
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('news.index') }}">news</a>
            </li>
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('service.index') }}">service</a>
            </li>
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('works.index') }}">works</a>
            </li>
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('company.index') }}">company</a>
            </li>
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('recruit.index') }}">recruit</a>
            </li>
            <li class="l-footer-nav__item"><a class="l-footer-nav__link" href="{{ route('contact.index') }}">contact</a>
            </li>
        </ul>
    </nav>
    <div class="c-copyright">
        <a href="{{ route('index') }}" class="c-copyright__link">&copy;PON DESIGN</a>
    </div>
</footer>

<div class="c-page-top">
    <a href="#" class="c-page-top__link"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
</div>

@if (request()->routeIs('news.detail'))
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async">
    </script>
    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
    </script>
@endif
