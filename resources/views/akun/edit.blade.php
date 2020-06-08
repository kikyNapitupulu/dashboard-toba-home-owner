@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">profile</li>
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
              <form action="/profil/{{$profil->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Front Name</label>
                            <input name="front_name" type="text" class="form-control" value="{{$profil->front_name}}">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input name="last_name" type="text" class="form-control" value="{{$profil->last_name}}">
                        </div>
                        <div class="form-group">
                          <b>Gender</b>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Female</option>
                            <option>Male</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="email" type="text" class="form-control" value="{{$profil->email}}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" value="{{$profil->address}}">
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input name="phone" type="text" class="form-control" value="{{$profil->phone}}">
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
            </div>
          </div>
          <!-- /.card -->
    </section>
@endsection

