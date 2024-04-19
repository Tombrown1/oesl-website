<!DOCTYPE html>

<html lang="en">
  
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Ofrima Energy Services Limited">
	<meta name="author" content="OESL">
	<meta name="keywords" content="WIRE LINE/SLICKLINE SERVICES, COIL TUBING SERVICES, PVT ANALYSIS, PIPELINE SURVEILLANCE, PROJECT & PROGRAM MGT, PROCUREMENT SERVICES, WELLHEAD MAINTENANCE">

	<title>@yield('pageTitle') - Ofrima Energy Services Limited</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('../backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('../backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
	<!-- End plugin css for this page -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('../backend/assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('../backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('../backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('../backend/assets/css/demo2/style.min.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('../backend/assets/images/favicon-32x32.png')}}" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  <script src="{{asset('../ckeditor/ckeditor.js')}}"></script>
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		    @include('admin.body.sidebar')
    
		<!-- partial -->
	
		<div class="page-wrapper">					
			<!-- partial:partials/_navbar.html -->
			@include('admin.body.navbar')
			<!-- partial -->			
        	@yield('content')       
			

			<!-- partial:partials/_footer.html -->
			@include('admin.body.footer')
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('../backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<script src="{{asset('../backend/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
	<script src="{{asset('../backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
	  <!-- End plugin js for this page -->

	<!-- Plugin js for this page -->
  <script src="{{asset('../backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('../backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  {{-- <script src="{{asset('../backend/assets/js/template.js')}}"></script> --}}
	
	<!-- End plugin js for this page -->	

	<!-- inject:js -->
	<script src="{{asset('../backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  {{-- <script src="{{asset('../backend/assets/js/dashboard-dark.js')}}"></script> --}}
	<!-- End custom js for this page -->

	<!-- Custom js for this page -->
	{{-- <script src="{{asset('../backend/assets/js/data-table.js')}}"></script> --}}
	<!-- End custom js for this page -->

	<!-- Sweet Alert Js Link -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  	<script src="{{asset('../backend/assets/js/code/code.js')}}"></script>
	<script src="{{asset('../backend/assets/js/code/validate.min.js')}}"></script>

	<!--End Sweet Alert Js Link -->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type','info') }}"
		switch(type){
			case 'info':
			toastr.info(" {{ Session::get('message') }} ");
			break;

			case 'success':
			toastr.success(" {{ Session::get('message') }} ");
			break;

			case 'warning':
			toastr.warning(" {{ Session::get('message') }} ");
			break;

			case 'error':
			toastr.error(" {{ Session::get('message') }} ");
			break; 
		}
		@endif 
	</script>

</body>

<!-- Mirrored from www.nobleui.com/html/template/demo2/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2024 12:31:18 GMT -->
</html>    