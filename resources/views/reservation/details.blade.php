@extends('layouts.nav')

@section('title','Reservation Details')

@section('content')
<style type="text/css">
    body{
        background-image: url('{{ asset("images/Orange.jpg") }}');
    }
    .Details{
        background-color: white;
        padding: 20px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="Details">
                <center>
                    <h2>
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Event Details 
                    </h2>
                </center>
                <!-- form -->
                {!! Form::open(['class' => 'form-horizontal', 'url' => route('r.details')]) !!}
                <!-- event type -->
                <div class="form-group{{ $errors->has('event_type') ? ' has-error' : '' }}">
                    {!! Form::label('event_type', 'Event Type:') !!}
                    {!! Form::select('event_type', config()->get('constants.event_types'), session('event_type', 'wedding'), ['class' => 'form-control']) !!}
                    @if ($errors->has('event_type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('event_type') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- schedule date -->
                <div class="form-group{{ $errors->has('reserv_date') ? ' has-error' : '' }}">
                    {!! Form::label('schedule_date', 'Schedule Date:') !!}
                    {!! Form::text('reserv_date', session('reserv_date', ''), [
                    'class' => 'form-control', 
                    'onkeydown' => 'return false;', 
                    'onkeyup' => 'return false', 
                    'required' => 'required',
                    'id' => 'date']) !!}
                    @if ($errors->has('reserv_date'))
                    <span class="help-block">
                        <strong>{{ $errors->first('reserv_date') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- time -->
                <div class="form-group{{ $errors->has('reserv_time') ? ' has-error' : '' }}">
                    {!! Form::label('schedule_time', 'Time:') !!}
                    <input type="Time" class="form-control"  name="reserv_time" required min='07:00:00' max='21:00:00' value='{{ session('reserv_time', '') }}'>
                    @if ($errors->has('reserv_time'))
                    <span class="help-block">
                        <strong>{{ $errors->first('reserv_time') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- no of guests -->  
                <div class="form-group{{ $errors->has('reserv_guestNo') ? ' has-error' : '' }}">
                    {!! Form::label('number_of_guests', 'No. of Guests:') !!}
                    <input type="Number" class="form-control" placeholder="Input here" name="reserv_guestNo" min="75" max="900" value='{{ session('reserv_guestNo', '') }}'>
                    @if ($errors->has('reserv_guestNo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('reserv_guestNo') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- event place -->
                <div class="form-group{{ $errors->has('event_place') ? ' has-error' : '' }}">
                    {!! Form::label('event_place', 'Event Place:') !!}
                    {!! Form::text('event_place', session('event_place', ''), [
                    'class' => 'form-control', 
                    'required' => 'required',
                    'placeholder' => 'Input place here']
                    ) !!}
                    @if ($errors->has('event_place'))
                    <span class="help-block">
                        <strong>{{ $errors->first('event_place') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="next">
            <p><a href="{{ URL::previous() }}"><button type="button" class="btn btn-primary btn-lg">Back</button></a>
                <a><button class="btn btn-primary btn-lg" type="submit">Next</button></p>
        </div>
        {!! Form::close() !!}
    </div>
</div>

<script>
    $(document).ready(function () {
        var date = new Date();
        date.setDate(date.getDate() + 30);
        $('#date').datepicker({
            'startDate': date,
            'orientation': 'bottom',
            'format': 'yyyy-mm-dd'
        });

    });
</script>      

<!--        </body>-->
@endsection