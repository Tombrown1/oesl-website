@extends('frontend.app')
@section('pageTitle', 'QHSE')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('uploads/images/'.$settings->banner)}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>QHSE Commitment</h2>
      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>QHSE</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

     <!-- ======= Projet Details Section ======= -->
     <section id="project-details" class="project-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="position-relative h-100">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
  
                <img src="{{asset('uploads/services/'.$service_qhse->image)}}" class="img-fluid" alt="">
                {{-- <img src="{{asset('frontend/assets/img/oesl-breadcrumbs-bg.png')}}" class="img-fluid" alt=""> --}}
  
              </div>
            
            </div>
       
          </div>
  
          <div class="row justify-content-between gy-4 mt-4">
  
            <div class="col-lg-12">
              <div class="portfolio-description">
                <h2>{{$service_qhse->name}}</h2>
                <p>{!! $service_qhse->description !!}              </p>
               
  
                
  
           
  
              </div>
            </div>
  
           
          </div>
  
        </div>
      </section><!-- End Projet Details Section -->
  

@endsection