@extends('frontend.app')
@section('pageTitle', 'Projects')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('uploads/images/'.$settings->banner)}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Project</h2>
      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>Project</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Projects</h2>
            <p>{!!$project_overview->description!!}</div>
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              {{-- <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-remodeling">Explorations</li>
              <li data-filter=".filter-design">Productions</li>
              <li data-filter=".filter-repairs">Infastructure</li>
              <li data-filter=".filter-construction">Construction</li> --}}
              @foreach($projects as $item)
              {{-- <li data-filter="*" class="filter-active">All</li> --}}
              <li data-filter=".filter-{{$item->id}}">{{$item->title}}</li>

              @endforeach
            </ul><!-- End Projects Filters -->
  
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($projects as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->id}}">
                    <div class="portfolio-content h-100">
                    <img src="{{asset('uploads/projects/'.$item->image)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Remodeling 1</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="{{asset('uploads/projects/'.$item->image)}}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                    </div>
                </div>
                
                @endforeach
                <!-- End Projects Item -->
            </div>
  
        </div>
    </section><!-- End Our Projects Section -->
  



@endsection