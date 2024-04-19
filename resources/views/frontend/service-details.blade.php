@extends('frontend.app')
@section('pageTitle', $serviceDetail->name)
@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('uploads/images/'.$settings->banner)}}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{$serviceDetail->name}}</h2>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>{{$serviceDetail->name}}</li>
        </ol>

      </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Service Details Section ======= -->
  <section id="service-details" class="service-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <h3>{{$serviceDetail->name}}</h3>

      <div class="row gy-4"> 
        <div class="col-lg-8">
          <img src="{{asset('uploads/services/'.$serviceDetail->image)}}" alt="" height="400" class="img-fluid services-img">
          <h4>{{$serviceDetail->name}}</h4>
          <p>{!!($serviceDetail->description)!!}</p>
         
        
        </div>
        <div class="col-lg-4">
          <h4>Other Services</h4>
          <div class="services-list">
            @foreach($services as $service)
              <a href="{{route('service.details', ['slug' => $service->slug])}}">{{$service->ServiceCat->name}}</a>
            @endforeach
           
          </div>
         
        </div>
      </div>

    </div>
  </section><!-- End Service Details Section -->

   

@endsection