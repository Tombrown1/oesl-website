<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>OESL</span></h2>
            <p data-aos="fade-up">We are a World Class Service Solution provider “With the ever expanding possibilities in the oil and gas industry</p>
            {{-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a> --}}
            <a data-aos="fade-up" data-aos-delay="200" href="{{route('index.services')}}" class="btn-get-started">Discover More </a>
          </div>
        </div>
      </div>
    </div>
    
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      @foreach($sliders as $key => $slider)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{asset('uploads/Slider/'.$slider->image)}})"></div>
      @endforeach

      {{-- <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/hero-carousel-2.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/hero-carousel-3.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/hero-carousel-4.jpg')}})"></div>
      <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/hero-carousel-5.jpg')}})"></div> --}}
      

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->