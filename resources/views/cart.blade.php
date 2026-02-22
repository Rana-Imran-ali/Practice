@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-primary">Your Cart</h1>
    <div class="alert alert-secondary">Your cart is currently empty.</div>
    <a href="{{ route('shop') }}" class="btn btn-primary">Start Shopping</a>
</div>
@endsection
