@extends('frontend.layout.rental.app')
@section('content')


    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('rental') }}">Rental</a></li>
                        <li><a href="{{ route('rental') }}">Kategori</a></li>
                        <li class="active">{{ $product->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ $product->title }} Verhuur</h1>
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
                                     <span class="font-weight-bold text-white text-3">€ {{ $product->price }}</span>
                                 </div>
                                 <div class="col-12 col-md-4 text-center">
                                     <span class="font-weight-bold text-white text-4">Next Day</span><br>
                                     <span class="font-weight-bold text-white text-3">€ {{ $product->price / 2 }}</span>
                                 </div>
                                 <div class="col-12 col-md-4 p-1 text-center">
                                     <button type="submit" class="btn btn-rounded btn-outline btn-with-arrow btn-light mb-1">
                                         Wishlist Add
                                         <span>
                                             <i class="fas fa-chevron-right"></i>
                                         </span>
                                     </button>
                                     <span class="text-white">Excluding VAT</span>
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
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold"
                                   id="productDetailMoreInfoTab"
                                   data-bs-toggle="tab"
                                   href="#productDetailMoreInfo"
                                   role="tab"
                                   aria-controls="productDetailMoreInfo">MORE INFO
                                </a>
                            </li>
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

                            </div>
                            <div class="tab-pane fade pt-4 pb-4" id="productDetailReviews" role="tabpanel" aria-labelledby="productDetailReviewsTab">
                                <ul class="comments">
                                    <li>
                                        <div class="comment">
                                            <div class="d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="/frontend/img/authors/author-2.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <span class="comment-by">
                                                    <span class="comment-rating">
                                                        <i class="fas fa-star text-color-dark me-1"></i>
                                                        <i class="fas fa-star text-color-dark me-1"></i>
                                                        <i class="fas fa-star text-color-dark me-1"></i>
                                                        <i class="fas fa-star text-color-dark me-1"></i>
                                                        <i class="fas fa-star text-color-dark"></i>
                                                    </span>
                                                    <strong class="comment-author text-color-dark">Robert Doe</strong>
                                                    <span class="comment-date border-end-0 text-color-light-3">MARCH 5, 2021 at 2:28 pm</span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="/frontend/img/authors/author-1.jpg">
                                            </div>
                                            <div class="comment-block">
															<span class="comment-by">
																<span class="comment-rating">
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star-half text-color-dark"></i>
																</span>
																<strong class="comment-author text-color-dark">John Doe</strong>
																<span class="comment-date border-end-0 text-color-light-3">MARCH 5, 2021 at 2:28 pm</span>
															</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="d-none d-sm-block">
                                                <img class="avatar rounded-circle" alt="" src="/frontend/img/authors/author-3.jpg">
                                            </div>
                                            <div class="comment-block">
															<span class="comment-by">
																<span class="comment-rating">
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star text-color-dark me-1"></i>
																	<i class="fas fa-star text-color-dark me-1"></i>
																</span>
																<strong class="comment-author text-color-dark">Jessica Doe</strong>
																<span class="comment-date border-end-0 text-color-light-3">MARCH 5, 2021 at 2:28 pm</span>
															</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="row mt-4 pt-2">
                                    <div class="col">
                                        <h2 class="font-weight-bold text-3 mb-3">LEAVE A REVIEW</h2>
                                        <form class="form-style-2" action="#" method="post">
                                            <div class="form-row row mb-3">
                                                <div class="form-group">
                                                    <div class="rating p-1">
                                                        <label>
                                                            <input type="radio" name="rating" value="5" title="5 stars"> 5
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="4" title="4 stars"> 4
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="3" title="3 stars"> 3
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="2" title="2 stars"> 2
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="rating" value="1" title="1 star"> 1
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row row mb-3">
                                                <div class="form-group col">
                                                    <textarea class="form-control bg-light-5 border-0 rounded-0" placeholder="Review" rows="6" name="review" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row row mb-3">
                                                <div class="form-group col-md-6">
                                                    <input type="text" value="" class="form-control border-0 rounded-0" name="name" placeholder="Name" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="email" value="" class="form-control border-0 rounded-0" name="email" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <div class="form-row row mb-3 mt-2">
                                                <div class="col">
                                                    <input type="submit" value="POST REVIEW" class="btn btn-primary btn-rounded btn-h-2 btn-v-2 font-weight-bold">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
