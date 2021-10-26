@extends('master')
@section('Content')

<div class="custom-product"  >
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

                @foreach($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block" style="background-color:#1a202c;" >
                    <h3 >{{$item['name']}}</h3>
                    <p >{{$item['description']}}</p>
                    <p >{{$item['category']}}</p>

                </div>
                    </a>
            </div>

            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
  
</div>

    <br>
<div>
  <h1 style="text-align: center;color:darkcyan;margin:30px">Our Products</h1>
    @foreach($products as $item)
    <div class="gallery">
      <a target="_blank" href="detail/{{$item['id']}}">
        <img src="{{$item['gallery']}}" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">{{$item['name']}}</div>
    </div>
    @endforeach
</div>
</div>

@endsection
