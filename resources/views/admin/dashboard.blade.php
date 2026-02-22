@extends('layouts.admin')

@section('content')
<h2 class="mb-4">Dashboard Overview</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Total Orders</div>
            <div class="card-body">
                <h5 class="card-title">150</h5>
                <p class="card-text">New orders today: 12</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-header">Total Products</div>
            <div class="card-body">
                <h5 class="card-title">45</h5>
                <p class="card-text">In stock: 40</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
            <div class="card-header">Total Users</div>
            <div class="card-body">
                <h5 class="card-title">89</h5>
                <p class="card-text">New registrations: 5</p>
            </div>
        </div>
    </div>
</div>
@endsection
