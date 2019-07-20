@extends('admin.layouts.admin')
@section('page', 'Dashboard')
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
            <form action="/addMedia/0" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="img" class="form-control-file"></div>
                </div>
                <div class="form-group">
                    <label for="description">Which Media Highlight is it ?</label>
                    <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">eg: Broadcast in Zonet, 2018</small>
                </div>
                <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
    </form>
    </div>
    </div>
@endsection