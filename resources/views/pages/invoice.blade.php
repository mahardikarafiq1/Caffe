@extends('layouts.app')

@section('content')

<div class="header">
    <div>Invoice</div>
</div>

<div class="content" style="text-align:center;">

<h3>Total: Rp {{ number_format($order->total) }}</h3>
<p>Metode: {{ $order->payment_method }}</p>

@if($order->payment_method == 'E-Wallet')
{!! QrCode::size(150)->generate('PAY-'.$order->id.'-'.$order->total) !!}
@endif

<br><br>
<a href="/menu/drink" class="btn">Halaman Menu</a>

</div>

@endsection
