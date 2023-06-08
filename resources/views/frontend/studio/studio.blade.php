@extends('frontend.layout.app')

@section('content')
    <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-start">
                    <span class="tob-sub-title text-color-primary d-block">Wester Park Studio</span>
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
    </section>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                @foreach($services->where('category',$show->category ) as $item)
                    <li>
                        <a href="{{  route('studio.detail', $item->slug )}}">{{ $item->title }}</a>
                    </li>
                @endforeach
            </div>
            <div class="col-md-8">
                {!! $show->desc !!}
            </div>
        </div>
    </div>
@endsection
