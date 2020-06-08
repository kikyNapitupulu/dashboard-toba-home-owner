@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1">
                <h1>Visitor</h1>
            </div>
            <div class="col-sm-11">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Visitor</li>
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
            <h3 class="card-title"> <b>MANAGE VISITOR</b></h3><button type="button"
                class="float-right btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add
                Visitor</button>
        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Visitor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/visitor/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Role</label>
                                <input name="role" type="text" class="form-control" value="Visitor" readonly>
                            </div>
                            <div class="form-group">
                                <label>Front Name</label>
                                <input name="front_name" type="text" class="form-control" placeholder="Front Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input name="gender" type="text" class="form-control" placeholder="F/M">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="address" type="text" class="form-control" placeholder="Phone">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table  table-hover">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Front Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_profil as $profil)
                    <tr>
                        <td>{{$profil->id}}</td>
                        <td>{{$profil->front_name}}</td>
                        <td>{{$profil->last_name}}</td>
                        <td>{{$profil->gender}}</td>
                        <td>{{$profil->email}}</td>
                        <td>{{$profil->address}}</td>
                        <td>{{$profil->phone}}</td>
                        <td class="project-actions text-left">
                            <a class="btn btn-primary btn-sm" href="/visitor/{{$profil->id}}/detail">
                                <i class="fas fa-search-plus">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/visitor/{{$profil->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/visitor/{{$profil->id}}/delete"
                                onclick="return confirm('Are you sure want to delete?')">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection