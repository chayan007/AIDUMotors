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
            <strong>Add Review</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addReview/0" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Video</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="video" class="form-control-file"></div>
                </div>
                <div class="form-group">
                    <label for="description">Comment he/she has told.</label>
                    <input type="text" class="form-control" name="comment" id="description" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">eg: Renault Kwid is awesome. AIDU Motors make it more awesome.</small>
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