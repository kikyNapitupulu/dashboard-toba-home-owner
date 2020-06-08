@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Room Type</h1>
            </div>
            <div class="col-sm-6">
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
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    <h5><i class="icon fas fa-check"></i> Success</h5>
    {{session('sukses')}}
</div>
@endif
<section class="content">
    <div class="card">
        <div class="card-header">
            <div>
            </div>
            <form action="/homestay/{{$data_homestay->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" type="text" class="form-control" value="{{$data_homestay->name}}">
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input name="contact" type="text" class="form-control" value="{{$data_homestay->contact}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control" value="{{$data_homestay->email}}">
                </div>
                <div class="form-group">
                    <label>Total Room</label>
                    <input name="total_room" type="text" class="form-control" value="{{$data_homestay->total_room}}">
                </div>
                <div class="form-group">
                    <label>Base Price</label>
                    <input name="price" type="text" class="form-control" value="{{$data_homestay->price}}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input name="header_image" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->header_image}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3"
                        value="{{$data_homestay->description}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input name="status" type="text" class="form-control" value="{{$data_homestay->status}}">
                </div>
                <div class="form-group">
                    <label>Image - 1</label>
                    <div class="custom-file">
                        <input name="img1" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->img1}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image - 2</label>
                    <div class="custom-file">
                        <input name="img2" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->img2}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image - 3</label>
                    <div class="custom-file">
                        <input name="img3" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->img3}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image - 4</label>
                    <div class="custom-file">
                        <input name="img4" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->img4}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image - 5</label>
                    <div class="custom-file">
                        <input name="img5" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->img5}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image - 6</label>
                    <div class="custom-file">
                        <input name="img6" type="file" class="custom-file-input" id="customFile"
                            value="{{$data_homestay->img6}}">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <label>Rating</label>
                <div class="form-group">
                    <div class="rating float-left"> <input type="radio" name="rating" value="5" id="5"><label
                            for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label
                            for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label
                            for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label
                            for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                            for="1">☆</label>
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