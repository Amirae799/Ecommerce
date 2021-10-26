<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Store;

use App\Http\Controllers\UserController;
use App\Models\User;

$total=0;
if(Session::has('user')){
$total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" href="/"><span style="color: darkcyan">EC</span>om<span style="color: darkcyan">M</span>erce</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/myorder">Orders</a>
            </li>
            <li>
                <form class="form-inline" action="/search">
                    <input class="form-control mr-sm-2 search-box" type="text" name="query" placeholder="Search" style="width:800px !important;">
                    <button class="btn btn" type="submit" style="background-color: darkcyan;color:white" >Search</button>
                </form>

            </li>
            <li><a href="cartlist" style="color: whitesmoke;margin-left: 20px;margin-right: 60px">Cart({{$total}})</a> </li>
            @if(Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:darkcyan">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout" style="padding: 20px;color:">logout</a></li>

                  @if(session('user')->hasRole('superadmin'))
                    <li><a href="{{route('admin.allusers')}}" 
                      style="padding: 20px;color:darkcyan">Users</a></li>
                @endif

                </ul>
            </li>
            @else

                <li><a href="login" style="color: darkcyan;">Login</a> </li>

                <li><a href="register" style="color: darkcyan;margin:50px">Register</a> </li>
            @endif
        </ul>

    </div>
</nav>



