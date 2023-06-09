@extends('frontend.layout.rental.app')
@section('content')


    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('rental') }}">Rental</a></li>
                        <li><a href="{{ route('rental') }}">{{ $c->title }}</a></li>
                        <li class="active">{{ $product->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ $product->title }} Verhuur</h1>
                    @if(auth()->user()->is_admin == 1)
                    <p> <a href="{{ route('product.edit',$product->id) }}" target="_blank">Ürünü Düzenle</a></p>
                    @endif
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
                                <img src="/lichtbus-huren-westerpark.jpg" class="img-fluid" >
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-md-8 col-lg-9 mb-5 mb-md-0 order-1 order-md-2">
                <div class="row mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="thumb-gallery-wrapper">
                            <div class="thumb-gallery-detail owl-carousel owl-theme manual dots-style-2 nav-style-2 nav-color-dark mb-3">
                                <div>
                                    <img src="{{ (!$product->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $product->getFirstMediaUrl('page')}}" class="img-fluid" alt="">
                                </div>
                                @foreach($product->getMedia('gallery') as $item)
                                <div>
                                    <img src="{{ $item->getUrl('img') }}" class="img-fluid" alt="">
                                </div>
                                @endforeach
                            </div>
                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                                <div>
                                    <span class="d-block">
                                        <img alt="Product Image" src="{{ (!$product->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $product->getFirstMediaUrl('page', 'thumb')}}" class="img-fluid">
                                    </span>
                                </div>
                                @foreach($product->getMedia('gallery') as $item)
                                <div>
                                    <span class="d-block">
                                        <img alt="Product Image" src="{{ $item->getUrl('thumb') }}" class="img-fluid">
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="line-height-1 font-weight-bold mb-2">
                            {{ $product->title }}
                        </h2>

                        <div class="bg-primary" style="border-radius: 10px">
                             <div class="row d-flex justify-content-between align-items-center p-3">
                                 <div class="col-12 col-md-4 text-center" style="border-right:1px solid gray">
                                     <span class="font-weight-bold text-white text-4">First Day</span><br>

                                     <span class="font-weight-bold text-white text-3">€ {{ (request('extvat') == 1) ? $product->price * 1.21 : $product->price}}</span>

                                 </div>
                                 <div class="col-12 col-md-4 text-center">
                                     <span class="font-weight-bold text-white text-4">Next Day</span><br>
                                     <span class="font-weight-bold text-white text-3">€ {{ (request('extvat') == 1) ? round($product->price * 1.21) / 2 : $product->price / 2}}</span>
                                 </div>

                                 <div class="col-12 col-md-4 p-1 text-center">
                                    <livewire:add-cart :product="$product" />
                                     <a class="btn btn-link text-white"
                                        href="{{ (request('extvat') == 1) ? url()->current() : url()->current().'?extvat=1' }}">
                                         {{ (request('extvat') == 1) ? 'Include VAT' : 'Excluding VAT'  }}
                                     </a>
                                 </div>
                             </div>
                        </div>

                        <p class="mt-3">{!! $product->short  !!}</p>
                        <hr class="my-2">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex justify-content-center flex-column">
                                <ul class="list list-unstyled ">
                                    <li>Availability: <strong><span class="badge bg-success">Available</span></strong></li>
                                    @if($product->sku)
                                    <li>SKU: <strong>{{ $product->sku }}</strong></li>
                                    @endif
                                    <li>Brand : <strong> {{ $product->getBrand->title }}</strong></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 d-flex justify-content-center">
                                <img src="{{ $product->getBrand->getFirstMediaUrl('page') }}" class="img-fluid">
                            </div>
                        </div>

                        <hr class="my-2">
                        @if($product->external)
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="https://cinegear.nl/wp-content/uploads/2023/03/Transparent_Normal_Logo.png" class="img-fluid">
                                <br>İsterseniz bu ürünü cinegear.nl üzerinden satın alabilirsiniz.
                            </div>
                        </div>
                        <hr class="my-4">
                        @endif
                        <div class="d-flex align-items-center">
                            <span class="text-2">SHARE</span>
                            <ul class="social-icons social-icons-dark social-icons-1 ms-3">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <ul class="nav nav-tabs nav-tabs-default" id="productDetailTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold active"
                                   id="productDetailDescTab"
                                   data-bs-toggle="tab"
                                   href="#productDetailDesc"
                                   role="tab"
                                   aria-controls="productDetailDesc"
                                   aria-expanded="true">DESCRIPTION
                                </a>
                            </li>
                            @if($product->option3 )
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold"
                                   id="productDetailMoreInfoTab"
                                   data-bs-toggle="tab"
                                   href="#productDetailMoreInfo"
                                   role="tab"
                                   aria-controls="productDetailMoreInfo">VIDEO
                                </a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold"
                                   id="productDetailReviewsTab"
                                   data-bs-toggle="tab"
                                   href="#productDetailReviews"
                                   role="tab"
                                   aria-controls="productDetailReviews">REVIEWS (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="contentTabProductDetail">
                            <div class="tab-pane fade pt-4 pb-4 show active" id="productDetailDesc" role="tabpanel" aria-labelledby="productDetailDescTab">
                                {!! $product->desc !!}
                            </div>

                            <div class="tab-pane fade pt-4 pb-4" id="productDetailMoreInfo" role="tabpanel" aria-labelledby="productDetailMoreInfoTab">
                                <iframe width="100%" height="550" src="https://www.youtube.com/embed/{{ $product->option3 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>

                            <div class="tab-pane fade pt-4 pb-4" id="productDetailReviews" role="tabpanel" aria-labelledby="productDetailReviewsTab">
                                <ul class="comments">

                                </ul>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
@section('customJS')
    <script src="/frontend/js/examples/examples.gallery.js"></script>
    <script>
        $(document).ready(function() {
            $("table").addClass("table table-hover table-striped table-bordered table-responsive");
            $("img").addClass('img-fluid');
        })
    </script>
@endsection
