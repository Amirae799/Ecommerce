@extends('master')
@section('Content')
    <div class="custom-product"  >
<div class="col-sm-6">
            <h2 STYLE="margin: 40px;color: darkcyan">Orders Table</h2>

            <table class="table table-bordered">

                <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{$total}} $</td>

                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$</td>

                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>100</td>

                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>

                </tr>
                </tbody>
            </table>
    <br>
    <form action="/orderplace" method="post">
        @csrf
        <div class="form-group">

            <textarea  class="form-control"  name="address" placeholder="address" ></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Payment Method</label>
            <p> <input type="radio"  name="payment" ><span>Online Payment</span></p>
            <p> <input type="radio"  name="payment" ><span>EMI Payment</span></p>
            <p> <input type="radio"  name="payment" ><span>Payment on delivery</span></p>
        </div>

        <button type="submit" class="btn btn" style="background-color: darkcyan;color:white">Order Now</button>
    </form>
</div>

  
@endsection

