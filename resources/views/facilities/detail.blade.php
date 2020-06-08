@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Facility Detail</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Facility Detail</li>
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
            <h3 class="card-title name">{{$data_facilities->facility_name}}</h3>

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
                        <img src="{{asset('adminlte/img/'.$data_facilities->img)}}" class="product-image"
                            alt="Product Image" id="img" width="150px">
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <h3 class="my-6 name">{{$data_facilities->facility_name}}</h3>
                        <p class="left description">{{$data_facilities->desc}}</p>

                    </div>
                </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection