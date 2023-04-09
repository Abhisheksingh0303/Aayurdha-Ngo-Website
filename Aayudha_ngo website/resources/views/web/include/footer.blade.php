<!--Start Footer One -->
<footer class="footer-one">
    <div class="footer-one__bg" style="background-image: url({{asset('web/assets/images/pattern/footer-v1-bg.jpg')}});"></div>
    <div class="shape1"><img src="{{asset('web/assets/images/shapes/footer-v1-shape1.png')}}" alt="#"></div>
    <div class="shape2"><img src="{{asset('web/assets/images/shapes/footer-v1-shape2.png')}}" alt="#"></div>
    <div class="shape3"><img src="{{asset('web/assets/images/shapes/footer-v1-shape3.png')}}" alt="#"></div>
    <!--Start Footer-->
    <div class="footer">
        <div class="container">


            <div class="footer-one__middel">
                <div class="row">

                    <!--Start Footer Widget Single-->
                    <div class="col-xl-5 col-lg-6 col-md-6  wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="footer-widget__single">
                            <div class="footer-widget__single-about">
                                <div class="logo-box">
                                    <a href="{{route('web.index')}}"><img src="{{asset('web/assets/img/logo3.jpg')}}" alt="#"></a>
                                </div>

                                <div class="footer-widget__single-about-text">
                                    <p>We operates independently of government and aims to address a specific social or
                                        environmental issue. NGOs rely on donations, grants, and volunteers to support
                                        their work, and often collaborate with other organizations to achieve their
                                        goals. we provide services, advocate for causes, or work to raise awareness and
                                        promote change.
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--End Footer Widget Single-->

                    <!--Start Footer One Right Single-->
                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp animated" data-wow-delay="0.3s"
                        style="visibility: visible;animation-delay: 0.3s;animation-name: fadeInUp;">
                        <div class="footer-one__single footer-one__single-explore">
                            <div class="title">
                                <h3>Explore Link</h3>
                            </div>
                          
                            <ul class="footer-one__single-explore-list">
                                <li><a href="{{route('web.about')}}">About</a></li>
                                <li><a href="{{route('web.objective')}}">Objective</a></li>
                                <li><a href="{{route('web.gallery')}}">Gallery</a></li>
                                <li><a href="{{route('web.donation')}}">Donation</a></li>
                                <li><a href="{{route('web.contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer One Right Single-->


                    <!--Start Footer One Right Single-->
                    <div class="col-xl-5 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-one__single footer-one__single-address">
                            <div class="title">
                                <h3>Address</h3>
                            </div>

                            <ul class="footer-one__single-address-box">
                                <li>
                                   
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-location1"></span>
                                        </div>

                                        <div class="content-box">
                                            <p>Vill : Na-Kakati Gaon. <br> P.O : Dighaldari Raha Nagaon-782103 <br>Nagaon, Assam</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                            
                                    <div class="inner">
                                        <div class="icon-box">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="content-box">
                                            <p><a href="tel:9435059030">9435059030</a></p>
                                          
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer One Right Single-->


                    <div class="footer-one__bottom">
                        <div class="container">
                            <div class="bottom-inner">
                                <div class="copyright">
                                    <p>© Copyright 2023 by <a href="#">Aayurdha</a>
                                        <a>Created by || </a>
                                        <a href="https://www.webinfotech.net.in/">WebInfotech</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

</footer>
</div>


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="icon-plus"></i>
        </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{{asset('web/assets/img/logo3.jpg')}}" alt="" />
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:aayurdhafoundation@gmail.com">aayurdhafoundation@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:9435059030">9435059030</a>
            </li>
        </ul>
        <!-- <div class="mobile-nav__social">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-pinterest-p"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>

    </div>
</div> -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-search"></i>
            </button>
        </form>
    </div>
</div>


<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <i class="icon-down-arrow"></i>
</a>

<script src="{{asset('web/assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('web/assets/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/parallax/parallax.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{asset('web/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/typed-2.0.11/typed-2.0.11.js')}}"></script>
<script src="{{asset('web/assets/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/wow/wow.js')}}"></script>
<script src="{{asset('web/assets/vendors/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('web/assets/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/slick-slider/slick.js')}}"></script>
<script src="{{asset('web/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('web/assets/vendors/progress-bar/knob.js')}}"></script>

<!-- Template js -->
<script src="{{asset('web/assets/js/custom.js')}}"></script>


</body>



</html>
<!--End Footer One-->