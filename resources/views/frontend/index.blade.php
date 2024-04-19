@extends('frontend.app')
@section('pageTitle', 'Home')
@section('content')


     <!-- ======= Hero Section ======= -->
     @include('frontend.body.heroslider')
     <!-- End Hero Section -->

      
      <!-- ======= Mission/Value Section ======= -->
      <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Ofrima Energy Services Limited</h2>
            <p>is pride with multi-skilled personnel, innovative technologies, teamwork which are the key factors underlying our reputation</p>
          </div>
  
          <div class="row gy-4">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="col-xl-12 d-flex align-items-center">
                    <div class="card-body">
                        <h4 class="card-title">Our Vision</h4>
                        <p>{!! nl2br(e($settings->vision))!!}</p>
                    </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card-item">
                <div class="col-xl-12 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Our Mission</h4>
                      <p>{!! nl2br(e($settings->mission))!!}</p>
                    </div>
                  </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="col-xl-12 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">Our Core Values</h4>
                      <p>{!! nl2br(e($settings->core_value))!!}</p>
                    </div>
                  </div>
              </div>
            </div><!-- End Card Item -->
  
          </div>
  
        </div>
      </section><!-- End Constructions Section -->
  
      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Services</h2>
            <p>At Ofrima Energy Services Limited, we are committed to delivering comprehensive and innovative solutions to meet the diverse needs of the oil and gas sector.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="{{route('index.services')}}" class="btn-get-started">Read More </a>
            
          </div>
  
          <div class="row gy-4">
            @foreach($services as $service)
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-mountain-city"></i>
                </div>
                <h3>{{$service->name}}</h3>
                <p>{!! Str::limit($service->description, 100) !!}</p>
                <a href="{{route('service.details', ['slug' => $service->slug])}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            @endforeach
           
  
          </div>
  
        </div>
      </section><!-- End Services Section -->  
      
        <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>What we do</h2>
        </div>
        <ul class="nav nav-tabs row  g-2 d-flex">
          @foreach($projects as $key => $project)
          <li class="nav-item col-3">
            <a class="nav-link  show {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" data-bs-target="#tab-1{{$project->id}}">
              <h4>{{$project->ProjectCat->name}}</h4>
            </a>
          </li><!-- End tab nav item -->
          @endforeach
          {{-- <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>PVT ANALYSIS</h4>
            </a><!-- End tab nav item -->
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>PROJECT MANAGEMENT</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>PROCUREMENT</h4>
            </a>
          </li><!-- End tab nav item --> --}}

        </ul>

        @foreach($projects as $key => $project)
        <div class="tab-content">
          <div class="tab-pane  show {{$key == 0 ? 'active' : '' }}" id="tab-1{{$project->id}}">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>{{$project->title}}</h3>
                
                <ul>
                 <p>  {!! ($project->description) !!}</p></ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('uploads/projects/'.$project->image)}}" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End tab content item -->         

        </div>
        @endforeach

      </div>
    </section><!-- End Features Section -->
     
     
  
     
  
      
  
    </main><!-- End #main -->

    

@endsection