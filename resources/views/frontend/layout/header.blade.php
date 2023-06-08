<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 155, 'stickySetTop': '-185px'}">
    <div class="header-body">
        <div class="header-top header-top header-top-colored bg-primary">
            <div class="header-top-container container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <span class="d-none d-sm-flex align-items-center">
                            <i class="lnr lnr-clock me-1"></i>
                            Monday - Friday - 9am / 6pm
                        </span>
                        <span class="d-none d-sm-flex align-items-center" style="margin-left:15px">
                            <i class="lnr lnr-phone me-2"></i>
                            +31 (0)6 3402 6844
                        </span>
                    </div>
                    <div class="header-column justify-content-end">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-menu-toggle py-2 text-uppercase" id="dropdownLanguage"
                                   data-bs-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="true">
                                     {{ config('app.locale') }}	<i class="fas fa-angle-down fa-sm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="text-white no-skin"
                                               rel="alternate"
                                               hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, '/', [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        <ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
                            <li class="social-icons-facebook">
                                <a href="https://www.facebook.com/p/Westerpark-Studio-100064032037856/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icons-instagram">
                                <a href="https://www.instagram.com/westerparkstudio/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                        <a href="{{ route('home') }}" class="btn btn-tertiary btn-3 font-weight-bold text-1 rounded-0 ms-3">TEKLİF OLUŞTUR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start d-none d-md-flex">
                 {{--   <form class="search-form d-none d-md-block" method="GET">
                        <div class="input-group">
                            <input type="text" name="s" placeholder="Search..." aria-label="Search..." value="">
                            <span class="input-group-btn">
                                <button class="btn" type="submit"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div>
                    </form>--}}
                </div>
                <div class="header-column justify-content-md-center d-none d-md-flex">
                  {{--  <div class="header-logo">
                        <a href="{{ route('home') }}">
                            <img alt="{{ config('app.name') }}" src="/logo.jpg">
                        </a>
                    </div>--}}
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-logo">
                        <a href="{{ route('home') }}">
                            <img alt="{{ config('app.name') }}" src="/logo.jpg">
                        </a>
                    </div>
                </div>
            </div>
            @include('frontend.layout.menu')
        </div>
    </div>
</header>
