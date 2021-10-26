@extends('master')
@section('Content')
<div class="container" style="padding: 20px;margin: 20px">
    <div class="row">
        <div class="col-sm-6">
            <img  class="detail-img" src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Details : {{$product['description']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h5>Price : {{$product['price']}}</h5>
           
            <br>
            <br>

            <form action="/add_to_cart" method="Post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add To Cart</button>
            </form>
            <br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>

    </div>
<br>
<br>

@endsection
