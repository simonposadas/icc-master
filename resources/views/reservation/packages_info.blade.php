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
            
            <h1>Food Selection</h1>
            <div class="Details">
                <h3>Appetizer</h3>
                <input type="text" class="hidden" value="
                {{ $packages -> package_id }}">
                {{ $app1 }}<br>
                {{ $app2 }}
           </div>

           <div class="Details">
                <h3>Soup</h3>
                {{ $sp1 }}<br>
                {{ $sp2 }}<br>
                {{ $sp3 }}<br>
                {{ $sp4 }}
           </div>

           <div class="Details">
                <h3>Main Dish</h3>
                {{ $dish1 }}<br>
                {{ $dish2 }}<br>
                {{ $dish3 }}<br>
                {{ $dish4 }}<br>
                {{ $dish5 }}<br>
                {{ $dish6 }}<br>
           </div>

           <div class="Details">
                <h3>Dessert</h3>
                {{ $dess1 }}<br>
                {{ $dess2 }}
           </div>
        
        </div>
    </div>
</div>  


<div class="next">
    <p>
        <!--        <a href="/Main">-->
        <a href="{{ url()->previous() }}" role="button" class="btn btn-primary btn-lg">Back</a>
        <!--            <a href="/Details">-->

        <!-- <a href="{{ route('r.packages.client', ['package_id' => $packages->package_id , 'id'=> $packages->package_id, 'app1' => $app1, 'app2' => $app2, 'sp1' => $sp1, 'sp2' => $sp2, 'sp3' => $sp3, 'sp4' => $sp4, 'dish1' => $dish1,'dish2' => $dish2,'dish3' => $dish3,'dish4' => $dish4,'dish5' => $dish5,'dish6' => $dish6, 'dess1' => $dess1 , 'dess2' => $dess2 ]) }}" type="button" class="btn btn-primary btn-lg" id='btn-next'>Next</a> -->
    </p>
</div>

<script>




    $('#btn-next').on('click', function () {
        $('form').submit();
    });
</script>

@endsection

