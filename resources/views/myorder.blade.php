@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>My Orders</h2>
            @foreach($order as $item)
            <div class="row search-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <h4>User Name:{{$item->user_name}}</h4>
                    <h5>Item Name: {{$item->name}}</h5>
                    <h5>Address :{{$item->address}} </h5>
                    <h5>Payment Status:{{$item->payment_status}}</h5>
                    <p>Payment Method :{{$item->payment_method}}</p>
                    <!-- <h5>{{$item->description}}</h5> -->
                    <p>Price: {{$item->price}}</p>

                </div>

            </div>
            @endforeach
        </div>

    </div>

</div>
@endsection