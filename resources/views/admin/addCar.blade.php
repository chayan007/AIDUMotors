@extends('admin.layouts.admin')
@section('page', 'Dashboard')
@section('content')
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <strong>Add Car</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addCar" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Model </label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="model" placeholder="Model" class="form-control">
                        <small class="form-text text-muted">Just the Car Name</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Minimum Price </label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="price" placeholder="Price" class="form-control">
                        <small class="form-text text-muted">Minimum price can always be clouded with Tax.</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Minimum EMI Option </label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="emi" placeholder="EMI" class="form-control">
                        <small class="form-text text-muted">EMIs also has residual charges to be elevated, Relax !</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mileage </label></div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="mileage" placeholder="Mileage" class="form-control">
                        <small class="form-text text-muted">Just the Product Name</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="textarea-input" rows="9" placeholder="Describe the Model, write few sassy lines..." class="form-control"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Transmission</label></div>
                    <div class="col-12 col-md-9">
                        <select name="category" id="selectLg" class="form-control-lg form-control">
                            <option value="Not Specified">Please select</option>
                            <option value="Auto">Auto</option>
                            <option value="Manual">Manual</option>
                            <option value="Auto & Manual">Auto & Manual</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Want it in Home Page ?</label></div>
                    <div class="col-12 col-md-9">
                        <select name="company" id="selectLg" class="form-control-lg form-control">
                            <option value="0">Nope</option>
                            <option value="1">Yeah</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="img1" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Brochure</label></div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="brochure" class="form-control-file"></div>
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