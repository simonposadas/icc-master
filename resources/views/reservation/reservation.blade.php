@extends('layouts.nav')

@section('title','Details')

@section('content')


<style type="text/css">
    body{
        background-image: url('{{ asset("images/background.jpg") }}');
    }
    div.next{
        position: absolute;
        right: 5%;
        bottom: -70%;
    }

</style>

<center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Create Reservation </h2></center>

{!! Form::open(['class' => 'form-horizontal', 'method' => 'POST', 'url' => route('r.packages.store', ['id' => $id, 'package_id' => $id])]) !!}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="Details">
                <center><h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Client Details </h2></center>

                <!-- fname -->
                <div class="form-group{{ $errors->has('cust_fname') ? ' has-error' : '' }}">
                    <label for="inputfirstname">First Name:</label>
                    <input type="letters" class="form-control" placeholder="Input here" name="cust_fname" required value="{{ old('cust_fname') }}">
                    @if ($errors->has('cust_fname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cust_fname') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- lname -->
                <div class="form-group{{ $errors->has('cust_lname') ? ' has-error' : '' }}">
                    <label for="inputlastname">Last Name:</label>
                    <input type="letters" class="form-control" placeholder="Input here" name="cust_lname" required value="{{ old('cust_lname') }}">
                    @if ($errors->has('cust_lname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cust_lname') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- gender -->
                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label class="checkbox-inline">Gender</label>
                    <label class="checkbox-inline">
                        <input type="radio" name="gender" value="M" required> Male
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" name="gender" value="F" required> Female
                    </label>
                    @if ($errors->has('gender'))
                    <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- contact no -->
                <div class="form-group{{ $errors->has('contNo') ? ' has-error' : '' }}">
                    <label for="inputcontactnumber">Contact No:</label>
                    <input type="Number" class="form-control" placeholder="Input here" name="contNo" required value="{{ old('contNo') }}">
                    @if ($errors->has('contNo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contNo') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- address -->
                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="inputaddress">Address:</label>
                    <input type="Address" class="form-control" placeholder="Input here" name="address" required value="{{ old('address') }}">
                    @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- email address -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="inputemail">Email address:</label>
                    <input type="Email" class="form-control"  placeholder="Input here" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- cost -->
                <!--<div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                    <label>Estimated Cost: </label> Php{{ session('reserv_guestNo') }} <br>
                    {!! Form::hidden('reserv_guestNo', session('reserv_guestNo', '*', '50')) !!}
                </div>-->

                <!-- budget -->
                <div class="form-group{{ $errors->has('cust_budget') ? ' has-error' : '' }}">
                    <label for="inputbudget">Budget for the event:</label>
                    <input type="Number" class="form-control"  placeholder="Input here" name="cust_budget" required value="{{ old('cust_budget') }}">
                    @if ($errors->has('cust_budget'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cust_budget') }}</strong>
                    </span>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <input type="text" value="{{  $id }}" name="id" class="hidden">
    <input type="text" value="{{  $foods }}" name="foods" class="hidden">

    <!-- Event Details -->  
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="Details">
                <center><h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Event Details </h2></center>
                <div class="form-group">
                    <label>Event Type: </label> {{ session('event_type') }} <br>
                    {!! Form::hidden('event_type', session('event_type')) !!}
                    <label>Schedule Date: </label> {{ session('reserv_date') }} <br>
                    {!! Form::hidden('reserv_date', session('reserv_date')) !!}
                    <label>Time: </label> {{ session('reserv_time') }} <br>
                    {!! Form::hidden('reserv_time', session('reserv_time')) !!}
                    <label>No of Guests: </label> {{ session('reserv_guestNo') }} <br>
                    {!! Form::hidden('reserv_guestNo', session('reserv_guestNo')) !!}
                    <label>Event Place: </label> {{ session('event_place') }} <br>
                    {!! Form::hidden('event_place', session('event_place')) !!}
                    <label>Package: </label> {{ $id }} <br>
                    {!! Form::hidden('package_id', session('package_id')) !!}
                </div>
            </div>
        </div>
        <div class="next">
            <button type="button" class="btn btn-primary btn-lg" onclick="goBack()">Back</button>
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </div>
{!! Form::close(); !!}

<script type="text/javascript">

    function goBack() {
        window.history.back();
    }
</script>

@endsection



