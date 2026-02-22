@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Products</h2>
    <a href="#" class="btn btn-primary">Add New Product</a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 5; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>Product {{ $i }}</td>
                <td>$19.99</td>
                <td><span class="badge bg-success">In Stock</span></td>
                <td>
                    <button class="btn btn-sm btn-info">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection
