@extends('backend.layouts.master')

@section ('content')
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Data Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
				<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit User</h4>
			  @if($errors->any())
			  	@foreach($errors->all() as $error)
			  		{{$error}}
			  	@endforeach
			  @endif
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form novalidate method="post" action="{{route('update_user', $user->id)}}">
						@csrf
					  <div class="row">
						<div class="col-12">						
							<div class="form-group">
								<h5>User name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="name" value="{{$user->name}}" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
							<div class="form-group">
								<h5>User Role <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="role" id="select" required class="form-control">
										<option value="">Select Role</option>
										<option value="User" {{($user->userRole=='User'? 'selected': "")}}>User</option>
										<option value="Admin" {{($user->userRole=='Admin'? 'selected': "")}}>Admin</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<h5>Email<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" value="{{$user->email}}" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
							<div class="form-group">
								<h5>Password<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
							<div class="form-group">
								<h5>Repeat Password<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
							</div>								
						</div>
					  </div>
						<div class="text-xs-right">
							<input type="submit" value="Submit" class="btn btn-rounded btn-info">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

@endsection