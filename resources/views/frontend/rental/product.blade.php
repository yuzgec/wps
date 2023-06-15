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
                    <h1 class="font-weight-bold">{{ $product->title }}</h1>
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
                <div class="row mb-5">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="thumb-gallery-wrapper">
                            <div class="thumb-gallery-detail owl-carousel owl-theme manual dots-style-2 nav-style-2 nav-color-dark mb-3">
                                <div>
                                    <img src="/frontend/img/products/product-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <img src="/frontend/img/products/product-1-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <img src="/frontend/img/products/product-1-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <img src="/frontend/img/products/product-1-4.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                                <div>
                                    <span class="d-block">
                                        <img alt="Product Image" src="/frontend/img/products/product-1.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="d-block">
                                        <img alt="Product Image" src="/frontend/img/products/product-1-2.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="d-block">
                                        <img alt="Product Image" src="/frontend/img/products/product-1-3.jpg" class="img-fluid">
                                    </span>
                                </div>
                                <div>
                                    <span class="d-block">
                                        <img alt="Product Image" src="/frontend/img/products/product-1-4.jpg" class="img-fluid">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="line-height-1 font-weight-bold mb-2">
                            <a href="shop-product-detail-left-sidebar.html.html" class="text-color-dark">{{ $product->title }}</a>
                        </h2>
                        <div class="product-info-rate d-flex mb-3">
                            <i class="fas fa-star text-color-default me-1"></i>
                            <i class="fas fa-star text-color-default me-1"></i>
                            <i class="fas fa-star text-color-default me-1"></i>
                            <i class="fas fa-star text-color-default me-1"></i>
                            <i class="fas fa-star text-color-default me-1"></i>
                        </div>
                        <span class="price font-primary text-4"><strong class="text-color-dark">1Day $10</strong></span>
                        <span class="old-price font-primary text-line-trough text-2"><strong class="text-color-default">Next Day $20</strong></span>

                        <p class="mt-4">{{ $product->short }}</p>
                        <hr class="my-4">
                        <ul class="list list-unstyled">
                            <li>AVAILABILITY: <strong>AVAILABLE</strong></li>
                            <li>SKU: <strong>{{ $product->sku }}</strong></li>
                        </ul>
                        <hr class="my-4">
                        <form class="shop-cart d-flex align-items-center" method="post" enctype="multipart/form-data">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="2">
                                <input type="button" value="+" class="plus">
                            </div>
                            <button type="submit" class="add-to-cart btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-h-2 btn-fs-2 ms-3">ADD TO CART</button>
                        </form>
                        <hr class="my-4">
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
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-bold text-4 mb-4">Related Products</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-4 mb-4">
                        <div class="product portfolio-item portfolio-item-style-2">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
											<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
												<a href="shop-product-detail-right-sidebar.html">
													<img src="/frontend/img/products/product-1.jpg" class="img-fluid" alt="">
												</a>
												<span class="image-frame-action">
													<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
												</span>
											</span>
                            </div>
                            <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                                <div class="product-info-title">
                                    <h3 class="text-color-default text-2 line-height-1 mb-1"><a href="shop-product-detail-right-sidebar.html">Long Hoddie</a></h3>
                                    <span class="price font-primary text-4"><strong class="text-color-dark">$59</strong></span>
                                    <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">$69</strong></span>
                                </div>
                                <div class="product-info-rate d-flex">
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-4">
                        <div class="product portfolio-item portfolio-item-style-2">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
											<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
												<a href="shop-product-detail-right-sidebar.html">
													<img src="/frontend/img/products/product-2.jpg" class="img-fluid" alt="">
												</a>
												<span class="image-frame-action">
													<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
												</span>
											</span>
                            </div>
                            <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                                <div class="product-info-title">
                                    <h3 class="text-color-default text-2 line-height-1 mb-1"><a href="shop-product-detail-right-sidebar.html">Leather Belt</a></h3>
                                    <span class="price font-primary text-4"><strong class="text-color-dark">$19</strong></span>
                                    <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">$29</strong></span>
                                </div>
                                <div class="product-info-rate d-flex">
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-4">
                        <div class="product portfolio-item portfolio-item-style-2">
                            <div class="image-frame image-frame-style-1 image-frame-effect-2 mb-3">
											<span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
												<a href="shop-product-detail-right-sidebar.html">
													<img src="/frontend/img/products/product-3.jpg" class="img-fluid" alt="">
												</a>
												<span class="image-frame-action">
													<a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD TO CART</a>
												</span>
											</span>
                            </div>
                            <div class="product-info d-flex flex-column flex-lg-row justify-content-between">
                                <div class="product-info-title">
                                    <h3 class="text-color-default text-2 line-height-1 mb-1"><a href="shop-product-detail-right-sidebar.html">Jack Sandals</a></h3>
                                    <span class="price font-primary text-4"><strong class="text-color-dark">$30</strong></span>
                                    <span class="old-price font-primary text-line-trough text-1"><strong class="text-color-default">$40</strong></span>
                                </div>
                                <div class="product-info-rate d-flex">
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default me-1"></i>
                                    <i class="fas fa-star text-color-default"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
