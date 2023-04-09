@extends('web.template.master')
@section('content')



<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('web/assets/img/objective-page.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Our Objectives</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->


<!--Start Case One -->
<section class="case-one">
    <div class="case-one__bg" style="background-image: url({{asset('web/assets/images/backgrounds/case-v1-bg.jpg')}});"></div>
    <div class="auto-container">
        <div class="sec-title text-center">

            <h2 class="sec-title__title_objective_one">Objectives</h2>
        </div>
        <div class="row">
            <!--Start Case One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/forest.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Forest and Environment
                            </h2>
                        </div>


                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Case One Single-->

            <!--Start Case One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/art.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Art & Cultur
                            </h2>
                        </div>

                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Case One Single-->

            <!--Start Case One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/rural-dev.jpg')}}" alt="#">
                        </div>
                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Rural Development
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Case One Single-->

            <!--Start Case One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/science-tech.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Science & Technology
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>




      <!--Start Case One Single-->
      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/education.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Education
                            </h2>
                        </div>

                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Case One Single-->

            <!--Start Case One Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/health.jpg')}}" alt="#">
                        </div>
                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Health and family welfare
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Case One Single-->

           


                    <!--Start Case One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/social.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Social Welfare
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->


                    <!--Start Case One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/sports.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Sports & Youth Welfare
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->


                    <!--Start Case One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/turism.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Tourism & Archeology
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->



                    <!--Start Case One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/handy.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Handloom & Handicraft
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->



                    <!--Start Case One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/skill.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Skill Development
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->

             <!--Start Case One Single-->
             <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/child-dev.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Women & Child development program
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->

        <!--Start Case One Single-->
        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/agriculture.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>Agriculture & Animal Husbandry
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->

                    <!--Start Case One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                <div class="case-one__single">
                    <div class="case-one__single-img">
                        <div class="inner">
                            <img src="{{asset('web/assets/img/objective/st-obc.jpg')}}" alt="#">
                        </div>

                    </div>

                    <div class="case-one__single-content">
                        <div class="inner">
                            <div class="case-one__single-content-bg"
                                style="background-image: url(assets/images/shapes/case-v1-shape1.png);"></div>
                            <h2>ST/SC/OBC and Minority Development
                            </h2>
                        </div>
                        <div class="bottom-text">
                            <div class="left-text">

                            </div>
                            <div class="right-text">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!--End Case One Single-->


            <!--End Case One Single-->

        </div>
    </div>
   
</section>
<!--End Case One -->


@endsection