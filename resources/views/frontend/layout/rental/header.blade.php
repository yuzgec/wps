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
            <div class="header-row justify-content-between">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="{{ route('home') }}">
                            <img alt="{{ config('app.name') }}" width="200px" src="/logo.jpg">
                        </a>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <form class="search-form d-none d-md-block" method="GET">
                        <div class="input-group">
                            <input type="text" name="s" placeholder="Search..." aria-label="Search...">
                            <span class="input-group-btn">
                                <button class="btn" type="submit"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="header-column justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-link text-color-default font-weight-bold order-3 d-none d-sm-block ms-md-auto me-2 pt-1 text-1">Login</a>
                    <form class="search-form-mobile d-md-none" method="GET">
                        <div class="mobile-search-toggle"><i class="lnr lnr-magnifier"></i></div>
                        <div class="input-group">
                            <input type="text" name="s" placeholder="Search..." aria-label="Search...">
                            <span class="input-group-btn">
                                <button class="btn" type="submit"><i class="lnr lnr-magnifier"></i></button>
                            </span>
                        </div>
                    </form>
                    <div class="mini-cart order-4 me-3 me-sm-0">
                        <span class="font-weight-bold font-primary d-none d-sm-block">Cart / <span class="cart-total">€ 0.00</span></span>
                        <div class="mini-cart-icon">
                            <img src="/frontend/img/icons/cart-bag.svg" class="img-fluid" alt="" />
                            <span class="badge badge-primary rounded-circle">0</span>
                        </div>
                        <div class="mini-cart-content">
                            <div class="inner-wrapper bg-light rounded">
                                <div class="mini-cart-product">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="text-color-default font-secondary text-1 mt-3 mb-0">Blue Hoodies</h2>
                                            <strong class="text-color-dark">
                                                <span class="qty">1x</span>
                                                <span class="product-price">$12.00</span>
                                            </strong>
                                        </div>
                                        <div class="col-5">
                                            <div class="product-image">
                                                <a href="#" class="btn btn-light btn-rounded justify-content-center align-items-center"><i class="fas fa-times"></i></a>
                                                <img src="img/products/product-2.jpg" class="img-fluid rounded" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart-total">
                                    <div class="row">
                                        <div class="col">
                                            <strong class="text-color-dark">TOTAL:</strong>
                                        </div>
                                        <div class="col text-end">
                                            <strong class="total-value text-color-dark">$12.00</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart-actions">
                                    <div class="row">
                                        <div class="col pe-1">
                                            <a href="shop-cart.html" class="btn btn-dark font-weight-bold rounded text-0">VIEW CART</a>
                                        </div>
                                        <div class="col ps-1">
                                            <a href="shop-checkout.html" class="btn btn-primary font-weight-bold rounded text-0">CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.layout.menu')
        </div>
    </div>
</header>
