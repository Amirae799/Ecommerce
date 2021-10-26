@extends('master')
@section('Content')
<div class="custom-product"  >
  <div class="col-sm-4">
      <a href="#">Filter</a>
  </div>
    <div class="col-sm-3">
        <div class="trending-wrapper" style="margin: 20px">
            <h2 style="color: lightseagreen">Result for products</h2>
            @foreach($products as $item)
                <div class="searched-item"  style="padding: 20PX;marign_bottom:20px">
                    <a href="detail/{{$item['id']}}" style="color: lightseagreen">
                        <img class="trending-img" src="{{$item['gallery']}}" style="position: center;size:20%" >

                        <h2 style="margin-left: 70px;size: 20px">{{$item['name']}}</h2>
                        <h5 style="margin-left: 70px;size: 20px">{{$item['description']}}</h5>
                    </a>
                </div>
        </div>
        @endforeach
    </div>
    </div>


@endsection
