@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-primary">Shop All Products</h1>
    <div class="row">
        <!-- Placeholder Products -->
        @for ($i = 1; $i <= 8; $i++)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Product {{ $i }}</h5>
                    <p class="card-text">This is a short description of product {{ $i }}.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">$19.99</span>
                        <a href="#" class="btn btn-sm btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
