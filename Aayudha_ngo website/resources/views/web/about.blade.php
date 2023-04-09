@extends('web.template.master')
@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('web/assets/img/ser-bg4.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>About us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->



<!--Start About One -->
<section class="about-one">
    <div class="shape5 float-bob-y"><img src="{{asset('web/assets/images/shapes/about-v1-shape3.png')}}" alt="#"></div>
    <div class="container">
        <div class="row">
            <!--Start About One Content-->
            <div class="col-xl-7">
                <div class="about-one__content">
                    <div class="sec-title">
                        <h2 class="sec-title__title">About Us</h2>
                    </div>
                    <div class="about-one__content-text">
                        <p>Our organization is a non-profit entity that is committed to promoting sustainable development in various areas of society. We believe that every individual has the right to equal opportunities to grow and prosper, and we strive to create a society that is inclusive and equitable for all.

                            Our team consists of dedicated professionals who are passionate about bringing positive change to society. We work in close collaboration with various stakeholders such as government agencies, NGOs, and local communities to implement innovative solutions for the upliftment of society.

                            Our organization focuses on various areas such as forest and environment, art and culture, rural development, science and technology, education, health and family welfare, women and child development program, agriculture and animal husbandry, social welfare, sports and youth welfare, tourism and archaeology, handloom and handicraft, skill development, and ST/SC/OBC and minority development. Our programs are designed to cater to the specific needs of different communities, and we are constantly innovating to ensure that our programs are effective in creating positive change.</p>
                    </div>
                    <div class="about-one__content-bottom">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__content-bottom-left">
                                    <div class="single-box">
                                        <!-- <div class="inner">
                                            <div class="icon-box">
                                                <div class="shape1"></div>
                                                <span class="icon-donation-4"></span>
                                            </div>

                                            <div class="content-box">
                                                <h2>Fundrising</h2>
                                                <p>Lorem ipsum dolor sit amet tetur nod adipisicing elit sed</p>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="single-box mb0">
                                        <!-- <div class="inner">
                                            <div class="icon-box">
                                                <div class="shape1"></div>
                                                <span class="icon-donation-1"></span>
                                            </div>

                                            <div class="content-box">
                                                <h2>Make Donation</h2>
                                                <p>Lorem ipsum dolor sit amet tetur nod adipisicing elit sed</p>
                                            </div>
                                        </div> -->
                                    </div>

                                    <!-- <ul class="about-one__content-bottom-left-list">
                                        <li>
                                            <p>Raised For Charities</p>
                                        </li>
                                        <li>
                                            <p>Registered Charities Supported</p>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__content-bottom-right">
                                    <div class="about-one__helped-fund text-center">
                                        <!-- <div class="shape3 float-bob-y"></div> -->
                                        <!-- <div class="about-one__helped-fund-bg"
                                            style="background-image: url(assets/images/backgrounds/about-v1-bg.png);">
                                        </div> -->
                                        <div class="img-box">
                                            <div class="inner">
                                                <!-- <img src="assets/images/about/about-v1-img1.jpg" alt="#"> -->
                                            </div>

                                        </div>

                                        <!-- <div class="content-box">
                                            <h2>34,434</h2>
                                            <h3>Helped fund </h3>
                                            <p>Wishes all over the world.</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End About One Content-->

            <!--Start About One Img-->
            <div class="col-xl-5">
                <div class="about-one__img">
                    <div class="about-one__img-inner">
                        <!-- <div class="shape4"><img src="assets/images/shapes/about-v1-shape2.png" alt="#"></div> -->
                        <img src="{{asset('web/assets/img/about3.jpg')}}" alt="#">
                    </div>
                </div>
            </div>
            <!--End About One Img-->
        </div>
</section>



<!-- mission and vision -->
<section class="mission-vision">
    <h2 class="sec-title__about_mission-vision">Mission & Vision</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h2>Our Mission</h2>
                    <p>Our organization is dedicated to promoting sustainable development by providing innovative solutions for the upliftment of society in the fields of forest and environment, art and culture, rural development, science and technology, education, health and family welfare, women and child development program, agriculture and animal husbandry, social welfare, sports and youth welfare, tourism and archaeology, handloom and handicraft, skill development, and ST/SC/OBC and minority development.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vision">
                    <i class="far fa-lightbulb"></i>
                    <h2>Our Vision</h2>
                    <p>Our vision is to create a society where every individual has equal opportunities to grow and prosper. We aim to achieve this by promoting sustainable development through the implementation of various programs in the areas of forest and environment, art and culture, rural development, science and technology, education, health and family welfare, women and child development program, agriculture and animal husbandry, social welfare, sports and youth welfare, tourism and archaeology etc.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- our member -->
<section class="members-section">
    <h2 class="sec-title__about_member">Our Trustee</h2>
    <div class="members-container">
        <div class="member-card">
            <img src="{{asset('web/assets/img/trustee3.jpg')}}" alt="Jane Doe">
            <h3>Rinkoo</h3>
            <p>Chairman</p>
        </div>
        <div class="member-card">
            <img src="{{asset('web/assets/img/trustee2.jpg')}}" alt="Jane Doe">
            <h3>Rekha</h3>
            <p>Member</p>
        </div>
        <div class="member-card">
            <img src="{{asset('web/assets/img/trustee1.jpg')}}" alt="John Smith">
            <h3>Bablu</h3>
            <p>Trustee</p>
        </div>
    </div>
</section>

@endsection