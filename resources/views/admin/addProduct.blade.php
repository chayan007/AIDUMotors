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
            <strong>Add Product</strong>
        </div>
        <div class="card-body card-block">
            <form action="/addProduct" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product </label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Product" class="form-control"><small class="form-text text-muted">Just the Product Name</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price </label></div>
                    <div class="col-12 col-md-9"><input type="number" id="text-input" name="price" placeholder="Price" class="form-control"><small class="form-text text-muted">Enter 0 for 'Contact for Price'</small></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Describe Product..." class="form-control"></textarea></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Category</label></div>
                    <div class="col-12 col-md-9">
                        <select name="category" id="selectLg" class="form-control-lg form-control">
                            <option value="#">Please select</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Company</label></div>
                    <div class="col-12 col-md-9">
                        <select name="company" id="selectLg" class="form-control-lg form-control">
                            <option value="#">Please select</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->company }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="img1" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="img2" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="img3" class="form-control-file"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Brochure</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="brochure" class="form-control-file"></div>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </div>
        </form>
    </div>
@endsection