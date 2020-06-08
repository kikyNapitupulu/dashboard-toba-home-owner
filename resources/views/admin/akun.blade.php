@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 ">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/adminlte/img/avatar2.png"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">Owner</h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Front Name</b> <a class="float-right">{{$data_profil->front_name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Last Name</b> <a class="float-right">{{$data_profil->last_name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="float-right">{{$data_profil->gender}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email Address</b> <a class="float-right">{{$data_profil->email}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right">{{$data_profil->address}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="float-right">{{$data_profil->phone}}</a>
                            </li>
                        </ul>

                        <a href="/profil/{{$profil->id}}/edit" class="btn btn-primary btn-block"><b>Edit</b></a>
                        
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>

@endsection