@extends('web.template.master')
@section('content')

<!--Start Main Slider -->
<section class="main-slider main-slider-one">
    <div class="main-slider-one__inner">
        <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel nav-style1 dot-style1"
            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "animateOut": "slideOutDown",
                            "animateIn": "fadeIn",
                            "margin": 0,
                            "nav": true,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-arrow-right1\"></span>","<span class=\"icon-arrow-right\"></span>"],
                            "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>

            <!--Start Main Slider One Single-->
            <div class="main-slider-one__single">
                <div class="image-layer" style="background-image:url({{asset('web/assets/img/slide1.jpg')}})">
                
                </div>
                <!-- <div class="shape1"><img src="assets/images/shapes/main-slider-v1-shape1.png" alt="#"></div>
                <div class="shape2"><img src="assets/images/shapes/main-slider-v1-shape2.png" alt="#"></div> -->

                <div class="container">
                    <div class="main-slider-one__content">
                        <div class="tagline">
                            <span>Our Environment is Our Life.</span>
                        </div>
                        <div class="title">
                            <h2>Environment is life,<br>pollution is death.</h2>
                        </div>

                        <div class="text">
                            <p>We want to make giving simple, fun and meaningful for you. <br> The
                                possibilities
                                are endless!</p>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{route('web.contact')}}">
                                <span class="txt">Contact Us</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!--End Main Slider One Single-->

            <!--Start Main Slider One Single-->
            <div class="main-slider-one__single">
                <div class="image-layer" style="background-image:url({{asset('web/assets/img/slide2.jpg')}})">
                </div>
                <!-- <div class="shape1"><img src="assets/images/shapes/main-slider-v1-shape1.png" alt="#"></div>
                <div class="shape2"><img src="assets/images/shapes/main-slider-v1-shape2.png" alt="#"></div> -->

                <div class="container">
                    <div class="main-slider-one__content">
                        <div class="tagline">
                            <span>Safer the environment healthier the life!</span>
                        </div>
                        <div class="title">
                            <h2>Go Green <br>Grow Enviroment</h2>
                        </div>

                        <div class="text">
                            <p>We want to make giving simple, fun and meaningful for you. <br> The
                                possibilities
                                are endless!</p>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{route('web.contact')}}">
                                <span class="txt">Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Slider One Single-->

            <!--Start Main Slider One Single-->
            <div class="main-slider-one__single">
                <div class="image-layer" style="background-image:url({{asset('web/assets/img/slide3.jpg')}})">
                </div>
                <!-- <div class="shape1"><img src="assets/images/shapes/main-slider-v1-shape1.png" alt="#"></div>
                <div class="shape2"><img src="assets/images/shapes/main-slider-v1-shape2.png" alt="#"></div> -->

                <div class="container">
                    <div class="main-slider-one__content">
                        <div class="tagline">
                            <span>Nature is our Mother</span>
                        </div>
                        <div class="title">
                            <h2>For this earth we adore,<br> let’s all do more!</h2>
                        </div>

                        <div class="text">
                            <p>We want to make giving simple, fun and meaningful for you. <br> The
                                possibilities
                                are endless!</p>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="{{route('web.contact')}}">
                                <span class="txt">Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Slider One Single-->
        </div>
    </div>
</section>
<!--End Main Slider-->



<!--Start About One -->
<section class="about-one">
    <div class="shape5 float-bob-y"><img src="assets/images/shapes/about-v1-shape3.png" alt="#"></div>
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

<!--         
        <div class="about-one__bottom">
            <div class="about-one__bottom-inner">
                <div class="about-one__bottom-content">
                    <div class="icon-box">
                        <span class="icon-donation-2"></span>
                    </div>

                    <div class="text-box">
                        <h2>Since 1980, we’ve granted more than <br> 120,000 wishes all over the world.</h2>
                    </div>
                </div>

                <div class="about-one__bottom-btn">
                    <a class="thm-btn" href="about.html">
                        <span class="txt">Learn About us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--End About One -->

<!-- <section class="objective-section">
    <h2 class="sec-title__title_objective">Objectives</h2>

    <ul>
        <li>
            <p>To make people aware of the environment pollution cause by human himself.</p>
        </li>
        <li>
            <p>To conduct short training course at suitable centre for the interested of forestation and other related
                programmers.
            </p>
        </li>
        <li>
            <p>To undertake tree plantation drive as a massive scale to check deformation.
            </p>
        </li>

        <li>
            <p>To provide financial or any other assistance towar relief and rehabilitazation of
                the population affected by calamities like cyclone, earthquake etc.</p>
        </li>
        <li>
            <p>To Set up Digital Archive to preserve works of famous personalities, indigenous
                caste & communities and to publish them through web publishing and other</p>
        </li>
        <li>
            <p>To set up yoga and naturopathy camps in all across the country.
            </p>
        </li>
        <li>
            <p>Establish of all kind of scientific research center.
            </p>
        </li>
        <li>
            <p>Looking for a position that allows me to expand my skill set, gain valuable experience, and advance in
                my career.</p>
        </li>
        <li>
            <p>Interested in a role that offers opportunities for professional development, training, and mentorship.
            </p>
        </li>
    </ul>
    
</section> -->


<!-- objective section -->
<section class="mission-vision">
  <h2 class="sec-title__title_objective">Our Objective</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="mission">
        <i class="fas fa-tree"></i> 
          <h2>Forest and Environment</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="vision">
        <i class="fas fa-palette"></i>
          <h2>Art & <br>Culture</h2>
         
        </div>
      </div>
      <div class="col-md-3">
        <div class="vision">
        <i class="fas fa-hands-helping"></i>
          <h2>Rural Development</h2>
        </div>
      </div>
      <div class="col-md-3">
        <div class="mission">
        <i class="fas fa-microscope"></i>
          <h2>Science & Technology</h2>
        </div>
      </div>
    </div>
  </div>
 
  <a class="obj-btn" href="{{route('web.objective')}}">
        <span class="txt">View More</span> </a>

</section>


<!--Gallery Two Start-->

<section class="gallery-two">
  <div class="container">
      <div class="section-title text-center">
          <span class="section-title__tagline"></span>
          <h2 class="section-title__title_gallery">Photo Gallery</h2>
      </div>
      <div class="row">
          <!--Gallery Two Single Start-->
 
       <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g7.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g7.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Gallery Two Single End-->
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                  <img src="{{asset('web/assets/img/gallery/g2.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g2.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Gallery Two Single End-->
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g3.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g3.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Gallery Two Single End-->
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g4.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g4.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  
                  </div>
              </div>
          </div>


          <div class="row">
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g5.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g5.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Gallery Two Single End-->
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g6.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g6.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Gallery Two Single End-->
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g1.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g1.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Gallery Two Single End-->
          <!--Gallery Two Single Start-->
          <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="gallery-two__single">
                  <div class="gallery-two__img">
                      <img src="{{asset('web/assets/img/gallery/g8.jpg')}}" alt="">
                      <div class="gallery-two__img-icon">
                          <a href="{{asset('web/assets/img/gallery/g8.jpg')}}" class="img-popup"><span
                                  class="icon-plus-symbol"></span></a>
                      </div>
                  
                  </div>
              </div>
          </div>

          
          <!--Gallery Two Single End-->
      </div>
  </div>
</section>
<!--Gallery Two End-->

<!-- Member section -->
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





<section class="enquiry">
    <div class="enquiry-section">
        <h2 class="sec-title__contact">Contact Us</h2>
        <div class="enquiry-form">

            <form novalidate>
                <h2>Send us an enquiry </h2>
                <label for="name">Name <i class="fa fa-user"></i></label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Phone <i class="fa fa-phone"></i></label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email <i class="fa fa-envelope"></i></label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message <i class="fa fa-comments" aria-hidden="true"></i></label>
                <textarea id="message" name="message" required></textarea>

                <a class="contact-btn" href="{{route('web.index')}}"> 
                    <span class="txt">Send a Message <i class="fa fa-location-arrow"></i></span> </a>
            </form>
        </div>
        <div class="enquiry-image">
            <img src="{{asset('web/assets/img/contact2.png')}}" alt="Enquiry Image">
        </div>
    </div>
</section>

<script>
  const form = document.querySelector('.enquiry-form form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (!name) {
      document.getElementById('name').setCustomValidity('Please enter your name');
      return false;
    }

    if (!phone) {
      document.getElementById('phone').setCustomValidity('Please enter your phone number');
      return false;
    }

    if (!email || !RegExp('^\\S+@\\S+\\.\\S+$').test(email)) {
      document.getElementById('email').setCustomValidity('Please enter a valid email address');
      return false;
    }

    if (!message) {
      document.getElementById('message').setCustomValidity('Please enter a message');
      return false;
    }

    // All fields are valid, allow form submission
    return true;
  });
</script>


@endsection