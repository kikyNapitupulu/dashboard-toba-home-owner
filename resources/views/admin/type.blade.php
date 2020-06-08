@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Room Types</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Room Type</li>
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
            <h3 class="card-title"> <b>MANAGE ROOM TYPE</b></h3><button type="button"
                class="float-right btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add Room
                Type</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Type Room</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/type/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Room Type</label>
                                <input name="room_type" type="text" class="form-control" placeholder="Room Type">
                            </div>
                            <div class="form-group">
                                <label>Capacity</label>
                                <input name="capacity" type="text" class="form-control" placeholder="Capacity">
                            </div>
                            <div class="form-group">
                                <label>Room Size</label>
                                <input name="room_size" type="text" class="form-control" placeholder="Room Size (In Square Feet)">
                            </div>
                            <div class="form-group">
                                <label>Bed Type</label>
                                <input name="bed_type" type="text" class="form-control" placeholder="Bed Type">
                            </div>
                            <div class="form-group">
                                <label>Base Price</label>
                                <input name="price" type="text" class="form-control" placeholder="Base Price">
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
                                <textarea name="description" class="form-control" rows="3"
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
            <table id="example2" class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Room Type</th>
                        <th>Capacity</th>
                        <th>Room Size</th>
                        <th>Bed Type</th>
                        <th>Base Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_room as $room)
                    <tr>
                        <td>{{$room->id}}</td>
                        <td>{{$room->room_type}}</td>
                        <td>{{$room->capacity}}</td>
                        <td>{{$room->room_size}} <span>square feet</span></td>
                        <td>{{$room->bed_type}}</td>
                        <td><span>Rp.</span>{{$room->price}}</td>
                        <td class="project-actions text-left">
                            <a class="btn btn-primary btn-sm" href="/type/{{$room->id}}/view">
                                <i class="fas fa-search-plus">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/type/{{$room->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/type/{{$room->id}}/delete"
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