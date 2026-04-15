@extends('layouts.app')

@section('content')

<div class="header">
    <div>☰</div>
    <div>Menu</div>
    <a href="/cart" style="color:white;">🛒</a>
</div>

<div class="content">

    <div class="category">
        <a href="/menu/food">Food</a>
        <a href="/menu/drink">Drink</a>
    </div>

    <div class="grid">
        @foreach($products as $p)
        <div class="card">
            <b>{{ $p->name }}</b><br>
            <span class="price">Rp {{ number_format($p->price) }}</span>

            <form action="/cart/add/{{ $p->id }}" method="POST">
                @csrf
                <button class="add-btn">Add to cart</button>
            </form>
        </div>
        @endforeach
    </div>

</div>

@endsection
