@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1">
                <h1>Homestay</h1>
            </div>
            <div class="col-sm-11">
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
            <h3 class="card-title">List Homestay</h3><button type="button" class="float-right btn btn-sm btn-primary"
                data-toggle="modal" data-target="#exampleModal">Add Homestay</button>
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
                                <input name="room_type" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Capacity</label>
                                <input name="capacity" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Room Size</label>
                                <input name="room_size" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bed Type</label>
                                <input name="bed_type" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Price /Night</label>
                                <input name="price" type="text" class="form-control">
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
                        <td>{{$homestay->Status}}</td>
                        <td>{{$homestay->rating}}</td>
                        <td>{{$homestay->total_room}}</td>
                        <td class="project-actions text-left">
                            <a class="btn btn-primary btn-sm" href="/homestay/{{$homestay->id}}/view"
                                data-toggle="modal" data-target="#exampleModal2">
                                <i class="fas fa-search-plus">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="/homestay/{{$homestay->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="/homestay/{{$homestay->id}}/delete">
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
    <!-- Modal -->

    <h5 class="modal-title" id="exampleModalLabel">{{$homestay->name}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        <form action="/homestay/view" method="get">
            {{csrf_field()}}
            <!-- Default box -->
            <div class="row">
                <h3 class="d-inline-block d-sm-none">{{$homestay->name}}</h3>
                <div class="col-12">
                    <img src="/adminlte/img/room-4.jpg" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="/adminlte/img/room-b1.jpg" alt="Product Image">
                    </div>
                    <div class="product-image-thumb"><img src="/adminlte/img/photo2.png" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="/adminlte/img/blog-6.jpg" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="/adminlte/img/about-p2.jpg" alt="Product Image"></div>
                    <div class="product-image-thumb"><img src="/adminlte/img/about-p3.jpg" alt="Product Image"></div>
                </div>
            </div>
            <div class="col-12">
                <h3 class="my-3">{{$homestay->name}}</h3>
                <p>{{$homestay->deskripsi}}</p>
                <hr>
                <h4>Available Rooms</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default text-center active">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
                        Green
                        <br>
                        <i class="fas fa-circle fa-2x text-green"></i>
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option2" autocomplete="off">
                        Blue
                        <br>
                        <i class="fas fa-circle fa-2x text-blue"></i>
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option3" autocomplete="off">
                        Purple
                        <br>
                        <i class="fas fa-circle fa-2x text-purple"></i>
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option4" autocomplete="off">
                        Red
                        <br>
                        <i class="fas fa-circle fa-2x text-red"></i>
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option5" autocomplete="off">
                        Orange
                        <br>
                        <i class="fas fa-circle fa-2x text-orange"></i>
                    </label>
                </div>

                <h4 class="mt-3">Size <small>Please select one</small></h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">S</span>
                        <br>
                        Small
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">M</span>
                        <br>
                        Medium
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">L</span>
                        <br>
                        Large
                    </label>
                    <label class="btn btn-default text-center">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl">XL</span>
                        <br>
                        Xtra-Large
                    </label>
                </div>

                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        $80.00
                    </h2>
                    <h4 class="mt-0">
                        <small>Ex Tax: $80.00 </small>
                    </h4>
                </div>

            </div>
    </div>
    <div class="col-12">
        <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                    role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                    role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab"
                    aria-controls="product-rating" aria-selected="false">Rating</a>
            </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                {{$homestay->deskripsi}}</div>
            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
            </div>
            <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"></div>
        </div>
    </div>
    </div>
    </div>
    </div> <!-- /.card-body -->
</section>

@endsection