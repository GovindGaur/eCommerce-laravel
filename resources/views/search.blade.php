@extends('master')
@section('content')
<div class="container custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h2>Result for Product</h2>
            @foreach($product as $item)
            <div class="search-item">
                <a href="detail/{{$item['id']}}">
                    <img class="trending-image" src="{{$item['gallery']}}" alt="Chania">
                    <div class="">
                        <h2>{{$item['name']}}</h2>
                        <h5>{{$item['description']}}</h5>
                        <p>{{$item['price']}}</p>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>

</div>
@endsection