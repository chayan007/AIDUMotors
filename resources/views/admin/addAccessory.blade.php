@extends('admin.layouts.admin')
@section('page', 'Add Accessory')
@section('content')
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <strong>Add Accessory</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addAccessory/0" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Model </label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="name" placeholder="Name" class="form-control">
                        <small class="form-text text-muted">Just the Accessory Name</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Minimum Price </label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="price" placeholder="Price" class="form-control">
                        <small class="form-text text-muted">Minimum price can always be clouded with other charges.</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class="form-control-label">Description</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="textarea-input" rows="4" placeholder="Describe the Model, write few sassy lines..." class="form-control"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="img" class="form-control-file"></div>
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