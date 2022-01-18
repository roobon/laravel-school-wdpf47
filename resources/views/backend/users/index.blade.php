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
	<div class="row">

		<div class="col-12">

			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">User list</h3>
					<a href="" class="btn btn-success pull-right">Add User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table id="example5" class="table table-bordered table-striped" style="width:100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>User Role</th>
									<th>Email</th>
									<th>Photo</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
								@foreach($users as $key=>$user)
								<tr>
									<td>{{$key+1}}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->userRole }}</td>
									<td>{{ $user->email }}</td>
									<td><img src="{{url('storage/'. $user->profile_photo_path)}}" alt="" width="100"> </td>
									<td>
										<a href="{{route('user_edit', $user->id)}}" class="btn btn-rounded btn-info">Edit</a>
										<a onclick="return confirm('Are your sure for deleting')" href="{{route('user_delete', $user->id)}}" class="btn btn-rounded btn-danger">Delete</a>
									</td>	
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->      
		</div> 

	</div>
</section>


@endsection