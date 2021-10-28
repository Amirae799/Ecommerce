<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Store;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Admin;
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" href="/"><span style="color: lightseagreen">EC</span>om<span style="color: lightseagreen">M</span>erce</a>

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
                <a class="nav-link" href="{{route('admin.allproducts')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.allusers')}}">Users</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">Profile</a>
            </li>
            <li>
                <form class="form-inline" action="/search">
                    <input class="form-control mr-sm-2 search-box" type="text"
                     name="query" placeholder="Search" style="width:900px !important;">
                    <button class="btn btn-pramiry" style="background-color: darkcyan;color:white;margin-right:40px" type="submit" style="margin-right:160px">Search</button>
                </form>

            </li>
            @if(Session::has('admin'))
            <img src="{{Session::get('admin')['photo']}}" style="width:30px">
            <li class="dropdown" style="text-align: center">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:lightseagreen">{{Session::get('admin')['name']}}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout" style="padding: 20px;color:lightseagreen">logout</a></li>
               
                </ul>
            </li>
            @else

                <li><a href="login" style="color: darkcyan;margin:30px">Login</a> </li>

       
            @endif
        </ul>

    </div>
</nav>


