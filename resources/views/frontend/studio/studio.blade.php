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
                <img src="/lichtbus-huren-westerpark.jpg" class="img-fluid" >
            </div>
            <div class="col-md-9">
                {!! $show->desc !!}
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
