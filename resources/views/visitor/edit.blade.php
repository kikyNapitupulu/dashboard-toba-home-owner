@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Edit Visitor</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Visitor</li>
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
            <form action="/visitor/{{$profil->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Role</label>
                    <input name="role" type="text" class="form-control" value="Visitor" readonly>
                </div>
                <div class="form-group">
                    <label>Front Name</label>
                    <input name="front_name" type="text" class="form-control"  value="{{$profil->front_name}}">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input name="last_name" type="text" class="form-control"  value="{{$profil->last_name}}">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input name="gender" type="text" class="form-control"  value="{{$profil->gender}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control"  value="{{$profil->email}}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input name="address" type="text" class="form-control"  value="{{$profil->address}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" type="text" class="form-control"  value="{{$profil->phone}}">
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