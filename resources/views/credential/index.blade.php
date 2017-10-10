@extends('layouts.nav')

@section('title','Credentials')

@section('content')
<style type="text/css">
    body{
        background-image: url('images/Orange.jpg');
    }
    .Details{
        background-color: white;
        padding: 20px;
    }
    div.next{
        position: absolute;
        right: 5%;
        bottom: 0%;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="Details">
                <center><h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Input Code </h2></center>
                {!! Form::text('reserv_id', '', ['class' => 'form-control', 'style' => 'text-align:center; font-size:30px;']) !!}
            </div>
        </div>

        <div class="next">
             <button class="btn btn-primary btn-lg" id='btn-check' type="button">Check</button>
        </div>
    </div>
</div>

<script>
    $('#btn-check').on('click', function (){
        window.location = '/credential/' + $('input[name="reserv_id"]').val() + '/check-code';
//       $('form').submit(); 
    });
    </script>

@endsection
