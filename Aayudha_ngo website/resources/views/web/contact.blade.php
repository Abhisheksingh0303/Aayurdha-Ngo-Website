@extends('web.template.master')
@section('content')


<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('web/assets/img/contact-page2.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Contact Us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->


<section class="google-map-two">

            <div class="container">
            <h2 class="sec-title__contact">Contact Us</h2>
                           <div class="google-map-two__bottom">
                    <ul class="google-map-two__bottom-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="fas fa-envelope-open"></span>
                            </div>
                            <div class="content">
                            <p>Na-Kakati Gaon, Dighaldari Raha, Nagaon, Assam</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-phone"></span>
                            </div>
                            <div class="content">
                                <p><a href="tel:9435059030">+91 9435059030 </a></p>
                             
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="fas fa-map"></span>
                            </div>
                         
                            <div class="content">
                                <p><a href="mailto:aayurdhafoundation@gmail.com">aayurdhafoundation@gmail.com</a></p>
                           
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="enquiry">
    <div class="enquiry-section">
       
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
        
        <div class="col-xl-6">
            <div class="donate-one__right">
                <div class="donate-one__img">

                    <iframe width="512" height="512" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=web%20infotech&t=k&z=11&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
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