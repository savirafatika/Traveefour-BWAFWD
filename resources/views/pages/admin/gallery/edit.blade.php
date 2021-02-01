@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="travel_packages_id">Travel Package</label>
                    <select class="custom-select @error('travel_packages_id') is-invalid @enderror"
                        name="travel_packages_id" value="{{ old('travel_packages_id') }}">
                        <option value="{{ $item->travel_packages_id }}">not changed</option>
                        @foreach ($travel_packages as $travel_package)
                        <option value="{{ $travel_package->id }}">
                            {{ $travel_package->title }}
                        </option>
                        @endforeach
                    </select>
                    @error('travel_packages_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ Storage::url($item->image) }}" class="img-thumbnail" />
                        </div>
                        <div class="col-10">
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                id="exampleFormControlFile1" name="image">
                        </div>
                    </div>
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Edit</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
