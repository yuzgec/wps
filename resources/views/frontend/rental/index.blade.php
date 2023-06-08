@extends('frontend.layout.rental.app')
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('rental') }}">Home</a></li>
                        <li class="active">Apparatuur Verhuur</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Apparatuur Verhuur</h1>

                </div>
            </div>
        </div>
    </section>

    <div class="container container-lg-custom mb-4">

        <ul class="nav sort-source mb-3" data-sort-id="products" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">SHOW ALL</a></li>
            <li class="nav-item" data-option-value=".camera"><a class="nav-link text-uppercase" href="#">Camera</a></li>
            <li class="nav-item" data-option-value=".lens"><a class="nav-link text-uppercase" href="#">Lens</a></li>
            <li class="nav-item" data-option-value=".dolly"><a class="nav-link text-uppercase" href="#">Dolly</a></li>
            <li class="nav-item" data-option-value=".light"><a class="nav-link text-uppercase" href="#">Light</a></li>
            <li class="nav-item" data-option-value=".accessories"><a class="nav-link text-uppercase" href="#">Accessories</a></li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing">
            <div class="portfolio-list sort-destination" data-sort-id="products">
                @for($i = 0; $i < 40; $i++)

                <div class="col-sm-6 col-12 col-md-4 p-0 isotope-item @php   $a = ["camera", "lens", "dolly", "light", "accessories"]; $r = array_rand($a,2 ); echo $a[$r[0]] @endphp">
                    <div class="product portfolio-item portfolio-item-style-2">
                        <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
                            <span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                <a href="{{ route('rental') }}">
                                    <img src="https://www.bhphotovideo.com/images/images1500x1500/kinefinity_mavo_s35_mkii_mavo_mark2_s35_digital_1746349.jpg" class="img-fluid" alt="">
                                </a>
                                <span class="image-frame-action">
                                    <a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD WISHLIST</a>
                                </span>
                            </span>
                        </div>
                        <h4 class="font-weight-normal">Kinefinity Cinema Camera</h4>
                        <div class="product-info d-flex flex-column flex-lg-row justify-content-between">

                            <div class="product-info-title">
                                <h4 class="text-color-default text-1 line-height-1 mb-1"><a href="{{ route('rental') }}">First Day</a></h4>
                                <span class="price font-primary text-2"><strong class="text-color-dark">€{{ $day = rand(100,1000) }}</strong></span>
                                <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">$129</strong></span>

                            </div>
                            <div class="product-info-title">
                                <h3 class="text-color-default text-1 line-height-1 mb-1"><a href="{{ route('rental') }}">Next Days</a></h3>
                                <span class="price font-primary text-2"><strong class="text-color-dark">€{{ $dayy = $day + $day / 2 }}</strong></span>
                                <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">€{{ 129*2 }}</strong></span>
                            </div>

                            <div class="product-info-title">
                                <a class="add-to-cart btn btn-primary btn-rounded font-weight-semibold btn-sm">+</a>
                            </div>


                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

    </div>

@endsection
