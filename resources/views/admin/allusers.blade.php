@extends('admin')
@section('Content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ecomm</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color:darkcyan;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .error {
            color: #ae1c17;
        }
        .links > a {
            color:darkcyan
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>



@if(Session::has('success'))

    <div class="alert alert-success">
           {{Session::get('success')}}
    </div>
    @endif


@if(Session::has('error'))
     <div class="alert alert-danger">
         {{Session::get('error')}}
     </div>
@endif

<h1 style="color:darkcyan ;margin-top:80px;text-align:center;margin-bottom:30px">SHOW ALL USERS</h1>
<table class="table table-bordered table-lg" style="margin-bottom:230px;">
    <thead>
    <tr style="background-color:darkcyan;color:white ">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">password</th>
        <th scope="col">Roles</th>

        <th scope="col">operation</th>
    </tr>
    </thead>
    <tbody>


    @foreach($users as $user)
        <tr>
            <th scope="row">{{$user -> id}}</th>
            <td>{{$user -> name}}</td>
            <td>{{$user -> email}}</td>
            <td>{{$user -> password}}</td>
            <td>
              @foreach ($user->roles as $role)
                {{$role->display_name}}  
              @endforeach
            </td>
            <td>
              <a href="{{URL('admin/edituser/'.$user -> id)}}" class="btn btn-primary"> Update</a>
              <a href="{{URL('admin/deleteuser/'.$user -> id)}}" class="btn btn-danger"> Delete</a>
              <a href="{{route('users.create')}}" class="btn btn-success"> Add</a>
            
           </td>

           

        </tr>
    @endforeach

    </tbody>


</table>

</body>
</html>
@endsection