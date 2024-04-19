



<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                {{-- <img src="{{asset('uploads/images/'.$settings->logo)}}" width="35" alt=""> --}}
                <h3>OESL<span>.</span></h3>
              </a>
                <img src="{{asset('uploads/images/'.$settings->logo)}}" width="35" alt="">
              <br>
              <p>
                <strong>Head Office</strong><br>{{$settings->address}} <br><br>
                <strong>USA Office</strong><br>{{$settings->address2}}<br><br>
                <strong>Phone:</strong>  {{$settings->phone}}<br>
                <strong>Email:</strong>  {{$settings->email}}<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
           
          </div><!-- End footer links column-->


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{route('about.us')}}">About us</a></li>
              <li><a href="{{route('index.services')}}">Services</a></li>
              <li><a href="{{route('qhse')}}">QHSE Policy</a></li>
              <li><a href="{{route('contact')}}">Contact us</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              @foreach($services as $service)
              <li><a href="{{route('service.details', ['slug' => $service->slug])}}">{{$service->ServiceCat->name}}</a></li>
             @endforeach
              {{-- <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li> --}}
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Ofrima Energy Service Limited</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Powered by <a href="#">Arecent Solutions</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->