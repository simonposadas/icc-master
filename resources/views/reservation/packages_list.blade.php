@extends('layouts.nav')

@section('title','Reservation Packages')

@section('content')

<style type="text/css">
    body{
        background-image: url('{{ asset("images/background.jpg") }}');
    }
    .Details{
        background-color: white;
        padding: 20px;
    }
    div.next{
        position: absolute;
        right: 5%;
        bottom: -160%;
    }
    /*    .Imgbtn1{
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
        }*/
</style>
<center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Packages </h2></center>

<div class="container-fluid col-md-offset-2">
    @for($i=0; $i<count($packages);)
        <!-- first column -->
        @if($i == count($packages) - 1)
        @break
        @endif
        <div class="row">
            <div class="col-md-6">
                <?php $iteration = $i == 0 ? $i : ++$i; ?>
                <h1><span class="label label-default">{{ $packages[$iteration]->package_name }}</span></h1>
                <h4>P{{ $packages[$iteration]->package_price }} per head</h4>
                <a href="{{ route('r.packages.info', ['id' => $packages[$iteration]->package_type_id, 'package_id' => $packages[$iteration]->package_id]) }}">
                    <img class="" src="{{ asset('images/1page_img1.jpg') }}" alt="Generic placeholder image">
                </a>
            </div>
            <?php $iteration = ++$i; ?>
            @if($i == count($packages) - 1)
            @break
            @endif
            <!-- second column -->
            <div class="col-md-6">
                <h1><span class="label label-default">{{ $packages[$iteration]->package_name }}</span></h1>
                <h4>P{{ $packages[$iteration]->package_price }} per head</h4>
                <a href="{{ route('r.packages.info', ['id' => $packages[$iteration]->package_type_id, 'package_id' => $packages[$iteration]->package_id]) }}">
                    <img class="" src="{{ asset('images/1page_img1.jpg') }}" alt="Generic placeholder image">
                </a>

            </div>
        </div>
        @endfor
</div>  

<div class="next">
    <p><a href="{{ url()->previous() }}"><button type="button" class="btn btn-primary btn-lg">Back</button></p>
</div>

@endsection