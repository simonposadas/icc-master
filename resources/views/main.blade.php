@extends('layouts.nav')

@section('title','Main')

@section('content')
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Welcome to Irmalyns Catering</title>

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
      background-image: url('images/Orange.jpg');
    }
    .Details{
      background-color: white;
      padding: 20px;
    }
    .next{
      position: absolute;
      right: 5%;
      bottom: -160%;
    }
    .Imgbtn1{
      position: absolute;
      left: 15%;
      top: 25%;
    }
    .Imgbtn2{
      position: absolute;
      right: 15%;
      top: 25%;
    }
    .Imgbtn3{
      position: absolute;
      left: 15%;
      top: 85%;
    }
    .Imgbtn4{
      position: absolute;
      right: 15%;
      top: 85%;
    }
    .Imgbtn5{
      position: absolute;
      left:  15%;
      top: 145%;
    }
    .Imgbtn6{
      position: absolute;
      right: 15%;
      top: 145%;
    }
    .Imgbtn7{
      position: absolute;
      left:  15%;
      top: 205%;
    }

    
  </style>
</head>
<body>
    <center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Packages </h2></center>

    <div class="Imgbtn1">
          <center><h1><span class="label label-default">Package 1</span></h1></center>
          <center><h4>Price:500 per head</h4></center>
          <a href="/Package1"><img class="" src="images/1page_img1.jpg" alt="Generic placeholder image"></a>
        </div>

    <div class="Imgbtn2">
          <center><h1><span class="label label-default">Package 2</span></h1></center>
          <center><h4>Price:450 per head</h4></center>
          <a href="/Package2"><img class="" src="images/1page_img2.jpg" alt="Generic placeholder image"></a>
        </div>

    <div class="Imgbtn3">
          <center><h1><span class="label label-default">Package 3</span></h1></center>
          <center><h4>Price:400 per head</h4></center>
          <a href="/Package3"><img class="" src="images/1page_img3.jpg" alt="Generic placeholder image"></a>
        </div>
    
    <div class="Imgbtn4">
          <center><h1><span class="label label-default">Package 4</span></h1></center>
          <center><h4>Price:350 per head</h4></center>
          <a href="/Package4"><img class="" src="images/1page_img4.jpg" alt="Generic placeholder image"></a>
        </div>

    <div class="Imgbtn5">
          <center><h1><span class="label label-default">Package 5</span></h1></center>
          <center><h4>Price:300 per head</h4></center>
          <a href="/Package5"><img class="" src="images/1page_img5.jpg" alt="Generic placeholder image"></a>
        </div>
        
    <div class="Imgbtn6">
          <center><h1><span class="label label-default">Package 6</span></h1></center>
          <center><h4>Price:290 per head</h4></center>
          <a href="/Package6"><img class="" src="images/1page_img6.jpg" alt="Generic placeholder image"></a>
        </div>
        
    <div class="Imgbtn7">
          <center><h1><span class="label label-default">Package 7</span></h1></center>
          <center><h4>Price:280 per head</h4></center>
          <a href="/Package7"><img class="" src="images/1page_img7.jpg" alt="Generic placeholder image"></a>
        </div>                    
    
   <div class="next">
   <p><a href="/Packages"><button type="button" class="btn btn-primary btn-lg">Back</button></p>
   </div>
      


    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>
@endsection