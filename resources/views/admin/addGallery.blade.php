@extends('admin.layouts.admin')
@section('page', 'Images')
@section('content')
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <strong>Add Image</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addImage/0" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image" class="form-control-file"></div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
    </div>
    </form>
@endsection