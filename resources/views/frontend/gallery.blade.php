@extends('main')

@section('gallerystyle')

   <!--  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/gallery.css')}}">
 -->
@endsection

@section('title', '| Gallery page')

@section('content')
	<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                               <h2 class="text-dark text-center">Media & Photos from my latest engagements</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="column">
                    <img src="{{asset('frontend/assets/img/a.jpg')}}">
                    <img src="{{asset('frontend/assets/img/b.jpg')}}">
                    
                </div>
                <div class="column">
                	<img src="{{asset('frontend/assets/img/c.jpg')}}">
                    <img src="{{asset('frontend/assets/img/d.jpg')}}">
                    
                </div>
                <div class="column">
                    <img src="{{asset('frontend/assets/img/e.jpg')}}">
                    <img src="{{asset('frontend/assets/img/j.jpg')}}">
                </div>
                <div class="column">
                    <img src="{{asset('frontend/assets/img/h.jpg')}}"> 
                    <img src="{{asset('frontend/assets/img/f.jpg')}}">
                </div>
                </div>
            </div>
@endsection
<!-- Hero End -->