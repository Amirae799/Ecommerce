@extends('master')
@section('Content')
    <div class="custom-product"  >
        <div class="col-sm-10">
            <div class="trending-wrapper" >
                <h3 style="text-align: center;color:darkcyan">Orders List</h3>
                @foreach($orders as $item)
                    <div class="searched-item cart-list-devider" style="display: inline">
                        <div class="col-sm-4" >
                            <a href="detail/{{$item->id}}" style="color:darkcyan">
                                <img class="trending-img" style="" src="{{$item->gallery}}"  >
                            </a>
                        </div>
                        <div class="col-sm-4" style="margin-right: 20px;padding:40px">
                            
                              <ul>
                                <li >Name:{{$item->name}}</li>
                                <li >Delivery Status :{{$item->status}}</li>
                                <li >Payment Status  :{{$item->payment_status}}</li>
                                <li>Payment Method   :{{$item->payment_method}}</li>
                                <li >Delivery Address :{{$item->address}}</li>
                              </ul>
                            </div>
                      
                      
                      </div>

                    </div>
                    </div>
                @endforeach
            </div>
            
@endsection


