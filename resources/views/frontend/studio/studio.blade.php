@extends('frontend.layout.app')

@section('content')


    <section class="page-header page-header-dark page-header-text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb justify-content-start">
                        <li><a href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                        <li><a href="{{ route('home') }}">{{ __('site.studio') }}</a></li>
                        <li class="active">{{ $show->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-md-12">
                    <h1>{{ $show->title }}</h1>
                    <p class="lead">Wester Park Studio - Amsterdam</p>
                </div>
            </div>
        </div>
    </section>


  {{--  <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-start">
                    <span class="tob-sub-title text-color-primary d-block">Wester Park Studio - Amsterdam</span>
                    <h1 class="font-weight-bold">{{ $show->title }} </h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                        <li><a href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                        <li><a href="{{ route('home') }}">{{ __('site.studio') }}</a></li>
                        <li class="active">{{ $show->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>--}}

    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-md-3">
                <ul class="list list-unstyled list-borders">
                    @foreach($services->where('category',$show->category ) as $item)
                        <li class="mb-2 active"><i class="fas fa-angle-right text-color-primary ms-1 me-1 pe-2"></i>
                            <a href="{{  route('studio.detail', $item->slug )}}" class="">{{ $item->title }}</a>
                        </li>
                    @endforeach
                </ul>

                <h2 class="font-weight-bold text-3 mb-3">Quik Contact</h2>
                <form class="form-style-2" action="#" method="post">
                    @csrf
                    <input type="hidden" name="service_name" value="{{ $show->title }}">
                    <div class="form-row row mb-3">
                        <div class="form-group col">
                            <input type="text" value="" class="form-control border-0 rounded-0" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-row row mb-3">
                        <div class="form-group col">
                            <input type="email" value="" class="form-control border-0 rounded-0" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-row row mb-3">
                        <div class="form-group col">
                            <input type="text" value="" class="form-control border-0 rounded-0" name="email" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="form-row row mb-3">
                        <div class="form-group col">
                            <textarea class="form-control bg-light-5 border-0 rounded-0" placeholder="Review" rows="6" name="review" required></textarea>
                        </div>
                    </div>
                    <div class="form-row row mb-3 mt-2">
                        <div class="col">
                            <input type="submit" value="SEND MESSAGE" class="btn btn-primary btn-rounded btn-block btn-h-2 btn-v-2 font-weight-bold">
                        </div>
                    </div>
                </form>
                <img src="/lichtbus-huren-westerpark.jpg" class="img-fluid" >
            </div>
            <div class="col-md-9">
                {!! $show->desc !!}
                <div class="lightbox mt-3" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="row">
                        @foreach($show->getMedia('gallery') as $item)
                            <div class="col-md-3 mb-3 ">
                                <a href="{{ $item->getUrl('img') }}">
                                    <img class="img-fluid" src="{{ $item->getUrl('thumb') }}" alt="{{ $show->title.' - '.$all->title.' - Wester Park Studio Amsterdam'}}">
                                </a>
                            </div>
                        @endforeach
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
