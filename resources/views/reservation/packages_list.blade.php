@extends('layouts.nav')

@section('title','Package List')

@section('content')

<style type="text/css">
    body{
        background-image: url('{{ asset("images/background.jpg") }}');
        }
</style>
<center><h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Foods </h2></center>

<div class="container-fluid col-md-offset-3 ">
    {{ csrf_field() }}
    <div class="form-group col-md-8">
        <form method="post" action="{{ route('packagevalue') }}">
        <input type="text" value="{{  $packages -> package_id }}" name="id" class="hidden"> 
        <label>Choose Appetizer</label>
            
        <div class="form-group">
            <select class="form-control" name="app1" id="app1"> 
            <option value=""> Select </option>       
            @foreach($appetite as $appetites)
                       
                <option value="{{$appetites->food_name}}">{{$appetites->food_name}}</option> 
            @endforeach 
            </select>
        </div>
            <div class="form-group">
            <select class="form-control" name="app2" id="app2">
            <option value="">Select</option>
            @foreach($appetite as $appetites)
                <option value="{{$appetites->food_name}}">{{$appetites->food_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Choose Soup</label>
            <select class="form-control" name="sp1" id="sp1">
            <option value="">Select</option>
            @foreach($sp as $sps)
                <option value="{{$sps->food_name}}">{{$sps->food_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="sp2" id="sp2">
            <option value="">Select</option>
            @foreach($sp as $sps)
                <option value="{{$sps->food_name}}">{{$sps->food_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="sp3" id="sp3">
            <option value="">Select</option>
            @foreach($sp as $sps)
                <option value="{{$sps->food_name}}">{{$sps->food_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="sp4" id="sp4">
            <option value="">Select</option>
            @foreach($sp as $sps)
                <option value="{{$sps->food_name}}">{{$sps->food_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Choose Main Dishes</label>
            <select class="form-control" name="dish1" id="dish1">
            <option value="">Select</option>
            @foreach($main as $mains)
                <option value="{{$mains->food_name}}">{{$mains->food_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dish2" id="dish2">
            <option value="">Select</option>
            @foreach($main as $mains)
                <option value="{{$mains->food_name}}">{{$mains->food_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dish3" id="dish3">
            <option value="">Select</option>
            @foreach($main as $mains)
                <option value="{{$mains->food_name}}">{{$mains->food_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dish4" id="dish4">
            <option value="">Select</option>
            @foreach($main as $mains)
                <option value="{{$mains->food_name}}">{{$mains->food_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dish5" id="dish5">
            <option value="">Select</option>
            @foreach($main as $mains)
                <option value="{{$mains->food_name}}">{{$mains->food_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="dish6" id="dish6">
            <option value="">Select</option>
            @foreach($main as $mains)
                <option value="{{$mains->food_name}}">{{$mains->food_name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Choose Dessert</label>
            <select class="form-control" name="dess1" id="dess1">
            <option value="">Select</option>
            @foreach($dessert as $desserts)
                <option value="{{$desserts->food_name}}">{{$desserts->food_name}}</option>
            @endforeach
            </select>
          </div>

          <div class="form-group">
            <select class="form-control" name="dess2" id="dess2">
            <option value="">Select</option>
            @foreach($dessert as $desserts)
                <option value="{{$desserts->food_name}}">{{$desserts->food_name}}</option>
            @endforeach
            </select>
          </div>

        <div class="form-group">
            <div class="form-group">
                <a href="/reservation/packages" type="button" class="btn btn-primary btn-lg">Back</a>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Next</button>
            </div>
        </div>
        </div>
        {{ csrf_field() }}
    </form>
        
      </div>




   <!--  @for($i=0; $i<count($packages);)
        <!-- first column -->
        <!-- @if($i == count($packages) - 1)
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
            <!-- <div class="col-md-6">
                <h1><span class="label label-default">{{ $packages[$iteration]->package_name }}</span></h1>
                <h4>P{{ $packages[$iteration]->package_price }} per head</h4>
                <a href="{{ route('r.packages.info', ['id' => $packages[$iteration]->package_type_id, 'package_id' => $packages[$iteration]->package_id]) }}">
                    <img class="" src="{{ asset('images/1page_img1.jpg') }}" alt="Generic placeholder image">
                </a>

            </div>
        </div>
        @endfor -->
</div>  

@endsection

@section('scripts')

    <script>

        $(document).ready(function(){

            $('#app1').hide();
            $('#app2').hide();

            $('#sp1').hide();
            $('#sp2').hide();
            $('#sp3').hide();
            $('#sp4').hide();

            $('#dish1').hide();
            $('#dish2').hide();
            $('#dish3').hide();
            $('#dish4').hide();
            $('#dish5').hide();
            $('#dish6').hide();

            $('#dess1').hide();
            $('#dess2').hide();

            if({{  $packages -> package_id }} == 1){

                $('#app1').show();
                $('#app2').show();

                $('#sp1').show();
                $('#sp2').show();
                $('#sp3').show();
                $('#sp4').show();
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();
                $('#dish4').show();
                $('#dish5').show();
                $('#dish6').show();

                $('#dess1').show();
                $('#dess2').show();

            }

            if({{  $packages -> package_id }} == 2){

                $('#app1').show();
                $('#app2').show();

                $('#sp1').show();
                $('#sp2').show();
                $('#sp3').show();
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();
                $('#dish4').show();
                $('#dish5').show();
                $('#dish6').show();

                $('#dess1').show();
                $('#dess2').show();

            }

            if({{  $packages -> package_id }} == 3){

                $('#sp1').show();
                $('#sp2').show();
                $('#sp3').show();
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();
                $('#dish4').show();
                $('#dish5').show();
                $('#dish6').show();

                $('#dess1').show();
                $('#dess2').show();

            }

            if({{  $packages -> package_id }} == 4){
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();
                $('#dish4').show();
                $('#dish5').show();

                $('#dess1').show();
                $('#dess2').show();

            }

            if({{  $packages -> package_id }} == 5){
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();
                $('#dish4').show();
                $('#dish5').show();

                $('#dess1').show();

            }

            if({{  $packages -> package_id }} == 6){
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();
                $('#dish4').show();

                $('#dess1').show();

            }

            if({{  $packages -> package_id }} == 7){
                
                $('#dish1').show();
                $('#dish2').show();
                $('#dish3').show();

                $('#dess1').show();

            }

        });


    </script>

@endsection
