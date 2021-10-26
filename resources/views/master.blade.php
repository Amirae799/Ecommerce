<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ecomm</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body class="">
      <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script>
     Pusher.logToConsole = true;
    
    var pusher = new Pusher('1412174a77b0ea9fcd27', {
      cluster: 'eu'
    });
    
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
          </script>
    </body>
    {{View::make('header')}}
    @yield('Content')
    {{View::make('footer')}}
    <!--show alert
<script>
    $(document).ready(function (){
        $("button").click(function (){
            alert("all set")
        })
    })
</script>
-->
<style>
  img.slider-img{
      height: 400px !important;
      padding: 20px;
      margin-bottom: 50px;
      padding-bottom: 100px;
  }
.custom-product{
  height:400px;
  background-color: white;
  margin-bottom: 10px;
  

}
.trending-wrapper{
  margin: 30px;
}
.trending-img{
  height: 150px;
  align-items: center;
  margin-right: 90px;

position: center;


}
div.gallery {
  margin: 25px;
  padding: 30px;
  border: 1px solid #ccc;
  float: left;
  width: 400px;
  height: 400px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 300px;
  height:300px;
 
}

div.desc {
  padding: 35px;
  color: darkcyan;
  text-align: center;
}
text.trending-img{
  size: 20px;
  text-align: center;
  padding-top:100px;


}
.trending-item{
  float: left;
  position: relative;
  border:1px solid darkcyan;
  width: 20%;
}
.trending-wrapper{
  margin: 30px;

}
.cart-list-devider{
  border-bottom: 1px solid #ccc;
    margin-bottom:20px;
    padding-bottom:20px;
}




</style>
</html>
 