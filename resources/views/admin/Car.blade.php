@extends('admin.layouts.admin')
@section('page', 'Products')
@section('content')
    @if(session('update'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('update') }}</strong>
        </div>
    @endif
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('status') }}</strong>
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('delete') }}</strong>
        </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Cars</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Model</th>
                        <th>Description</th>
                        <th>Transmission</th>
                        <th>Mileage</th>
                        <th>Price</th>
                        <th>EMI</th>
                        <th>Featured</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->description }}</td>
                        <td>{{ $car->transmission }}</td>
                        <td>{{ $car->mileage }}</td>
                        <td>{{ $car->price }}</td>
                        <td>{{ $car->emi }}</td>
                        <td>@if($car->featured ==1)
                                YES
                            @else
                                NO
                            @endif</td>
                        <td><!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                    data-target="#modelId{{ $car->id }}">
                                Update
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId{{ $car->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="modelTitleId">Update {{ $car->name }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/addCar/{{ $car->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                                        <small class="form-text text-muted">Minimum price can always be clouded with other charges.</small></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Minimum EMI Option </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="text-input" name="emi" placeholder="EMI" class="form-control">
                                                        <small class="form-text text-muted">EMIs also has incremental charges so that it can be elevated, Relax !</small></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mileage </label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="number" id="text-input" name="mileage" placeholder="Mileage" class="form-control">
                                                        <small class="form-text text-muted">Just the Product Name</small></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="textarea-input" class="form-control-label">Description</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="description" id="textarea-input" rows="9" placeholder="Describe the Model, write few sassy lines..." class="form-control"></textarea></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Transmission</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="transmission" id="selectLg" class="form-control-lg form-control">
                                                            <option value="Not Specified">Please select</option>
                                                            <option value="Auto">Auto</option>
                                                            <option value="Manual">Manual</option>
                                                            <option value="Auto/Manual">Auto & Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Want it in Home Page ?</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="featured" id="selectLg" class="form-control-lg form-control">
                                                            <option value="0">Nope</option>
                                                            <option value="1">Yeah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="file-input" name="img" class="form-control-file"></div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Car Type</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <select name="featured" id="selectLg" class="form-control-lg form-control">
                                                            <option >Hatchback</option>
                                                            <option >Sedan</option>
                                                            <option >MPV</option>
                                                            <option >SUV</option>
                                                            <option >Couple</option>
                                                            <option >Convertible</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Brochure</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="file" id="file-input" name="brochure" class="form-control-file"></div>
                                                </div>
                                                <button type="submit" class="btn btn-success btn-block">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/deleteProduct/{{ $car->id }}" role="button">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection