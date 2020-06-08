@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1">
                <h1>Facility</h1>
            </div>
            <div class="col-sm-11">
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
            <h3 class="card-title"> <b>MANAGE FACILITY</b></h3><button type="button"
                class="float-right btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add
                Facility</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Facility</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/facilities/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Facility Name</label>
                                <input name="facility_name" type="text" class="form-control" placeholder="Facility Name">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input name="img" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="desc" class="form-control" rows="3"
                                    placeholder="Enter ..."></textarea>
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
                        <th>Facility Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_facilities as $facilities)
                    <tr>
                        <td>{{$facilities->id}}</td>
                        <td>{{$facilities->facility_name}}</td>
                        <td class="project-actions text-left">
                            <a class="btn btn-primary btn-sm" href="/facilities/{{$facilities->id}}/view">
                                <i class="fas fa-search-plus">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/facilities/{{$facilities->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/facilities/{{$facilities->id}}/delete"
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
    <!-- /.card -->
</section>
@endsection

<!-- /.card -->