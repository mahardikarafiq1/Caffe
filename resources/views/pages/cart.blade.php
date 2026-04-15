@extends('layouts.app')

@section('content')

<div class="header">
    <div>←</div>
    <div>Cart</div>
    <div></div>
</div>

<div class="content">

@php $total = 0; @endphp

@if(session('cart'))
@foreach(session('cart') as $id=>$item)
<div class="cart-item">
    {{ $item['name'] }} <br>
    Rp {{ number_format($item['price']) }} x {{ $item['qty'] }}

    <br>
    <a href="/cart/update/{{ $id }}/plus" style="color:white;">+</a>
    <a href="/cart/update/{{ $id }}/minus" style="color:white;">-</a>
    <a href="/cart/remove/{{ $id }}" style="color:red;">Hapus</a>
</div>

@php $total += $item['price']*$item['qty']; @endphp
@endforeach
@endif

<div class="total">
Total: Rp {{ number_format($total) }}
</div>

<form action="/checkout" method="POST">
@csrf
<button class="orange" name="payment" value="Tunai">Bayar Tunai</button>
<br><br>
<button class="orange" name="payment" value="E-Wallet">E-Wallet</button>
</form>

</div>

@endsection
