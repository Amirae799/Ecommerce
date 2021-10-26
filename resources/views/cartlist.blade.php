@extends('master')
@section('Content')
    <div class="custom-product" >
        <div class="col-sm-10" >
        <h3>Cart List</h3>
        <a class="btn btn-success" href="/ordernow">Order Now</a>
            <div class="trending-wrapper" >

                @foreach($products as $item)
                    <div class="searched-item cart-list-devider" >
                        <div class="col-sm-3" >
                        <a href="detail/{{$item->id}}" style="color: darkcyan">
                            <img class="trending-img" src="{{$item->gallery}}"  >
                        </a>
                        </div>
                        <div class="col-sm-4">
                        <div class="" style="margin-left: 150px;">
                            <h2 style="margin-left: 70px;size: 20px">{{$item->name}}</h2>
                            <h5 style="margin-left: 70px;size: 20px">{{$item->description}}</h5>
    </div>
                    </div>

    <div class="col-sm-3">
        <a href="remove/{{$item->cart_id}}"  style="margin-left: 220px" class="btn btn-warning">Remove to cart</a>
            </div>
</div>
            @endforeach
            </div>

        </div>
  
@endsection

