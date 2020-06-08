@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Homestay Detail</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Homestay Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title name">{{$data_homestay->name}}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <!-- Default box -->
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="col-11">
                        <img src="{{asset('adminlte/img/'.$data_homestay->header_image)}}" class="product-image"
                            alt="Product Image" id="header_image" width="150px">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        <div class="product-image-thumb active"><img
                                src="{{asset('adminlte/img/'.$data_homestay->img1)}}" alt="Product Image" name="img1">
                        </div>
                        <div class="product-image-thumb"><img src="{{asset('adminlte/img/'.$data_homestay->img2)}}"
                                alt="Product Image" name="img2"></div>
                        <div class="product-image-thumb"><img src="{{asset('adminlte/img/'.$data_homestay->img3)}}"
                                alt="Product Image" name="img3"></div>
                        <div class="product-image-thumb"><img src="{{asset('adminlte/img/'.$data_homestay->img4)}}"
                                alt="Product Image" name="img4"></div>
                        <div class="product-image-thumb"><img src="{{asset('adminlte/img/'.$data_homestay->img5)}}"
                                alt="Product Image" name="img5"></div>
                        <div class="product-image-thumb"><img src="{{asset('adminlte/img/'.$data_homestay->img6)}}"
                                alt="Product Image" name="img6"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <h3 class="my-6 name">{{$data_homestay->name}}</h3>
                        <p class="left description">{{$data_homestay->description}}</p>

                    </div>
                    <div class="col-12">
                        <h3 class="my-3">Base Price</h3>
                        <p class="address"><span>Rp.</span>{{$data_homestay->price}}</p>

                        <h3 class="my-3">Locations</h3>
                        <p class="address">{{$data_homestay->address}}</p>

                        <h3 class="my-3">Rating</h3>
                        <div class="rating float-left">
                            <h2 class="rating">{{$data_homestay->rating}}</h2>
                            <!--<input type="radio" name="rating" textue="5" id="5"><label for="5">☆</label> 
                            <input type="radio" name="rating" textue="4" id="4"><label for="4">☆</label> 
                            <input type="radio" name="rating" textue="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" textue="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" textue="1" id="1"><label for="1">☆</label>-->
                        </div>



                    </div>
                </div>

                <div class="row mt-4 col-12">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                href="#product-desc" role="tab" aria-controls="product-desc"
                                aria-selected="true">Rooms</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                href="#product-comments" role="tab" aria-controls="product-comments"
                                aria-selected="false">Facilities</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3 col-12" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel">
                            <table id="example2" class="table table-hover">
                                <thead>

                                    <tr>
                                        <th>Room Type</th>
                                        <th>Room Size</th>
                                        <th>Capacity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_homestay->room as $room)
                                    <tr>
                                        <td>{{$room->room_type}}</td>
                                        <td>{{$room->room_size}}</td>
                                        <td>{{$room->capacity}}</td>
                                        <td>{{$room->price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="product-comments" role="tabpanel"
                            aria-labelledby="product-comments-tab">
                            <table id="example2" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Facility Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_homestay->facilities as $facilities)
                                    <tr>
                                        <td>{{$facilities->id}}</td>
                                        <td>{{$facilities->facility_name}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection