@extends('backend.layouts.master')
@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title">Edit Designation</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Designation</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Designation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Designation</h4>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('designation.update', $designation->id) }}" method="post">
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Designation" value="{{ $designation->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit"> 
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
@endsection
