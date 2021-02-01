@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Transaction Status {{ $item->title }}</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="transaction_status">Status</label>
                    <select class="custom-select @error('transaction_status') is-invalid @enderror"
                        name="transaction_status" value="{{ old('transaction_status') }}">
                        <option value="{{ $item->transaction_status }}">don't changed ({{ $item->transaction_status }})
                        </option>
                        <option value="IN_CART">In Cart</option>
                        <option value="PENDING">Pending</option>
                        <option value="SUCCESS">Success</option>
                        <option value="CANCEL">Cancel</option>
                        <option value="FAILED">Failed</option>
                    </select>
                    @error('transaction_status')
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
