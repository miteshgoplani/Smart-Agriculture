@extends('layouts.index')
<!--TODO: whole thing-->
@section('content')
<div class="container">
    <div class="well">
        <table class="table">
        @if(count($cartitems)>0)
        <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        </tr>
        @foreach($cartitems as $cartitem)
        <tr>
        <td>{{$cartitem->name}}</td>
        <td>{{$cartitem->price}}</td>
        <td>{{$cartitem->quantity}}</td>
        </tr>
        @endforeach
        <td class="right"><b>No. of items: {{$totalitems}}</b></td>
        <td class="right"><b>Total: {{$total}}</b></td>
        </table>
    </div>
    <button type="submit" class="btn btn-primary">Purchase</button>
</div>
        @else
        <p>No Items in cart. Buy some of our products!</p>
    </div>
</div>
        @endif
@endsection