@extends('master')
@section('Content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>ecomm</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
  html,body{
background-image: url('https://www.casita.com/images/files/public/03062020113817AM-shutterstock_1417347668.jpg');
background-size: cover;
background-repeat: no-repeat;
height:100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
margin-left:550px;


}

.card{
height: 300px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}



.card-header h3{
color: white;
text-align: center;
}



.input-group-prepend span{
width: 50px;
background-color:darkcyan;
color:white;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}



.login_btn{
color: black;
background-color:darkcyan;
width: 100px;
align-content: center;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
  </style>
<body>
<div class="container" style="padding-top: 160px">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header" style="text-align: center">
				<h3>User Login </h3>
		
			</div>
			<div class="card-body">
				<form action="{{url('login')}}" method="POST">
          @csrf
				
          <div class="input-group form-group">
						<div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input type="email" class="form-control" placeholder="email" name="email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
         
			
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>
@endsection

