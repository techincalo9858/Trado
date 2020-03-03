<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel 5.7 Ajax Form Submission</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
   .error{ color:red; } 
  </style>
</head>
  
<body>
  
<div class="container">
<br> <br> <br>
    <div class="row">
        <div class="col-lg-6 offset-md-3">
        <form id="contact_us" method="post" action="javascript:void(0)">
            @csrf
            <div class="form-group">
                <label for="market">Select Market</label>
                <select class="form-control" name="market" id="market" >
                <option value="ETH/BTC">ETH/BTC</option>
                <option value="BTC/USD">BTC/USD</option>
                <option value="LTC/ETH">LTC/ETH</option>
                <option value=""></option>
                <option value="">5</option>
                </select>
            </div>
            <div>
          </form>
        </div>
    </div>
    <br>
    <br>
     <a href="http://w3schools.com" id="alrt" class="btn btn-danger">Click me</a>
</div>

</body>
</html>

<script>
    // $('#alrt').click(function(event){
    //     alert('This is a Click of a button');
    //     event.preventDefault();
    // });

    $( "#alrt" ).on({
        mouseenter: function(event) {
            console.log( "hovered over a div" );
            console.log( "event object:" );
            console.dir( event );
        },
        mouseleave: function() {
            console.log( "mouse left a div" );
        },
        click: function(event) {
            alert('This is a Click of a button');
            event.preventDefault();
        }
    });


    $('select').on('change',function(){
            $.ajax({
                url:'/ajaxselect',
                type: 'POST',
                data: $('#contact_us').serialize(),
                success:function(response){
                    swal({
                    icon: "success",
                    text: "Market changed successfully",
                    timer:3000,
                    });
                },
            });
        });
</script>