@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Moderate Status</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Review</li>
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
<div class="container">
      <form method="post" action="{{action('ReviewController@update', $id)}}">
        @csrf
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Approval</lable>
                <select name="sstatus">
                  <option value="0" @if($data_review->status==0)selected @endif>Pending</option>
                  <option value="1" @if($data_review->status==1)selected @endif>Approve</option>
                  <option value="2" @if($data_review->status==2)selected @endif>Report</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-top:40px">Update</button>
          </div>
        </div>
      </form>
    </div>
</section>
@endsection

<!-- /.card -->