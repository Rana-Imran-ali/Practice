@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-primary">Welcome to Our Store</h1>
            <p class="col-md-8 fs-4">Discover the best products at amazing prices. Shop the latest trends in Electronics, Fashion, and more.</p>
            <button class="btn btn-primary btn-lg" type="button">Shop Now</button>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 html-white border rounded-3 bg-white shadow-sm">
                <h2 class="text-primary">New Arrivals</h2>
                <p>Check out the latest additions to our collection. We update our stock weekly.</p>
                <button class="btn btn-outline-primary" type="button">View New Arrivals</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-white border rounded-3 shadow-sm">
                <h2 class="text-primary">Special Deals</h2>
                <p>Don't miss out on our limited-time offers. Save big on selected items.</p>
                <button class="btn btn-outline-secondary" type="button">See Deals</button>
            </div>
        </div>
    </div>
</div>
@endsection
