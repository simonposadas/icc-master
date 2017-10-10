@extends('layouts.nav')

@section('title','Calendar')

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
    <center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Create Reservation </h2></center>
  

   <div class="next">
   <p><a href="{{ route('r.details') }}"><button type="button" class="btn btn-primary btn-lg">Next</button></p></div>
      <div class="calendar">
  
    <div id='calendar'></div>

</div>


    <script>window.jQuery || document.write('<script src="bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap-3.3.7/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>

    
</body>
@endsection