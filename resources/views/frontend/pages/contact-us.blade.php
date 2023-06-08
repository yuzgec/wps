@extends('frontend.layout.app')
@section('content')

    <section class="page-header mb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <h1 class="font-weight-bold">Contact Us</h1>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <span class="top-sub-title text-color-primary appear-animation" data-appear-animation="fadeInUpShorter">LOREM IPSUM DOLOR SIT</span>
                    <h2 class="font-weight-bold appear-animation" data-appear-animation="fadeInUpShorter">Get in Touch With Us</h2>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">If you have any further questions or queries please do not hesitate to get in touch.</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon">
                                    <i class="lnr lnr-apartment text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">Address</h3>
                                    </div>
                                    <p>Zeebergweg 2 1051DE Amsterdam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12 mb-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon icon-box-icon-no-top">
                                    <i class="lnr lnr-envelope text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">Email Address</h3>
                                    </div>
                                    <p><a href="mailto:info@westerparkstudio.nl">info@westerparkstudio.nl</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                            <div class="icon-box icon-box-style-1">
                                <div class="icon-box-icon">
                                    <i class="lnr lnr-phone-handset text-color-primary"></i>
                                </div>
                                <div class="icon-box-info mt-1">
                                    <div class="icon-box-info-title">
                                        <h3 class="font-weight-bold text-4 mb-0">Phone Number</h3>
                                    </div>
                                    <p><a href="tel:+31 (0)6 3402 6844">+31 (0)6 3402 6844</a> - <a href="tel:+31 (0)20 3624 668">+31 (0)20 3624 668</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 appear-animation" data-appear-animation="fadeInRightShorter">
                    <form class="contact-form form-style-2" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>
                        <div class="contact-form-error alert alert-danger d-none">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message d-block"></span>
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col-md-6">
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col">
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="form-row row mb-3">
                            <div class="form-group col">
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-row row mb-3 mt-2">
                            <div class="col">
                                <input type="submit" value="SEND MESSAGE" class="btn btn-primary btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4870.560471781928!2d4.865162!3d52.38347!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e27951829dbd%3A0x17bb2c887feecd1d!2sWesterpark%20Studio!5e0!3m2!1str!2sus!4v1685994434771!5m2!1str!2sus"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
@endsection
