@extends('frontend.app')
@section('pageTitle', 'Contact')
@section('content')

 <!-- ======= Breadcrumbs ======= -->
 {{-- <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('frontend/assets/img/oesl-breadcrumbs-bg.png')}}');"> --}}
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('uploads/images/'.$settings->banner)}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Contact Us</h2>
      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>Contact Us</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Our Address</h3>
            <p><Address><strong>Head Office:</strong> <br> {!! nl2br(e($settings->address))!!} <br><br>
            <strong>USA Office:</strong><br> {!! nl2br(e($settings->address2))!!}
            </Address></p>
            {{-- <p><Address>USA Office: {!! nl2br(e($settings->address2)) !!}</Address></p> --}}
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>
                {{$settings->email}} <br>
                {{$settings->email2}}
            </p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>{{$settings->phone}} <br>
            </p>{{$settings->phone2}}
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">

        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15901.617005944741!2d6.954408464563445!3d4.871752329295862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d1cf3df47c65%3A0x4264af9da52f286!2sKM%201%20E%20-%20W%20Rd%2C%20Port%20Harcourt%20500102%2C%20Rivers!5e0!3m2!1sen!2sng!4v1713022312549!5m2!1sen!2sng" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        

        <div class="col-lg-6">
          <div class="sec-title text-center mb-5">
            <h2>Get In <span>Touch</span> With Us</h2>
            <p>and anticipate our swift response!</p>
          </div>
         
          <form action="{{route('add.contact')}}" method="post" >
            @csrf
            <div class="row gy-4">
              <div class="col-lg-6 form-group mb-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                
              </div>
              <div class="col-lg-6 form-group mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mb-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mb-5">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
                      
            
            <div class="text-center"><button type="submit" class="btn btn-outline-primary">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->


@endsection