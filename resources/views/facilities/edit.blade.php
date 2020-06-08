@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Facilities</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Facilities</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->

@if(session('sukses'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Success</h5>
    {{session('sukses')}}
</div>
@endif
<section class="content">
    <div class="card">
        <div class="card-header">
            <div>
            </div>
            <form action="/facilities/{{$facilities->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Facility Name</label>
                    <input name="facility_name" type="text" class="form-control" value="{{$facilities->facility_name}}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input name="img" type="file" class="custom-file-input" id="customFile"
                            value="{{$facilities->img}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control" rows="3"
                            value="{{$facilities->desc}}"></textarea>
                    </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-warning">Save changes</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
</section>
@endsection

<!-- /.card -->