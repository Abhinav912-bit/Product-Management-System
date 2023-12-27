@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center">
                <div class="card-header">Select Category</div>
                <div class="mb-3">
                    <a href="{{ route('categories.create') }}" class="btn btn-success">Create Category</a>
                </div>
            </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('products.listing') }}">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">--Select Category--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Show Products</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
