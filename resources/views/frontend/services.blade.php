@extends('frontend.app')
@section('pageTitle', 'All Services')
@section('content')

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('uploads/images/'.$settings->banner)}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>Services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

   <!-- ======= Alt Services Section 2 ======= -->
   <section id="alt-services-2" class="alt-services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-around gy-4">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>{{$allservices->title}}</h3>
          <p>{!!($allservices->description)!!}</p>     

         
        </div>

        <div class="col-lg-6 img-bg" style="background-image: url({{asset('uploads/services/'. $allservices->image)}});" data-aos="zoom-in" data-aos-delay="100"></div>
      </div>

    </div>
  </section><!-- End Alt Services Section 2 -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        @foreach($services as $service)

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            {{-- <div class="icon">
              <i class="fa-solid fa-mountain-city"></i>
            </div> --}}
            <h3>{{$service->name}}</h3>
            <p>{!!Str::limit($service->description, 100)!!}</p>
            <a href="{{route('service.details', ['slug' => $service->slug])}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        @endforeach

      </div>

    </div>
  </section><!-- End Services Section -->

@endsection