<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('backend/images/favicon.ico')}}">

  <title>Sunny Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

@include('backend.layouts.header')

@include('backend.layouts.sidebar')  
	
 <div class="content-wrapper">
	  <div class="container-full">
	
  @yield('content')

		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
@include('backend.layouts.footer')

  <!-- Control Sidebar -->
@include('backend.layouts.right-sidebar')  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
 
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="{{asset('backend/js/vendors.min.js')}}"></script>
  <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>	
	<script src="{{asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script>
	<script src="{{asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script>
	<script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	
	<script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>

	<script src="{{asset('backend/js/pages/validation.js')}}"></script>
    <script src="{{asset('backend/js/pages/form-validation.js')}}"></script>

	<!-- Sunny Admin App -->
	<script src="{{asset('backend/js/template.js')}}"></script>
	<script src="{{asset('backend/js/pages/dashboard.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		@if(Session::has('message'))
		var type = "{{Session::get('alert-type')}}"
		var msg = "{{Session::get('message')}}"
		switch(type){
			case 'info':
			toastr.info(msg);
			break; 
			case 'success':
			toastr.success(msg);
			break; 
			case 'error':
			toastr.error(msg);
			break; 
			case 'warning':
			toastr.warning(msg);
			break; 
		}



		@endif
	</script>
	
	
</body>
</html>
