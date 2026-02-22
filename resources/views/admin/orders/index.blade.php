@extends('layouts.admin')

@section('content')
<h2 class="mb-4">Orders</h2>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#1001</td>
                <td>John Doe</td>
                <td>2026-02-03</td>
                <td><span class="badge bg-warning">Pending</span></td>
                <td>$59.98</td>
                <td><button class="btn btn-sm btn-secondary">View</button></td>
            </tr>
             <tr>
                <td>#1002</td>
                <td>Jane Smith</td>
                <td>2026-02-02</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td>$120.00</td>
                <td><button class="btn btn-sm btn-secondary">View</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
