@extends('layouts.adminlayout')
@section('dashboard_title', 'Update category')
@section('dashboard_content')

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <strong>peaks  platters</strong> <small>Update Food Category</small>
        </div>
        @if (session('success'))
        <div class="sufee-alert alert with-close alert-success mx-5 mt-3 alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span>
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
        <form action="{{ route('categories.update',['category'=>$update_cat->id]) }}" method="GET" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card-body row card-block">
            <div class="form-group col-6">
                <label class=" form-control-label">title</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-bars"></i></div>
                    <input name="title" value="{{ $update_cat->title }}" class="form-control">
                </div>
                <small class="form-text text-muted">must be short</small>
            </div>
            <div class="form-group col-6">
                <label class=" form-control-label">image</label>
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-cloud-upload"></i></div>
                    <input name="image" type="file" value="{{ $update_cat->image }}" class="form-control">

                </div>
                <img style="height: 100px; width:100px" class="mx-5 mt-1" src="{{ asset('storage/'.$update_cat->image) }}" alt="">
            </div>

            <div class="form-group col-6">
                <label class=" form-control-label">tag line</label>
                <div class="input-group">
                    <div class="input-group-addon choosen-choice"><i class="fa fa-align-justify"></i></div>
                    <textarea name="tagline" class="col-10">{{ $update_cat->tag }}</textarea>
                </div>

            </div>


        </div>
        <div class="text-right mx-3 mb-3">
            <input class="btn btn-outline-primary" type="submit" value="Update category    ">
        </div>
    </form>
    </div>
</div>





@endsection
