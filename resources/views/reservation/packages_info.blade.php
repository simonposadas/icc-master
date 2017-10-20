@extends('layouts.nav')

@section('title','Package Info')

@section('content')
<style type="text/css">
    body{
        background-image: url('{{ asset("images/background.jpg") }}');
    }
    div.Details{
        background-color: white;
        padding: 20px;
    }
    div.next{
        position: absolute;
        right: 5%;
        bottom: 0%;
    }



</style>

<center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Menu </h2></center>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="Details">
            <center><h2><p class="bg-primary">{{ $package->package_name }} </h2></center>
            @foreach($package->package_food as $food)
            <h3>
                <Strong>{{ $food->food_type->food_type_name }} : </Strong>
                <small>{{ $food->desc }}</small>
            </h3>
            @endforeach
        </div>
    </div>
</div>
{!! Form::open(['url' => route('r.packages.client', ['id' => $id, 'package_id' => $package->package_id]), 'method' => 'GET']) !!}
{!! Form::close() !!}
<div class="next">
    <p>
        <!--        <a href="/Main">-->
        <a href="{{ url()->previous() }}" role="button" class="btn btn-primary btn-lg">Back</a>
        <!--            <a href="/Details">-->

        <button type="button" class="btn btn-primary btn-lg" id='btn-next'>Next</button>
    </p>
</div>

<script>
    $('#btn-next').on('click', function () {
        $('form').submit();
    });
</script>

@endsection

