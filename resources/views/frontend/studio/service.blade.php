@extends('frontend.layout.app')

@section('content')
    <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-start">
                    <span class="tob-sub-title text-color-primary d-block">Wester Park Studio</span>
                    <h1 class="font-weight-bold">Hizmet Adı </h1>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                SideBar
            </div>
            <div class="col-md-8">
                content
            </div>
        </div>
    </div>
@endsection
