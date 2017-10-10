@extends('layouts.nav')

@section('title','Calendar')

@section('content')


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
</style>
</head>

<center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Create Reservation </h2></center>

<div class="next" style='position:absolute; right:5%; bottom:0%;'>
    <p>
        <a href="{{ route('r.details') }}" role='button' class='btn btn-primary btn-lg'>Next</a>
    </p>
</div>
<div class="calendar"> 
    <div id='calendar'></div>
</div>

<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: new Date(),
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: <?php echo json_encode($events_data) ?>
        });
    });
</script>

@endsection