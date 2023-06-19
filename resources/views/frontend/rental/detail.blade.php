@extends('frontend.layout.rental.app')
@section('content')

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('rental') }}">Rental</a></li>
                        <li class="active">{{ $show->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ $show->title }} - Verhuur</h1>
                    <br><span>{{ count($all) }} products</span>
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
                    @foreach($all as $item)
                        <div class="col-sm-6 col-md-4 mb-3">
                            <div class=""  style="border:1px solid #e3e3e3">
                                <div class="image-frame image-frame-style-1 image-frame-effect-1 mb-3">
                                    <span class="image-frame-wrapper image-frame-wrapper-overlay-bottom image-frame-wrapper-overlay-light image-frame-wrapper-align-end">
                                        <a href="{{ route('product', [$show->slug, $item->slug]) }}" title="{{ $item->title }}">
                                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page', 'img')}}" class="img-fluid" alt="">
                                        </a>
                                        <span class="image-frame-action">
                                            <a href="#" class="btn btn-primary btn-rounded font-weight-semibold btn-v-3 btn-fs-2">ADD WISHLIST</a>
                                        </span>

                                    </span>
                                </div>

                                <h3 class="text-color-default text-3 line-height-1" style="margin-left:8px">
                                    <a href="{{ route('product', [$show->slug, $item->slug]) }}" title="{{ $item->title }}">
                                        {{ $item->title }}
                                    </a>
                                </h3>

                                <div class="row d-flex align-items-center justify-content-center m-0" >
                                    <div class="col-4" style="border:1px solid #e3e3e3">
                                        <span class="price font-primary text-2 font-weight-bold text-black">First Day
                                        <br>€{{ $item->price }}</span>
                                    </div>

                                    <div class="col-4"  style="border:1px solid #e3e3e3">
                                        <span class="price font-primary text-2 font-weight-bold text-black-50">Next Days
                                        <br>€{{ $item->price / 2 }}</span>
                                    </div>
                                    <div class="col-4 text-center" style="border:1px solid #e3e3e3">
                                        <img src="{{ $item->getBrand->getFirstMediaUrl('page') }}" alt="" class="img-fluid" style="width: 60px">
                                        <span class="badge bg-success" style="font-size:10px">Available</span>

                                    </div>

                                </div>
                                <div class="product-info ">
                                    <div class="product-info-title">

                                    </div>


                                </div>


                            </div>
                        </div>
                    @endforeach
                </div>
                <hr class="mt-5 mb-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mb-3 mb-sm-0">
                        <span>Showing ({{ count($all) }}) results</span>
                    </div>
                    <div class="col-auto">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('customJS')
    <script>
        $(document).ready(function() {
            $("table").addClass("table table-hover table-striped table-bordered table-responsive");
            $("img").addClass('img-fluid');
        })
    </script>
@endsection
