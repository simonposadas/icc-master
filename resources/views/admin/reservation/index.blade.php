 @extends('layouts.admin')

@section('title','Reservation')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reservation</h1>
            {!! Form::open(['method'=>'GET','url'=>'/searchName','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
            <div class="input-group custom-search-form">
                <input type="text" name="searchItem" class="input-group-sm" placeholder="Search" id="search_bar">
                    <span class="input-group-sm">
                        <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                        </button>
                </span>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Reservations
                    <div class="pull-right"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#createNewModal">Create New Reservation</button></div>
                </div>
                
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!--<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">-->
                        <table width="100%" class="table table-striped table-bordered table-hover sortable" id="dataTables-example">
                        <!--<thead>
                            <tr>
                                <th>Reserve ID</th>
                                <th>Customer Number</th>
                                <th>Customer Name</th>
                                <th>Guest Number</th>
                                <th>Budget</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>

                        </thead>-->
                        <thead>
                            <tr>
                                <th>Reserve ID</th>
                                <th>Customer Number</th>
                                <th>Customer Name</th>
                                <th>Guest Number</th>
                                <th>Budget</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach($reservation_details as $reservation_detail)
                        <tbody>
                            <!-- reserv id -->
                        <td>{{ $reservation_detail->reserv_id }}</td>
                        <!-- customer -->
                        <td>{{ $reservation_detail->cust_id }}</td>
                        <td>{{ $reservation_detail->cust_fname . " " . $reservation_detail->cust_lname }}</td>
                        <!-- reserv guest no -->
                        <td>{{ $reservation_detail->reserv_guestNo }}</td>
                        <!-- reserv budget -->
                        <td>&#8369;{{ $reservation_detail->cust_budget }}</td>
                        <!-- reserv date -->
                        <td>{{ $reservation_detail->reserv_date }}</td>
                        <!-- reserv time -->
                        <td>{{ $reservation_detail->reserv_time }}</td>
                        <!-- reserv status -->
                        <td>{{ config()->get('constants.status')[$reservation_detail->status] }}</td>
                        <!-- actions -->
                        <td>    
                            <div class="btn-group-vertical" role="group" aria-label="...">
                                @if($reservation_detail->status != 9)
                                <!-- mark as paid 1st half 
                                data-action="{{ route('admin.reserv.half', ['reserv_id' => $reservation_detail->reserv_id]) }}"
                                -->
                                @if($reservation_detail->status === 3)
                                <button class="btn btn-primary edittype" data-id="{{$reservation_detail->reserv_id}}"" id="first_half">Paid 1st half?</button>
                                @endif

                                <!--- Tag equipment & worker if reservation is paid 1st half or 2nd half -->
                                @if($reservation_detail->status == 5 || $reservation_detail->status == 6)
                                <!-- Tag worker -->
                                <a href='{{ route('admin.reserv.worker', ['reserv_id' => $reservation_detail->reserv_id]) }}' role='button' class='btn btn-default'>
                                    <i class='glyphicon glyphicon-user'></i>
                                    Tag Worker
                                </a>
                                <!-- tag equipment -->
                                <a href='{{ route('admin.reserv.equip', ['reserv_id' => $reservation_detail->reserv_id]) }}' role='button' class='btn btn-default'>
                                    <i class='glyphicon glyphicon-list-alt'></i>
                                    Tag Equipment
                                </a>
                                @endif

                                <!-- Mark as paid 2nd half if already paid the 1st half -->
                                @if($reservation_detail->status == 5)
                                <button class="btn btn-primary edit2type" data-id="{{$reservation_detail->reserv_id}}"" id="first_half">Paid 2nd half?</button>
                                @endif

                                <!-- mark reservation as done if status is *approved *confirmed *paid 1st and 2nd payment-->
                                @if($reservation_detail->status == 6)
                                <button class="btn btn-primary"
                                        data-action="{{ route('admin.reserv.mark.done', ['reserv_id' => $reservation_detail->reserv_id]) }}"
                                        data-toggle="confirmation"
                                        data-btn-ok-label="Ok" data-btn-ok-icon="fa fa-check"
                                        data-btn-ok-class="btn btn-sm btn-primary"
                                        data-btn-cancel-label="Cancel"
                                        data-btn-cancel-icon="fa fa-chevron-circle-left"
                                        data-btn-cancel-class="btn btn-sm btn-default"
                                        data-title="Are you sure to complete this reservation?"
                                        data-placement="left" data-singleton="true">
                                    Mark as done
                                </button>
                                @endif

                                <!-- cancel with refund if the status is 
                                *approved *paid 1st half *confirmed -->
                                @if($reservation_detail->status == 5)
                                <button class="btn btn-danger"
                                        data-action="{{ route('admin.reserv.cancel.with.refund', ['reserv_id' => $reservation_detail->reserv_id]) }}"
                                        data-toggle="confirmation"
                                        data-btn-ok-label="Ok" data-btn-ok-icon="fa fa-check"
                                        data-btn-ok-class="btn btn-sm btn-primary"
                                        data-btn-cancel-label="Cancel"
                                        data-btn-cancel-icon="fa fa-chevron-circle-left"
                                        data-btn-cancel-class="btn btn-sm btn-default"
                                        data-title="Are you sure to cancel this reservation with refund?"
                                        data-placement="left" data-singleton="true">
                                    Cancel with Refund
                                </button>
                                @endif

                                @if($reservation_detail->status == 6)
                                <button class="btn btn-danger"
                                        data-action="{{ route('admin.reserv.cancel.no.refund', ['reserv_id' => $reservation_detail->reserv_id]) }}"
                                        data-toggle="confirmation"
                                        data-btn-ok-label="Ok" data-btn-ok-icon="fa fa-check"
                                        data-btn-ok-class="btn btn-sm btn-primary"
                                        data-btn-cancel-label="Cancel"
                                        data-btn-cancel-icon="fa fa-chevron-circle-left"
                                        data-btn-cancel-class="btn btn-sm btn-default"
                                        data-title="Are you sure to cancel this reservation with no refund?"
                                        data-placement="left" data-singleton="true">
                                    Cancel with no Refund
                                </button>
                                @endif
                                @endif
                            </div>
                        </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

@endsection

@section('modal')
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Reservation Details</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="{{ route('admin.reserv.half', ['reserv_id' => $reservation_detail->reserv_id]) }}">
    
    <input type="hidden" class="id" name="id">
        <div class="form-group">
            <label>Receipt Number</label>
            <input type="text" class="form-control rcpt_no" placeholder="Input here" name="receipt_no" required>
        </div>
        <div class="form-group">
            <label>Amount Paid</label>
            <input type="Number" class="form-control amt_paid" placeholder="Input here" name="amount-paid" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      {{csrf_field()}}
    </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="add2Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Reservation Details</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="{{ route('admin.reserv.second.half', ['reserv_id' => $reservation_detail->reserv_id]) }}">
    {{csrf_field()}}
    <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label>Amount Paid</label>
            <input type="Number" class="form-control amt_paid" placeholder="Input here" name="amount_paid" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="createNewModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Reservation Details</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="{{ route('admin.reserv.save') }}">

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
      {{csrf_field()}}

      <button class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        var date = new Date();
     date.setDate(date.getDate() + 30);
    $('#date').datepicker({
        'startDate': date,
        'orientation': 'bottom',
        'format': 'yyyy-mm-dd'
    });


        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function () {
                $.ajax({
                    url: $(this).data('action'),
                    type: 'PUT',
                    dataType: 'json',
                    data: {'_token': '{{ csrf_token() }}', '_method': 'delete'},
                    success: function (data) {
                        swal({
                            'title': data.title,
                            'text': data.message,
                            'type': data.success ? 'success' : 'error',
                            'closeOnConfirm': false
                        }, function () {
                            window.location = '{{ Request::url() }}';
                        });
                    },
                    error: function (data) {
                        alert('Whoops! Something went wrong...');
                        return false;
                    }
                });

                return false;
            }
        });
    });

    $('.edittype').click(function () {
        $.ajax
       ({
            type : "get",
            url : "{{ route('admin.reserv') }}",
            data : {"id" : $(this).data('id')},
            dataType: "json",
            success: function(response) {
                response.forEach(function(data){
                    //var reservation_details = response.reservation_details;

                    $('#addModal .id').val(data.reserv_id);
                    $('#addModal .rcpt_no').val(data.receipt_no);
                    $('#addModal .amt_paid').val(data.amount_paid);
                })
            }
        });
        $('#addModal').modal('show');
    });

    $('.edit2type').click(function () {
        $.ajax
       ({
            type : "get",
            url : "{{ route('admin.reserv') }}",
            data : {"id" : $(this).data('id')},
            dataType: "json",
            success: function(response) {
                response.forEach(function(data){
                    $('#add2Modal .id').val(data.reserv_id);
                    $('#add2Modal .amt_paid').val(data.amount_paid);
                })
            }
        });
        $('#add2Modal').modal('show');
    });

</script>

<script src="{{ $url = asset('/js/sorttable.js') }}"></script>

<script>
    /**
     * Populate equipment modal
     * @param {type} param1
     * @param {type} param2
     */
//    $('#tagModal').on('show.bs.modal', function (){
//       var modal = $(this);
//       var equip_btn = modal.find('#btn-equipment');
//       equip_btn.on('click', function (){
//          var equip_div = modal.find('#tag-equipment');
//          var html = '';
//       });
//    });


//    $('.edittype').click(function () {
//        $.ajax
//                ({
//                    type: "get",
//                    url: '/getReserve',
//                    data: {"id": $(this).data('id')},
//                    dataType: "json",
//                    success: function (response) {
//                        response.forEach(function (data) {
//                            $('#editModal .id').val(data.reserv_id);
//                            /*$('#editModal .inpequipment').val(data.equipment_name);
//                             $('#editModal .inpcost').val(data.cost);
//                             $('#editModal .inpquantity').val(data.quantity);*/
//                        })
//                    }
//                });
//        $('#editModal').modal('show');
//    });
</script>


@endsection

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{url('css/datatables.css')}}" />
@endsection