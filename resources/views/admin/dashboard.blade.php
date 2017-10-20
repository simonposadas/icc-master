@extends('layouts.admin')

@section('title','Dashboard')

@section('content')

<style>

	.line-either-side {
		overflow: hidden;
		text-align: center;
	}

	.line-either-side:before,
	.line-either-side:after {
		background-color: #e5e5e5;
		content: "";
		display: inline-block;
		height: 1px;
		position: relative;
		vertical-align: middle;
		width: 50%;
	}

	.line-either-side:before {
		right: 0.5em;
		margin-left: -50%;
	}

	.line-either-side:after {
		left: 0.5em;
		margin-right: -50%;
	}

</style>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header text-muted">Dashboard</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info" style="border:none;border-radius:0px;">
                <div class="panel-heading">
                    <h3>Reservations</h3>
                </div>
                <table width="100%" class="table table-striped table-hover" id="dataTables-example">
                    <thead>
                        <tr class="text-center">
                            <th class="col-sm-1">Reserve ID</th>
                            <th class="col-sm-1" style="font-size:12px;">Customer Name</th>
                            <th class="col-sm-1">Guest Number</th>
                            <th class="col-sm-1">Budget</th>
                            <th class="col-sm-1">Place</th>
                            <th class="col-sm-1">Event Date</th>
                            <th class="col-sm-1">Event Time</th>
                            <th class="col-sm-2">Actions</th>
                        </tr>
                    </thead>
                    @foreach($type as $type)
                    <tbody>
                    <td>{{$type->reserv_id}}</td>
                    <td>{{$type->cust_fname . " " . $type->cust_lname}}</td>
                    <td>{{$type->reserv_guestNo}}</td>
                    <td>{{$type->cust_budget}}</td>
                    <td>{{$type->place}}</td>
                    <td>{{$type->reserv_date}}</td>
                    <td>{{$type->reserv_time}}</td>
                    <td>
                        <button class="btn btn-info btn-sm edittype" data-id="{{$type->reserv_id}}" data-action="{{ route('admin.reserv.approve', ['reserv_id' => $type->reserv_id]) }}" data-status='approve'>Approve</button>
                        <button class="btn btn-danger btn-sm edittype" data-id="{{$type->reserv_id}}" data-action="{{ route('admin.reserv.disapprove', ['reserv_id' => $type->reserv_id])}}" data-status='disapprove'>Disapprove</button>
                    </td>
                    </tbody>
                    @endforeach
                </table>
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
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <legend><h3 class="text-muted">Reservation Approval</h3></legend>
              {!! Form::open() !!}
              {{ method_field('PUT') }}
              <input type="hidden" class="id" name="id">

              <div class="panel panel-primary" style="border:none;border-radius:0px;">
                <!-- client info -->
                <div class='panel-heading'>Client Details</div>
                <div class="panel-body">
                  <div id='client-info' style="list-group" class="text-muted"></div>
                </div>
              </div>

              <div class="panel panel-info" style="border:none;border-radius:0px;">
                <!-- client info -->
                <div class='panel-heading'>Event Details</div>
                <div class="panel-body">
                  <div id='event-detail' class="text-muted"></div>
                </div>
              </div>

              <div class="panel panel-success" style="border:none;border-radius:0px;">
                <!-- client info -->
                <div class='panel-heading'>Package Detail</div>
                <div class="panel-body">
                  <div id='package-detail' class="text-muted"></div>
                </div>
              </div>

              <!-- reservation budget -->
              <div id='div-bud_food' class='form-group'>
                  <label>Budget for Food</label>
                  <br />
                  <span class="text-muted" style="font-size:12px">The following will be updated based on the inputted data on Equipment and Workers Budget</span>
                  <input type='number' readonly name='budget_food' class='form-control' id="budget_food" style="background-color:white;border-radius:0px;" placeholder="Amount in Php allocated for Food" required/>
              </div>

                {{-- <h5 class="text-muted line-either-side">Anong meron dito?</h5>
                <div class="row to-add">
                  <div class="col-sm-6">
                   <div class='form-group'>
                     <input name = "description" class="form-control" style="border-radius:0px;" placeholder="Description"></input>
                   </div>
                  </div>
                  <div class="col-sm-6">
                    <div class='form-group'>
                      <input name = "price" class="form-control add-each" style="border-radius:0px;" placeholder="Price"></input>
                    </div>
                  </div>
                </div>

                <button id = "button-add" class="btn btn-success btn-sm" type = "button">ADD</button> --}}

              <div id='div-bud_equip' class='form-group'>
                  <br>
                  <label class='control-label'>Budget for Equipment</label>
                  <input type='number' name='budget_equip' class='form-control' style="border-radius:0px;" id="budget_equip" placeholder="Amount in Php allocated for Equipments" required/>
              </div>

              <div id='div-bud_worker' class='form-group'>
                  <br>
                  <label class='control-label'>Budget for Workers</label>
                  <input  type='number' name='budget_work' class='form-control' style="border-radius:0px;" id="budget_work" placeholder="Amount in Php allocated for Workers" required/>
              </div>

              <!-- disapprove reason -->
              <div id='div-disapprove-reason' class='form-group'>
                  <br>
                  <label class='control-label'>Reason for Disapproval</label>
                  {!! Form::textarea('disapprove_reason', '', ['class' => 'form-control' , 'rows' => '4' , 'style' => 'border-radius:0px;']) !!}
              </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn" id='btn-submit' style="border-radius:0px; padding:8px;">Approve</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius:0px; padding:8px;">Close</button>
            </div>
              {!! Form::close() !!}
            </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('.edittype').click(function () {
        $.ajax({
            type: "get",
            url: '{{ route("admin.get-reserve") }}',
            data: {"id": $(this).data('id')},
            dataType: "json",
            success: function (response) {
                var customer_info = response.customer_info;
                var event_detail = response.event_detail;
                var package_detail = response.package_detail;
                var reservation_detail = response.reservation_detail;

                $('#editModal .id').val(response.reserv_id);

                $('#editModal #client-info').html(
                        'Name: ' + customer_info.cust_fname + " " + customer_info.cust_lname + '<br>' +
                        'Address: ' + customer_info.address + "<br>" +
                        'Email: ' + customer_info.email + '<br>' +
                        'Gender: ' + customer_info.gender + '<br>' +
                        'Contact No: ' + customer_info.contNo + '<br><br>'
                        );

                $('#editModal #event-detail').html(
                        'Budget: &#8369; <span id="customer_budget_amount">' + response.cust_budget + "</span><br>" +
                        'Type: ' + event_detail.event_type + '<br>' +
                        'Place: ' + event_detail.place + '<br><br>'
                        );

                $('#editModal #package-detail').html(
                        'Type: ' + package_detail.package_type.desc + '<br>' +
                        'Name: ' + package_detail.package_name + '<br>' +
                        'Price: &#8369;' + package_detail.package_price
                        );
            }
        });
        var status = $(this).data('status');
        $('#editModal .modal-title').text(status === 'approve' ? "Approve Reservation" : "Disapprove Reservation");
        $('#editModal #btn-submit').text(capitalizeFirstLetter(status));
        $('#editModal #btn-submit').addClass(status === 'approve' ? 'btn-primary' : 'btn-danger')
        $('#editModal #div-budget').css('display', status === 'approve' ? 'block' : 'none');
        $('#editModal #div-disapprove-reason').css('display', status === 'approve' ? 'none' : 'block');
        $('#editModal form').attr('action', $(this).data('action'))
        $('#editModal').modal('show');
    });

    $('#budget_work').on('focus keyup keydown keypress',function(){
      console.log('typing workers budget ...')
      computeBudgetForFood()
    })

    $('#budget_equip').on('focus keyup keydown keypress',function(){
      console.log('typing equipment budget ...')
      computeBudgetForFood()
    })

    function computeBudgetForFood()
    {
        remaining_value = 0;
        customer_budget = $('#customer_budget_amount').text();
        budget_for_workers = $('#budget_work').val();
        budget_for_equipments = $('#budget_equip').val();

        remaining_value = customer_budget

        if(customer_budget >= 0)
        {
          if(budget_for_workers > 0)
          {
            remaining_value = remaining_value - budget_for_workers
          }

          if(budget_for_equipments > 0)
          {
              remaining_value = remaining_value - budget_for_equipments
          }

        }

        $('#budget_food').text(remaining_value)
        $('#budget_food').val(remaining_value)
    }

    $('#editModal #btn-submit').on('click', function () {
        $(this).attr('disabled', 'disabled');
        $('#editModal form').submit();
    });

    $('#editModal').on('hide.bs.modal', function () {
        $('#editModal #btn-submit').removeClass('btn-primary');
        $('#editModal #btn-submit').removeClass('btn-danger');
    });

$(document).on('click', '#button-add', function(){
    $('.to-add').append('<div class="col-sm-6">' +
           '<div class="form-group"><input class = "form-control" name = "description[]" placeholder="Description"></input></div>' +
        '</div>' +
          '<div class="col-sm-6">' +
        '<div class="form-group"><input class="form-control add-each" name = "price[]" placeholder="Price"></input></div>' +
        '</div>');

});



$(document).on('change', '.add-each', function()
{
    console.log("Trial");
    var budget = 0;

    $('.add-each').each(function()
    {
        budget = budget + ($(this).val());
    });

    $('input [name = "budget_food"]').val(budget);

});



</script>
@endsection
