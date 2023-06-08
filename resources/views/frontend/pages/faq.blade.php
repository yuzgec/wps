@extends('frontend.layout.app')
@section('content')

    <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <h1 class="font-weight-bold">Frequently Asked Questions</h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                        <li><a href="#">Home</a></li>
                        <li class="active">F.A.Q</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="start" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div id="toggleDefault" class="accordion accordion-dark accordion-default accordion-toggle" role="tablist">
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="toggleDefault1">
                                <h5 class="mb-0">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#toggleDefaultCollapse1" aria-expanded="false" aria-controls="toggleDefaultCollapse1">Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</a>
                                </h5>
                            </div>
                            <div id="toggleDefaultCollapse1" class="collapse show" role="tabpanel" aria-labelledby="toggleDefault1">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="toggleDefault2">
                                <h5 class="mb-0">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#toggleDefaultCollapse2" aria-expanded="false" aria-controls="toggleDefaultCollapse2">Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</a>
                                </h5>
                            </div>
                            <div id="toggleDefaultCollapse2" class="collapse" role="tabpanel" aria-labelledby="toggleDefault2">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="toggleDefault3">
                                <h5 class="mb-0">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#toggleDefaultCollapse3" aria-expanded="false" aria-controls="toggleDefaultCollapse3">Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</a>
                                </h5>
                            </div>
                            <div id="toggleDefaultCollapse3" class="collapse" role="tabpanel" aria-labelledby="toggleDefault3">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header accordion-header" role="tab" id="toggleDefault4">
                                <h5 class="mb-0">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#toggleDefaultCollapse4" aria-expanded="false" aria-controls="toggleDefaultCollapse4">Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</a>
                                </h5>
                            </div>
                            <div id="toggleDefaultCollapse4" class="collapse" role="tabpanel" aria-labelledby="toggleDefault4">
                                <div class="card-body">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius. Lorem ipsum dolor sit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 appear-animation d-flex justify-content-center align-items-center" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <img src="/logo.jpg" alt=""  class="img-fluid"/>
                </div>
            </div>
        </div>
    </section>

@endsection
