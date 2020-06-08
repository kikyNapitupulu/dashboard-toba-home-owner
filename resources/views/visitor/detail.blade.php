@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Visitor Detail</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Visitor Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-user"></i>
                Description Visitor
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Front Name</dt>
                <dd class="col-sm-9">{{$data_profil->front_name}}</dd>
                <dt class="col-sm-3">Last Name</dt>
                <dd class="col-sm-9">{{$data_profil->last_name}}</dd>
                <dt class="col-sm-3">Gender</dt>
                <dd class="col-sm-9">{{$data_profil->gender}}</dd>
                <dt class="col-sm-3">Email Address</dt>
                <dd class="col-sm-9">{{$data_profil->email}}</dd>
                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">{{$data_profil->address}}</dd>
                <dt class="col-sm-3">Phone</dt>
                <dd class="col-sm-9">{{$data_profil->phone}}</dd>
            </dl>
        </div>
        <!-- /.card-body -->
        <div class="col-12">
        <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                    role="tab" aria-controls="product-desc" aria-selected="true">Order</a>
            </div>
        </nav>
        <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel">
                <table id="example2" class="table table-hover">
                    <thead>

                        <tr>
                            <th>ID Order</th>
                            <th>Order Date</th>
                            <th>ID Homestay</th>
                            <th>Name Homestay</th>
                            <th>ID Room</th>
                            <th>Name Room</th>
                            <th>Total Spent</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.card -->
    </div>
    
</section>
@endsection