@extends('frontend.layout.app')
@section('content')
    <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-start">
                    <span class="tob-sub-title text-color-primary d-block">Wester Park Studio</span>
                    <h1 class="font-weight-bold">{{ $show->title }}</h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('home') }}">Foto Gallery</a></li>
                        <li class="active">{{ $show->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <div class="container">

        <div class="row mt-5">

            <div class="col">


                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="row">
                        @foreach($all as $item)
                        <div class="col-md-3 mb-5 mb-md-0">
                            <a href="img/projects/generic/project-14.jpg">
                                <img class="img-fluid" src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page', 'img')}}" alt="Project Image">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>

        </div>




    </div>


@endsection
