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

<div class='container'>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="Details">
                <center><h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Request Details </h2></center>
                <div form="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Number of Guest</th>
                                <th>Budget for Food</th>
                                <th>Budget for Equipment</th>
                                <th>Budget for Workers</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $reservation_detail->reserv_id }}</td>
                                <td>{{ $reservation_detail->reserv_guestNo }}</td>
                                <td>{{ $reservation_detail->bud_food }}</td>
                                <td>{{ $reservation_detail->bud_equip }}</td>
                                <td>{{ $reservation_detail->bud_worker }}</td>
                                <td>{{ $reservation_detail->reserv_date }}</td>
                                <td>{{ $reservation_detail->reserv_time }}</td>
                                <td>{{ $reservation_detail->total_pay }}</td>
                                <td>{{ config()->get('constants.status')[$reservation_detail->status] }} </td>
                            </tr>
                        <input type="text" name="code" class="form-control" value="{{ $reservation_detail->reserv_id }}">
                        </tbody>
                    </table>
                </div>

                @if($reservation_detail->status == 2)
                <div class="alert alert-danger">
                    <label class='control-label'>Disapprove Reason</label>
                    <p>{{ $reservation_detail->disapprove_reason }}</p>
                </div>
                @endif
            </div>
        </div>

        <!-- confirm form -->
        {!! Form::open(['url' => route('credential.confirm', ['reserv_id' => $reservation_detail->reserv_id]), 'id' => 'frm-confirm']) !!}
        {{ method_field('PUT') }}
        {!! Form::close() !!}

        <!-- cancel form -->
        {!! Form::open(['url' => route('credential.cancel', ['reserv_id' => $reservation_detail->reserv_id]), 'id' => 'frm-cancel']) !!}
        {{ method_field('PUT') }}
        {!! Form::close() !!}


        <div class="next" class="form-control">
            @if($reservation_detail->status != 2 && $reservation_detail->status != 0 && $reservation_detail->status != 4)
            @if($reservation_detail->status == 1)
            <button class="btn btn-primary btn-lg" type="submit" id='btn-confirm'>Confirm</button>
            @endif
            <button class="btn btn-primary btn-lg" type="button" id='btn-cancel'>Cancel</button>           
            @endif
        </div>
    </div>
</div>

<script>
    $('#btn-confirm').on('click', function () {
        $('#frm-confirm').submit();
    });

    $('#btn-cancel').on('click', function () {
        $('#frm-cancel').submit();
    });
</script>


@endsection