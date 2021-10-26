@extends('admin')
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
background-image: url('https://cdn.vox-cdn.com/thumbor/CkEVq_VeDNYvhc4KtiseXuZrm1k=/0x0:6000x4000/1200x800/filters:focal(2520x1520:3480x2480)/cdn.vox-cdn.com/uploads/chorus_image/image/69239718/GettyImages_1094009490.0.jpg');
background-size: cover;
background-repeat: no-repeat;
height:100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 420px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color:darkcyan;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
text-align: center;
}



.input-group-prepend span{
width: 50px;
background-color:darkcyan;
color: white;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color:teal;
width: 100px;
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
			<div class="card-header">
				<h3>Create New User</h3>
		
			</div>
			<div class="card-body">
				<form action="{{route('storeUser')}}" method="POST">
          @csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="name">
						
					</div>
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
            <label style="color: aliceblue">Roles</label> 
          <div class="checkbox">
           <p> <input type="checkbox"  style="margin: 10px" name="roles[]"  value="superadmin"><span> Super_admin</span></p>
      
          </p>
          </div>
          <div class="checkbox">
           
            <p> <input type="checkbox" style="margin: 10px" name="roles[]"  value="user"><span> user</span></p>
      
          </p>
          </div>
			
					<div class="form-group">
						<input type="submit" value="Add User" class="btn float-right login_btn">
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

