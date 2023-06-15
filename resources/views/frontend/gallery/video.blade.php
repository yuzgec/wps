@extends('frontend.layout.app')
@section('content')


    <section class="page-header page-header-dark page-header-text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb justify-content-start">
                        <li><a href="{{ route('home') }}">{{ __('site.home') }}</a></li>
                        <li><a href="{{ route('home') }}">Video Gallery</a></li>
                    </ul>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-md-12">
                    <h1>Video Gallery</h1>
                    <p class="lead">Wester Park Studio - Amsterdam</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-2 mt-3">
        <div class="row">
            @foreach($all as $item)
            <div class="col-lg-6  mb-5">
                <h5>{{ $item->name }}</h5>
                <div class="embed-responsive-borders border p-2">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
