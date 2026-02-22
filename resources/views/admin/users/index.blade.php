@extends('layouts.admin')

@section('content')
<h2 class="mb-4">User Management</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Joined</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Admin User</td>
            <td>admin@example.com</td>
            <td><strong>Admin</strong></td>
            <td>2026-01-01</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Regular User</td>
            <td>user@example.com</td>
            <td>Customer</td>
            <td>2026-02-01</td>
        </tr>
    </tbody>
</table>
@endsection
