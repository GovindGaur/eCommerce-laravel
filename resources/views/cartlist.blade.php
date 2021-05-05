@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Result for Product</h2>
            <a class="btn btn-success" href="ordernow"> Order Now</a>
            @foreach($product as $item)
            <div class="row search-item cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>{{$item->description}}</h5>
                        <p>{{$item->price}}</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a href="removecart/{{$item->card_id}}"><button class="btn btn-warning">Remove For Cart</button></a>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="ordernow"> Order Now</a>
    </div>

</div>
@endsection