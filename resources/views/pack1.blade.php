<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    
  <title></title>
  <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
  <script src='fullcalendar/lib/jquery.min.js'></script>
  <script src='fullcalendar/lib/moment.min.js'></script>
  <script src='fullcalendar/fullcalendar.js'></script>

  
  <style type="text/css">
    
    body{
      background-image: url('images/background.jpg');
    }
    .Details{
      background-color: white;
      padding: 20px;
    }
    .next{
      position: absolute;
      right: 5%;
      bottom: 0%;
    }
    

    
  </style>
</head>
<body>
<div class="navbar-wrapper">
      <!-- <div class="container"> -->

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Menu</a></li>
                <li class="active"><a href="/Calendar">Reservation</a></li>
                <li><a href="">Check credentials</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      <!-- </div> -->
    </div>

    <center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Menu </h2></center>
    
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="Details">
          <center><h2><p class="bg-primary">Food</h2></center>
          <h3><Strong>Appetizer :</Strong><small>   Canapes (Ham, Cucumber and cheese)/ Nachos with Salsa Dip</small></h3>
          <h3><Strong>Soup :</Strong><small>   Pumpkin Soup / Mushroom Soup / Nido Soup / Creamy Vegetable Soup</small></h3>
          <h3><Strong>Salad :</Strong><small>   Salad Bar Garden Salad  (Iceberg Lettuce, Cucumber, Tomatoes, White Onions, Carrots, Kernel Corn) 
          Dressings: Caesar and Thousand Island /
          Waldorf Salad
          Hawaiian Macaroni Salad</small></h3>
          <h3><Strong>Main Entree :</Strong><small>   (A choice of 1 per dish)
          Country Style Cheesy Lasagna / Seafood Fettuccine Alfredo / Classic Ham and Crispy Bacon Carbonarra / Baked Macaroni with Anchovies/ Old Style Italian Sauce Spaghetti          
          
          Pot Roast Beef in Mushroom Sauce / Ox Tail Kare-Kare /  Beef Stroganoff /
          Holiday Beef with Olives / Beef Caldereta / Beef Mechado 
          
          Pork Tenderloin Teriyaki / Pork Hamonado / Barbeque Spareribs / 
          Pork Strips in Spicy Sauce / Pork Korean Sesame   

          Chicken Pastel / Chicken Courdon Bleu / Baked Chicken Barbeque / 
          Chicken Hamonado / Chicken Alexander / Chicken Teriyaki

          Fish Fillet with Homemade Tartar Sauce or Garlic Sauce / Grilled Fish with Lemon Butter Sauce / Rellenong Bangus

          Buttered Vegetables with Kernel Corn and Mushroom / Chapseuy /
          Gallacher Brown Creamy Potato / Mixed Vegetables / Lumpiang Ubod           
          Steamed Pandan Rice</small></h3>
          <h3><Strong>Dessert :</Strong><small>   Choose 2 desserts
          Fresh Fruits / White Salad / Buco Pandan / Fruit Salad / Leche Plan / Brownies and Blondies</small></h3>
          <h3><Strong>Drinks :</Strong><small>   Blue Lemonade / Four Season / Black Gulaman</small></h3>
          
              
          <!--<form class="form-horizontal">
            <div id="food-cont"></div>
            <div class="form-group">
              <div class="col-sm-offset-10 col-sm-2">
                <button type="button" class="btn btn-default addfood">ADD</button>
              </div>
            </div>
          </form>-->
        </div>
      </div>
    </div>
    
    <div class="next">
   <p><a href="{{ URL::previous() }}"><button type="button" class="btn btn-primary btn-lg">Back</button></a></p>
   </div>
      
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>
    <!--<script type="text/javascript">
      var optionType = "";
      $.ajax
      ({
        url: '/getType',
        type:'get',
        dataType : 'json',
        success:function(response) {
          response.forEach(function(data) {
            optionType += '<option value="'+data.food_type_id +'">'+data.food_type_name+'</option>';
          });
        }
      });
     var food = 0;
      $(document).on('click','.remove',function(){
        $('#food-cont .div'+$(this).data('id')).remove();
      });
      $('.addfood').click(function(){ 
        food++;
        addfood(food);
      });
      function addfood(n){
        var div1 = document.createElement("div");
        div1.setAttribute('class','form-group div'+n);
        $('#food-cont').append(div1);

        var ctgrydiv = document.createElement("div");
        ctgrydiv.setAttribute('class','col-sm-5 subdiv1'+n);
        $('#food-cont .div'+n).append(ctgrydiv);

        var fooddiv = document.createElement("div");
        fooddiv.setAttribute('class','col-sm-5 subdiv2'+n);
        $('#food-cont .div'+n).append(fooddiv);

        var remove = document.createElement("div");
        remove.setAttribute('class','col-sm-2 subdiv3'+n);
        $('#food-cont .div'+n).append(remove);
        $('#food-cont .subdiv3'+n).append('<div class="btn btn-primary remove" data-id="'+n+'">Remove</div');

        var newD = document.createElement("select");
        newD.setAttribute('id','ctgry'+n);
        newD.setAttribute('data-id',n);
        newD.setAttribute('class','form-control type ctgry'+n);
        // newD.setAttribute('name','menuCtgrys[]');
        $('#food-cont .subdiv1'+n).append(newD);
        
        var newF = document.createElement("select");
        newF.setAttribute('id','food'+n);   
        newF.setAttribute('class','form-control food'+n);
        // newF.setAttribute('name','menuFood[]');
        $('#food-cont .subdiv2'+n).append(newF);

        $('#food-cont #ctgry'+n).append("<option value=''>Type</option>");
        $('#food-cont #food'+n).append("<option value=''>Food</option>");

        $('#food-cont #ctgry'+n).append(optionType);
        // $('.search.dropdown').dropdown();
      }
      $(document).on('change','#food-cont .type',function(){
        var id = $(this).data('id');
        $.ajax
        ({
          url: '/getFoods',
          type:'get',
          data: {id:$(this).val()},
          dataType : 'json',
          success:function(response) {
            $('#food'+id).empty();
            var option = "";
            response.forEach(function(data) {
              option += '<option value="'+data.food_id +'">'+data.food_name+'</option>';
            });
            $('#food'+id).append(option);
          }
        });
      });
    </script>-->
 
</body>
</html>