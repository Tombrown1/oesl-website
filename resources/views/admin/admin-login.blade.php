<!DOCTYPE html>

<html lang="en">
  
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin Login - Ofrima Energy Service Limited </title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('../../../backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('../../../backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('../../../backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('../../../backend/assets/css/demo2/style.min.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('../../../backend/assets/images/favicon-32x32.png')}}"/>
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">OE<span> SL</span></a>
                    <h5 class="text-muted fw-normal mb-4">Welcome back!</h5>
                    <form class="forms-sample" action="{{ route('login')}}" method="POST">
                        @csrf
                      <div class="mb-3">
                        <label for="login" class="form-label">Name/Email/Phone</label>
                        <input type="login" name="login" class="form-control" id="login" placeholder="login">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" autocomplete="current-password" placeholder="Password">
                      </div>
                      
                      <div>
                        {{-- <a href="#" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</a> --}}
                        <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login 
                        </button>
                      </div>
                      {{-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> --}}
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('../../../backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('../../../backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../../../backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>

<!-- Mirrored from www.nobleui.com/html/template/demo2/pages/auth/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2024 12:33:05 GMT -->
</html>