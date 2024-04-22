<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('uploads/images/'.$settings->logo)}}" alt="">
        <h1>OESL<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="menu-item {{ request()->is('/') ? 'active' : '' }}"  href="{{route('home')}}" >Home</a></li>
          <li><a class="menu-item {{ request()->is('oesl/about-us') ? 'active' : '' }} " href="{{route('about.us')}}" >About Us</a></li>
          <li><a class="menu-item {{ request()->is('oesl/all-services') ? 'active' : ''}}" href="{{route('index.services')}}">Services</a></li>
          
          {{-- <li><a class="menu-item" href="{{route('projects')}}">Projects</a></li>  --}}

          <li><a class="menu-item {{ request()->is('oesl/qhse') ? 'active' : ''}}" href="{{route('qhse')}}">QHSE Policy</a></li>             
         <li><a class="menu-item {{ request()->is('oesl/contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact Us</a></li>
        </ul>      
      </nav><!-- .navbar -->     
    </div>
  </header><!-- End Header -->

 