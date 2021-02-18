@extends('main')

@section('title', '| contact page')
@section('content')
	<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2 class="text-dark">About me</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">About me</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- About Me Start -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="{{asset('frontend/assets/img/gallery/aboutme.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-me-caption">
                            <h2>I am a Public Speaker and Life Coach</h2> 
                            <p class="pb-30  text-justify">As one of the world’s most renowned motivational speakers, Mark helps folks achieve the best versions of themselves through his dynamically diverse speaking. As a premier keynote speaker, Mark engages people of all ages to “make your mark” on the world.Mark has founded Keynote, a company sparked to kindle hope and ignite empowerment among the next generation of leaders around around. Mark is absolutely committed to motivating this next generation to be high achievers as he introduces new audiences every day to strive for success.</p>
                            .
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Me End -->
        <!-- Want To Work Start -->
		    <section class="wantToWork-area w-padding2 mt-0">
		        <div class="container">
		            <div class="row align-items-center justify-content-between">
		                <div class="col-md-12">
		                    <div class="wantToWork-caption wantToWork-caption2">
		                        <h2 class="text-center">“The ones who are crazy enough to think they can change the world, are the ones that do.”</h2>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
    <!-- Want To Work End -->

        <!--Contact Info Start --->
	    <section class="contact-info-area w-padding2" data-background="{{asset('frontend/assets/img/gallery/section_bg04.jpg')}}">
	        <div class="container">
	            <div class="row justify-content-between">
	                <div class="col-xl-5 col-lg-7">
	                  <div class="contact-caption mb-50">
	                        <h3>If Not Now, When? Let’s Work Together!</h3>
	                        <p>Feel free to get in touch & I’ll get back to you.</p>
	                        <img src="assets/img/gallery/sin.png" alt="">
	                  </div>
	                </div>
	                <div class="col-xl-5 col-lg-5">
	                    <form action="#" class="contact-wrapper">
	                        <input type="text" name="name" placeholder="Full Name">
	                        <input type="email" name="email" placeholder="Email Address">
	                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
	                        <button class="submit-btn2" type="submit">Send Message</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- Contact Info End -->        
@endsection
