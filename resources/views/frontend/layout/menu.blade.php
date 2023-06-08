<div class="header-row ">
    <div class="header-column justify-content-start ">
        <div class="header-nav header-nav-border-top header-nav-top-line justify-content-start">
            <div class="header-nav-main header-nav-main-uppercase header-nav-main-effect-1 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="nav flex-column flex-lg-row" id="mainNav">
                        <li class="order-1 dropdown dropdown-mega">
                            <a class="dropdown-item dropdown-toggle active" href="{{ route('home') }}">
                                {{ __('site.home') }}
                            </a>
                        </li>
                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('studio') }}">
                                {{ __('site.studio') }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services->where('category', 3) as $item)
                                    <li>
                                        <a href="{{  route('studio.detail', $item->slug )}}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('rental') }}">
                                {{ __('site.equipment') }}
                            </a>
                        </li>

                        @foreach($services->where('category',5 ) as $item)
                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{  route('studio.detail', $item->slug )}}">
                                {{ $item->title }}
                            </a>
                        </li>
                        @endforeach

                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('services') }}">
                                {{ __('site.services') }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services->where('category',4 ) as $item)
                                    <li>
                                        <a href="{{  route('studio.detail', $item->slug )}}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                                Gallery
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('video') }}">Video's Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('foto') }}">Foto Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('project') }}">Project</a>
                                </li>
                            </ul>
                        </li>

                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('faq') }}">
                                F.A.Q
                            </a>
                        </li>

                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#">
                                Kinefinity
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services->where('category',6 ) as $item)
                                    <li>
                                        <a href="{{  route('studio.detail', $item->slug )}}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="order-3 dropdown">
                            <a class="dropdown-item dropdown-toggle" href="{{ route('contactus') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-column justify-content-end">

        <div class="btn-group">
            <a href="https://www.cinegear.nl" target="_blank" class="btn btn-rounded  font-weight-bold btn-primary mb-2">SHOP <i class="fas fa-shopping-cart text-light"></i></a>
        </div>
        <button class="header-btn-collapse-nav ms-3" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
            <span class="hamburguer">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <span class="close">
                <span></span>
                <span></span>
            </span>
        </button>
    </div>
</div>
