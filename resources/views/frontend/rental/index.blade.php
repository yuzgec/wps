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

    <div class="container container-fluid">
        <div class="row">
            <aside class="sidebar col-md-4 col-lg-3 order-2 order-md-1">
                <div class="accordion accordion-default accordion-toggle accordion-style-1" role="tablist">

                    <div class="card">
                        <div class="card-header accordion-header" role="tab" id="categories">
                            <h5 class="mb-0">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#toggleCategories" aria-expanded="false" aria-controls="toggleCategories">Categories</a>
                            </h5>
                        </div>
                        <div id="toggleCategories" class="accordion-body collapse show p-0" role="tabpanel" aria-labelledby="categories">
                            <div class="card-body">
                                <ul class="list list-unstyled list-borders">
                                    @foreach($categories as $item)
                                    <li>
                                        <a href="{{ route('rentals', $item->slug) }}" title="{{ $item->title }}"><i class="fas fa-angle-right text-color-primary ms-1 me-1 pe-2"></i>
                                            {{ $item->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-md-8 col-lg-9 order-1 order-md-2 mb-5 mb-md-0">
                <div class="row">
                    @foreach($categories as $item)
                    <div class="col-sm-6 col-md-4 mb-4">
                        <div class="image-frame image-frame-border image-frame-style-1 image-frame-effect-2 image-frame-effect-1 overlay overlay-op-4 overlay-show">
                            <div class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-bottom-show image-frame-wrapper-overlay-bottom-shadow image-frame-wrapper-overlay-bottom-shadow-light image-frame-wrapper-align-end">
                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page', 'img')}}" class="img-fluid" alt="{{ $item->title }} - Wester Park Studio Amsterdam">
                                <div class="image-frame-action flex-column align-items-center">
                                    <h4 class="text-color-light font-weight-bold mb-0 bg-dark p-1 border-radius-0">
                                        <a href="{{ route('rentals', $item->slug) }}"
                                           title="{{ $item->title }}"
                                           class="text-color-light">
                                            {{ $item->title }}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr class="mt-5 mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mb-3 mb-sm-0">
                        <span>Showing 1-9 of 60 results</span>
                    </div>
                    <div class="col-auto">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link prev" href="#" aria-label="Previous">
                                        <span><i class="fas fa-angle-left" aria-label="Previous"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">15</a></li>
                                <li class="page-item">
                                    <a class="page-link next" href="#" aria-label="Next">
                                        <span><i class="fas fa-angle-right" aria-label="Next"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--
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
--}}

@endsection
