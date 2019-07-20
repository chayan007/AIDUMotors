@extends('admin.layouts.admin')
@section('page', 'Gallery')
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
                <strong class="card-title">List of Images</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $image)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td><img src="{{ Storage::url($image->image_path) }}" height="100px" width="200px" alt="Gallery-Image"></td>
                            <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/deleteImage/{{ $image->id }}" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection