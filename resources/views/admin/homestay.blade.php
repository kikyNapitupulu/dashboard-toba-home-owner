@extends('layouts.master')

@section('content')
@if(session('sukses'))
<div class="alert alert-success">
    <button type="button" class="close" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Success</h5>
    {{session('sukses')}}
</div>
@endif
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Homestay</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href=".dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Homestay List</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <b>MANAGE HOMESTAY</b> </h3><button type="button"
                class="float-right btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add
                Homestay</button>
        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Homestay</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/homestay/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input name="contact" type="text" class="form-control" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text" class="form-control" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label>Total Rooms</label>
                                <input name="total_room" type="text" class="form-control" placeholder="Total rooms">
                            </div>
                            <div class="form-group">
                                <label>Base Price</label>
                                <input name="price" type="text" class="form-control" placeholder="Base Price">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input name="header_image" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3"
                                    placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input name="status" type="text" class="form-control" placeholder="Available / Not Available">
                            </div>
                            <div class="form-group">
                                <label>Image - 1</label>
                                <div class="custom-file">
                                    <input name="img1" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image - 2</label>
                                <div class="custom-file">
                                    <input name="img2" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image - 3</label>
                                <div class="custom-file">
                                    <input name="img3" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image - 4</label>
                                <div class="custom-file">
                                    <input name="img4" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image - 5</label>
                                <div class="custom-file">
                                    <input name="img5" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image - 6</label>
                                <div class="custom-file">
                                    <input name="img6" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <label>Rating</label>
                            <div class="form-group">
                                <div class="rating float-left"> <input type="radio" name="rating" textue="5"
                                        id="5"><label for="5">☆</label> <input type="radio" name="rating" textue="4"
                                        id="4"><label for="4">☆</label> <input type="radio" name="rating" textue="3"
                                        id="3"><label for="3">☆</label> <input type="radio" name="rating" textue="2"
                                        id="2"><label for="2">☆</label> <input type="radio" name="rating" textue="1"
                                        id="1"><label for="1">☆</label>
                                </div>
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
                        <th>Name</th>
                        <th>Status</th>
                        <th>Rating</th>
                        <th>Total Rooms</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_homestay as $homestay)
                    <tr>
                        <td>{{$homestay->id}}</td>
                        <td>{{$homestay->name}}</td>
                        <td>{{$homestay->status}}</td>
                        <td>{{$homestay->rating}}</td>
                        <td>{{$homestay->total_room}}</td>
                        <td><span>Rp.</span>{{$homestay->price}}</td>
                        <td class="project-actions text-left">
                            <a class="btn btn-primary btn-sm" href="/homestay/{{$homestay->id}}/view">
                                <i class="fas fa-search-plus">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/homestay/{{$homestay->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/homestay/{{$homestay->id}}/delete"
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
    </div>
</section>


@endsection