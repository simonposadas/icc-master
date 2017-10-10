@extends('layouts.admin')

@section('title','Customers')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customers</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Customers
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Reservation ID</th>
                                <th>Customer Name</th>
                                <th>Contact Number</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        @foreach($type as $type)
                        <tbody>
                        <td>{{$type->cust_id}}</td>
                        <td>{{$type->reserv_id}}</td>
                        <td>{{$type->cust_fname}}</td>
                        <td>{{$type->contNo}}</td>
                        <td>{{$type->reserv_date}}</td>
                        <td>{{$type->reserv_time}}</td>
                        <!--<td>
                            <button class="btn btn-primary edittype" data-id="{{$type->reserv_id}}" data-action="{{ route('admin.reserv.approve', ['reserv_id' => $type->reserv_id]) }}" data-status='approve'>Approve</button>
                            <button class="btn btn-danger edittype" data-id="{{$type->reserv_id}}" data-action="{{ route('admin.reserv.disapprove', ['reserv_id' => $type->reserv_id])}}" data-status='disapprove'>Disapprove</button>
                        </td>-->
                        <td>{{$type->email}}</td>
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
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Approve Reservation?</h4>
            </div>
            {!! Form::open() !!}
            {{ method_field('PUT') }}
            <input type="hidden" class="id" name="id">

            <!-- client info -->
            <label class='control-label'><u>Client</u></label> <br>
            <div id='client-info'></div>

            <!-- event detail -->
            <label class='control-label'><u>Event Detail</u></label> <br>
            <div id='event-detail'></div>

            <!-- package detail -->
            <label class='control-label'><u>Package Detail</u></label> <br>
            <div id='package-detail'></div>

            <!-- disapprove reason -->
            <div id='div-disapprove-reason' class='form-group'>
                <br>
                <label class='control-label'><u>Disapprove Reason</u></label> 
                {!! Form::textarea('disapprove_reason', '', ['class' => 'form-control']) !!}    
            </div>

            <!-- reservation budget -->
            <div id='div-budget'class='form-group'>
                <br>
                <label class='control-label'><u>Budget</u></label> 
                <input type='number' name='reserv_budget' class='form-control' required/>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn" id='btn-submit'>Approve</button>
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

                $('#editModal .id').val(response.reserv_id);

                $('#editModal #client-info').html(
                        'Name: ' + customer_info.cust_fname + " " + customer_info.cust_lname + '<br>' +
                        'Address: ' + customer_info.address + "<br>" +
                        'Email: ' + customer_info.email + '<br>' +
                        'Gender: ' + customer_info.gender + '<br>' +
                        'Contact No: ' + customer_info.contNo + '<br><br>'
                        );

                $('#editModal #event-detail').html(
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

    $('#editModal #btn-submit').on('click', function () {
        $(this).attr('disabled', 'disabled');
        $('#editModal form').submit();
    });
    
    $('#editModal').on('hide.bs.modal', function () {
        $('#editModal #btn-submit').removeClass('btn-primary');
        $('#editModal #btn-submit').removeClass('btn-danger');
    });
</script>
@endsection