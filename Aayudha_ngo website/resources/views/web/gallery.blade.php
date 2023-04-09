
@extends('web.template.master')
@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('web/assets/img/gallery.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Our Gallery</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->




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
                          <a href="{{asset('web/assets/img/gallery/g7.jpg')}}" class="img-popup">
                            <span class="icon-plus-symbol"></span></a>
                           

                                  
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

@endsection