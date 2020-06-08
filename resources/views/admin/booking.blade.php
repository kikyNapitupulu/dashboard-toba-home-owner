@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Booking Carts</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Booking Carts</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <b>MANAGE BOOKING CARTS</b></h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID Order</th>
                                <th>ID Visitor</th>
                                <th>Order Date</th>
                                <th>Visitor</th>
                                <th>Homestay</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_booking as $booking)
                            <tr>
                                <td>BO01</td>
                                <td>VI01</td>
                                <td>17-05-2020</td>
                                <td>Kiky Napitupulu</td>
                                <td>Nauli Homestay</td>
                                <td>Rp.500.000</td>
                                <td class="project-actions text-left">
                                    <a class="btn btn-primary btn-sm" href="/booking/{{$booking->id}}/view">
                                        <i class="fas fa-search-plus">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
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
    </div>
    <!-- /.row -->
</section>
@endsection