<footer id="footer" class="footer-hover-links-light" data-plugin-image-background data-plugin-options="{'imageUrl': '/frontend/img/footer/background-1.png', 'bgPosition': 'center 100%'}">
    <div class="container">
        <div class="footer-top-featured-boxes featured-boxes">
            <div class="row">
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="/frontend/img/icons/icon-1.svg" class="img-responsive appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100" alt="Icon 1" />
                        <div class="d-inline-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="150">
                            <h2 class="font-weight-bold text-4 mb-0">Amazing Videos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="/frontend/img/icons/icon-2.svg" class="img-responsive appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" alt="Icon 2" />
                        <div class="d-inline-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="350">
                            <h2 class="font-weight-bold text-4 mb-0">Complete Documentation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </a>
                </div>
                <div class="featured-box col-lg-4">
                    <a class="text-decoration-none" href="#">
                        <img src="/frontend/img/icons/icon-3.svg" class="img-responsive appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" alt="Icon 3" />
                        <div class="d-inline-block appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="550">
                            <h2 class="font-weight-bold text-4 mb-0">Fast Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 align-self-center text-center mb-5 mb-lg-0">
                <a href="{{ route('home') }}" class="logo">
                    <img src="/logo.jpg" class="img-fluid mb-lg-5" width="92" height="35" alt="EZY Website Template">
                </a>
            </div>
            <div class="col-lg-3 text-center text-lg-start mb-5 mb-lg-0">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">Get In Touch</h4>
                <ul class="list list-unstyled">
                    <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">ADDRESS</span> Zeebergweg 2
                        1051DE Amsterdam / The Netherlands</li>
                    <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">PHONE</span>
                        <a href="tel:+1234567890" class="link-color-light">Toll Free (123) 456-7890</a></li>
                    <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">
                            EMAIL</span> <a href="mailto:info@westerparkstudio.nl" class="link-color-light">info@westerparkstudio.nl</a></li>
                    <li class="text-color-light pb-1 mb-2"><span class="d-block font-weight-semibold line-height-1 text-color-grey">
                            WORKING DAYS/HOURS</span> Mon - Sun / 9:00AM - 8:00PM</li>
                </ul>
            </div>
            <div class="col-lg-3 text-center text-lg-start mb-5 mb-lg-0">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">Useful Links</h4>
                <ul class="list list-unstyled mb-0">
                    <li><a href="contact-us-1.html">Contact Us</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Services Guide</a></li>
                    <li><a href="#">Services Support</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="about-us-1.html">About EZY</a></li>
                    <li><a href="#">Our Guarantee</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="faq-1.html">FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-3 text-center text-lg-start">
                <h4 class="font-weight-bold text-4-5 pb-1 mb-3">Recent Posts</h4>
                <div class="recent-posts">
                    <ul class="list list-unstyled d-flex flex-column align-items-center align-items-lg-start">
                        <li>
                            <a href="#">This is The Post Title, Example</a>
                            <span>April 22, 2020</span>
                        </li>
                        <li>
                            <a href="#">This is The Title, Example</a>
                            <span>April 21, 2020</span>
                        </li>
                        <li>
                            <a href="#">This is The Post Title</a>
                            <span>April 20, 2020</span>
                        </li>
                        <li>
                            <a href="#">This is The Post Title Example</a>
                            <span>April 19, 2020</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row text-center text-md-start align-items-center">
                <div class="col-md-7 col-lg-8">
                    <ul class="social-icons social-icons-transparent social-icons-icon-light social-icons-lg">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-lg-4">
                    <p class="text-md-end pb-0 mb-0">{{ config('app.name') }} © {{ date('Y') }}. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
