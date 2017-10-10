@extends('layouts.nav')

@section('title','Credentials')

@section('content')
<head>
  <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
  <script src='fullcalendar/lib/jquery.min.js'></script>
  <script src='fullcalendar/lib/moment.min.js'></script>
  <script src='fullcalendar/fullcalendar.js'></script>

  <script>

    $(document).ready(function() {
      
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2017-05-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: []
      });
      
    });

  </script>
  <style type="text/css">
    .calendar{
      margin-left: 20%;
      width: 60%;
      background-color:white;
      padding: 20px;
    }
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
                <li><a href="/home">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Menu</a></li>
                <li><a href="/Calendar">Reservation</a></li>
                <li class="active"><a href="/credentials">Check credentials</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      <!-- </div> -->
    </div>

    <center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Check Reservation </h2></center>
  


    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>

    
    
    
    <form method="post" action="/confirm"> 
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="Details">
            <center><h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Request Details </h2></center>
            <div form="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Number of Guest</th>
                    <th>Budget for Food</th>
                    <th>Budget for Equipments</th>
                    <th>Budget for Workers</th>
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
                </thead>
                  <tbody>
                    @foreach($reqDetails as $reqDetail)
                      <tr>
                        <td>{{ $reqDetail->reserv_id }}</td>
                        <td>{{ $reqDetail->reserv_guestNo }}</td>
                        <td>{{ $reqDetail->bud_food }}</td>
                        <td>{{ $reqDetail->bud_equip }}</td>
                        <td>{{ $reqDetail->bud_worker }}</td>
                        <td>{{ $reqDetail->reserv_date }}</td>
                        <td>{{ $reqDetail->reserv_time }}</td>
                      </tr>
                      <input type="text" name="code" class="form-control" value="{{ $reqDetail->reserv_id }}">

                    @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="next" class="form-control">
          
          <button class="btn btn-primary btn-lg" type="submit">Confirm</button>
          <button class="btn btn-primary btn-lg" type="button">Cancel</button>
          {{csrf_field()}}
          </form>
          <br>
        </div>
<script>
function goBack() {
    window.history.back();
}
</script>                      
   
   </div>

</body>
@endsection