@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <section class="section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-12 text-center">
                    <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
                        <span class="top-sub-title text-color-primary"></span>
                        <h2 class="word-rotator letters scale">
                            <span>WESTERPARK</span>
                            <span class="word-rotator-words bg-primary">
										<b class="is-visible">Film Studio Verhuur</b>
										<b>Foto Studio Verhuur</b>
										<b>Apparatuur Verhuur</b>
									</span>
                            <span>AMSTERDAM</span>

                        </h2>
                    </div>
                    <p class="lead mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="200" style="animation-delay: 200ms;">WESTERPARK STUDIO is een vernieuwde en uitgebreide drive-in film en foto studio in
                        Amsterdam met vele mogelijkheden.
                    </p>
                    <p class="text-color-light-3 appear-animation animated fadeInUpShorter appear-animation-visible"
                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">Productie is tevens een onderdeel geworden van
                        onze all-in services. Mogelijk is het huren van de studio space, het huren van licht en apparatuur, maar ook de levering van sets en crew. De fotostudio
                        is op een excellente locatie gelegen vlakbij het creatieve Westergasfabriek terrein en beschikbaar voor zowel grote producties, als voor kleine shoots
                        en non-profit projecten.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <div class="overflow-hidden">
                        <span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">HI, HOW ARE YOU?</span>
                    </div>
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">How Can We Help You ?</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-baseline mb-4 pb-2">
                <div class="col-sm-6 col-lg-4 bg-white">

                    <div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-1 image-frame-style-5 mt-2">
                        <div class="image-frame-wrapper">
                            <img src="/frontend/img/generic/generic-square-17.jpg" class="img-fluid" alt="">
                            <div class="image-frame-info image-frame-info-show">
                                <div class="image-frame-info-box-style-1">
                                    <h4 class="font-weight-bold text-uppercase m-0 p-0">STUDIO VERHUUR</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="icon-box icon-box-style-3 appear-animation " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="icon-box-info mt-2">
                            <p>De studio is bijzonder uniek door onze vernieuwde 360° limbo drive-in fotostudio. Wij bieden eveneens een grote flat fotostudio wall. Binnen onze grote fotostudio kunnen tegelijkertijd meerdere shooting sets worden opgebouwd en vanuit verschillende shooting corners.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 bg-white">

                    <div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-1 image-frame-style-5 mt-2">
                        <div class="image-frame-wrapper">
                            <img src="/frontend/img/generic/generic-square-17.jpg" class="img-fluid" alt="">
                            <div class="image-frame-info image-frame-info-show">
                                <div class="image-frame-info-box-style-1">
                                    <h4 class="font-weight-bold text-uppercase m-0 p-0">CAMERA & LICHT VERHUUR</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="icon-box icon-box-style-3 appear-animation " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="icon-box-info mt-2">
                            <p>Wij hebben een totaalpakket voor uw filmproducties en fotoshoots,waardoor uw producties kosten- en tijdbesparend worden. Een diversiteit aan LED lichten, ARRIMAX en ARRISUN-range, Briese, de nieuwste Kino Flo, Jokerbug, Profoto, Broncolor, Chimeras & Octadomes en specifieke greenscreen belichting. Grip is tevens beschikbaar.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 bg-white">
                    <div class="image-frame overlay overlay-show overlay-op-5 image-frame-style-1 image-frame-effect-1 image-frame-style-5 mt-2">
                        <div class="image-frame-wrapper">
                            <img src="/frontend/img/generic/generic-square-17.jpg" class="img-fluid" alt="">
                            <div class="image-frame-info image-frame-info-show">
                                <div class="image-frame-info-box-style-1">
                                    <h4 class="font-weight-bold text-uppercase m-0 p-0">EVENTS</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="icon-box icon-box-style-3 appear-animation " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="icon-box-info mt-2">
                            <p>Westerpark Studio Amsterdam is ook te huur voor presentaties, bedrijfsfeesten, evenementen, modeshows, dansrepetities, oefenruimte en workshops.
                                Studioverhuur inclusief camera's, decors, Arri, Briese, Tungsten, HMI, andere podium verlichting en studio assistenten.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

