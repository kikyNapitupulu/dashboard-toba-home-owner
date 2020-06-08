@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1">
                <h1>Review</h1>
            </div>
            <div class="col-sm-11">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Review</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> <b>REVIEWS WAITING FOR APPROVAL</b></h4>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Visitor Name</th>
                                <th>Review</th>
                                <th>Rating</th>
                                <th>Homestay</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach($data_review as $review)
                                {{csrf_field()}}

                                <td>{{$review->id}}</td>
                                <td>{{$review->name}}</td>
                                <td>{{$review->review}}</td>
                                <td>{{$review->rating}}</td>
                                <td>{{$review->homestay}}</td>
                                <td>
                                    @if($review->status == 0)
                                    <span class="label label-primary">Pending</span>
                                    @elseif($review->status== 1)
                                    <span class="label label-success">Approved</span>
                                    @elseif($review->status== 2)
                                    <span class="label label-danger">Reported</span>
                                    @endif
                                </td>
                                <td><a href="{{action('ReviewController@edit', $review->id)}}"
                                        class="btn-sm btn-warning"><i class="fas fa-edit"> Moderate</a></td>
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
</section>


@endsection

<!-- /.card -->