@extends('layouts.admin')

@section('title','Reservation Equipment')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reservation Equipment</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Equipments for Reservation #<b> {{ $reservation_detail->reserv_id }} </b>
                    <div class="pull-right">
                        <a href='{{ route('admin.reserv') }}' role='button' class='btn btn-primary btn-xs'>Back</a>
                        <button type="button" class="btn btn-primary btn-xs" id="addequipment" data-toggle='modal' data-target='#addModal'>Tag Equipment</button>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Equipment</th>
                                <th>Cost</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach($reservation_detail->equipment as $equipment)
                        <tbody>
                            <!-- equipment name -->
                        <td>{{$equipment->equipment_name}}</td>
                        <!-- cost -->
                        <td>{{$equipment->cost}}</td>
                        <!-- quantity -->
                        <td>{{$equipment->pivot->quantity}}</td>
                        <!-- actions -->
                        <td>
                            <!--                            <button class="btn btn-primary edittype" 
                                                                data-show="{{ route('admin.reserv.equip.show', ['reserv_id' => $equipment->pivot->reserv_id, 
                                                                        'id' => $equipment->pivot->id]) }}" 
                                                                data-action='{{ route('admin.reserv.equip.update', 
                                                                            ['reserv_id' => $equipment->pivot->reserv_id, 
                                                                        'id' => $equipment->pivot->id]) }}'>
                                                            Edit
                                                        </button>-->
                            <!-- delete -->
                            <button class="btn btn-danger"
                                    data-action="{{ route('admin.reserv.equip.destroy', ['reserv_id' => $equipment->pivot->reserv_id, 
                                            'id' => $equipment->pivot->id]) }}"
                                    data-toggle="confirmation"
                                    data-btn-ok-label="Untag" data-btn-ok-icon="fa fa-remove"
                                    data-btn-ok-class="btn btn-sm btn-danger"
                                    data-btn-cancel-label="Cancel"
                                    data-btn-cancel-icon="fa fa-chevron-circle-left"
                                    data-btn-cancel-class="btn btn-sm btn-default"
                                    data-title="Are you sure you want to untag?"
                                    data-placement="left" data-singleton="true">
                                Untag
                            </button>
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
<!-- add equipment -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tag Equipment</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => route('admin.reserv.equip.store', ['reserv_id' => $reservation_detail->reserv_id])]) !!}
                <!-- equipment name -->
                <div class="form-group {{ $errors->has('equipment_id') ? 'has-error' : '' }}">
                    <label>Equipment Name</label>
                    {!! Form::select('equipment_id', $equipments, old('equipment_id'), ['required' => 'required', 'class' => 'form-control selectpicker', 
                    'placeholder' => 'Nothing selected', 'data-live-search' => 'true']) !!}
                    @if($errors->has('equipment_id'))
                    <span class='help-block'>
                        <strong>{{ $errors->first('equipment_id') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- cost -->
                <div class="form-group">
                    <label>Cost</label>
                    <input type="number" class="form-control" placeholder="" value='{{ old('cost') }}' name="cost" readonly>
                </div>

                <!-- In stocks -->
                <div class="form-group">
                    <label>In stock</label>
                    <input type="number" class="form-control" placeholder="" value='{{ old('in_stock') }}' name="in_stock" readonly>
                </div>

                <!-- quantity -->
                <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
                    <label>Quantity</label>
                    <input type="number" class="form-control" placeholder="" name="quantity" value='{{ old('quantity') }}' required>
                    @if($errors->has('quantity'))
                    <span class='help-block'>
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                    @endif
                </div>
                {!! Form::close() !!}
            </div>

            <!-- buttons -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id='btn-submit'>Tag Equipment</button>
            </div>
        </div>
    </div>
</div>

<!-- edit equipment 
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

             header 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Tagged Equipment</h4>
            </div>

             body 
            <div class="modal-body">
                {!! Form::open() !!}
                 equipment name 
                <div class="form-group {{ $errors->has('equipment_id') ? 'has-error' : '' }}">
                    <label>Equipment Name</label>
                    {!! Form::select('equipment_id', $equipments, old('equipment_id'), ['required' => 'required', 'class' => 'form-control selectpicker', 
                    'placeholder' => 'Nothing selected', 'data-live-search' => 'true']) !!}
                    @if($errors->has('equipment_id'))
                    <span class='help-block'>
                        <strong>{{ $errors->first('equipment_id') }}</strong>
                    </span>
                    @endif
                </div>
                 cost 
                <div class="form-group">
                    <label>Cost</label>
                    <input type="number" class="form-control" placeholder="" value='{{ old('cost') }}' name="cost" readonly>
                </div>

                 In stocks 
                <div class="form-group">
                    <label>In stock</label>
                    <input type="number" class="form-control" placeholder="" value='{{ old('in_stock') }}' name="in_stock" readonly>
                </div>

                 quantity 
                <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
                    <label>Quantity</label>
                    <input type="number" class="form-control" placeholder="" name="quantity" value='{{ old('quantity') }}' required>
                    @if($errors->has('quantity'))
                    <span class='help-block'>
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                    @endif
                </div>
                {!! Form::close() !!}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id='btn-submit'>Save changes</button>
            </div>
        </div>
    </div>
</div>-->
@endsection

@section('script')

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function () {
                $.ajax({
                    url: $(this).data('action'),
                    type: 'POST',
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
</script>

<script type="text/javascript">
    $('#addModal').on('shown.bs.modal', function () {
        var modal = $(this);

        /**
         * submit button
         */
        modal.find('#btn-submit').on('click', function () {
            var form = modal.find('form');
            form.submit();
        });

        /**
         * on select of equipment
         */
        modal.find('select[name="equipment_id"]').on('change', function () {
            $.ajax({
                url: '/admin/equipment/' + $(this).val(),
                dataType: 'json',
                success: function (data) {
                    modal.find('input[name="cost"]').val(data.cost);
                    modal.find('input[name="in_stock"]').val(data.quantity);
                },
                error: function () {
                    alert('Whoops! Something went wrong...');
                }
            });
        })
    });

//    $('#editModal').on('show.bs.modal', function () {
//        $(this).find('#btn-submit').on('click', function () {
//            $('#editModal').find('form').submit();
//        });
//    })

//    $('.edittype').click(function () {
//        $.ajax
//                ({
//                    type: "get",
//                    url: $(this).data('show'),
//                    dataType: "json",
//                    success: function (data) {
//                        var equipment = data.equipment;
//                        $('#editModal select[name="equipment_id"]').selectpicker('val', data.equipment_id)
//                        $('#editModal input[name="cost"]').val(equipment.cost);
//                        $('#editModal input[name="in_stock"]').val(equipment.quantity);
//                        $('#editModal input[name="quantity"]').val(data.quantity);
//                    }
//                });
//        $('#editModal form').attr('action', $(this).data('action'));
//        $('#editModal').modal('show');
//    });

    $('.deletetype').click(function () {
        $('#delete-form .id').val($(this).data('id'));
        $('#delete-form').submit();
    });
</script>

@if(session('err_store'))
<script>
    $('#addModal').modal('show');
</script>
@endif
@endsection