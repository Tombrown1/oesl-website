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
          <li><a class="menu-item active" href="{{route('home')}}" >Home</a></li>
          <li><a class="menu-item" href="{{route('about.us')}}" >About Us</a></li>
          <li><a class="menu-item" href="{{route('index.services')}}">Services</a></li>
          {{-- <li><a class="menu-item" href="{{route('projects')}}">Projects</a></li>  --}}

          <li><a class="menu-item" href="{{route('qhse')}}">QHSE Policy</a></li>             
         
          <li><a class="menu-item" href="{{route('contact')}}">Contact Us</a></li>
        </ul>      
      </nav><!-- .navbar -->
      <script type="text/javascript">

        $(document).ready(function() {
            $('.menu-item').click(function() {
              alert("Hello Menu!");
              e.preventDefault(); // Prevent default link behavior
                $('.menu-item.active').removeClass("active");
                $(this).addClass("active");
            });
        });

        // $(document).ready(function() {
        //     $('ul#my-menu a').click(function(e) {
        //         e.preventDefault(); // Prevent default link behavior
        //         // alert("Hello Menu !");
        //         $('ul#my-menu li').removeClass('active'); // Remove active class from all items
        //         $(this).parent().addClass('active');     // Add active class to clicked item's parent (LI)
        //     });
        // });

      </script>
    </div>
  </header><!-- End Header -->

 