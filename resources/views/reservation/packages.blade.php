@extends('layouts.nav')

@section('title','Reservation Packages')

@section('content')
<style type="text/css">
    body{
        background-image: url('{{ asset("images/Orange.jpg") }}');
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
</style>

<div class="container-fluid col-md-offset-2">
    @for($i=0; $i<count($package_types);)
        <!-- first column -->
        @if($i == count($package_types) - 1)
        @break
        @endif
        <div class="row">
            <div class="col-md-6">
                <?php $iteration = $i == 0 ? $i : ++$i; ?>
                <h1><span class="label label-default">{{ $package_types[$iteration]->desc }}</span></h1>
                <a href="{{ route('r.packages.list', ['id' => $package_types[$iteration]->id ]) }}">
                    <img class="" src="{{ asset('images/main.jpg') }} " alt="Generic placeholder image"/>
                </a>
            </div>
            <?php $iteration = ++$i; ?>

            @if($i == count($package_types) - 1)
            @break
            @endif
            <!-- second column -->
            <div class="col-md-6">
                <h1><span class="label label-default">{{ $package_types[$iteration]->desc }}</span></h1>
                <a href="{{ route('r.packages.list', ['id' => $package_types[$iteration]->id ]) }}">
                    <img class="" src="{{ asset('images/main.jpg') }} " alt="Generic placeholder image"/>
                </a>
            </div>
        </div>
        @endfor
</div>  

<!-- wedding buffet 
<div class="Imgbtn1">
    <center><h1><span class="label label-default">Wedding Buffet Menu</span></h1></center>
    <a href="{{ route('r.packages.list', ['id' => 1]) }}">
        <img class="" src="{{ asset('images/main.jpg') }} " alt="Generic placeholder image"/>
    </a>
</div>

 merienda 
<div class="Imgbtn2">
    <center><h1><span class="label label-default">Merienda Menu</span></h1></center>
    <a href='Merienda.html'>
        <img class="" src="{{ asset('images/merienda.jpg') }}" alt="Generic placeholder image"/>
    </a>
</div>-->

<div class="next">
    <p><a href="{{ route('r.details') }}"><button type="button" class="btn btn-primary btn-lg">Back</button></p>
</div>
@endsection







