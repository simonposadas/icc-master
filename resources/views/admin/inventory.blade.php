@extends('layouts.admin')

@section('title','Inventory')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Equipment</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of equipments
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary btn-xs" id="addequipment">Add Equipment</button>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach($equipments as $equipment)
                        <tbody>
                            <!-- equipment name -->
                        <td>{{$equipment->equipment_name}}</td>
                        <!-- cost -->
                        <td>{{$equipment->cost}}</td>
                        <!-- quantity -->
                        <td>{{$equipment->quantity}}</td>
                        <!-- actions -->
                        <td>
                            <button class="btn btn-primary edittype" data-id="{{$equipment->equipment_id}}" data-action='{{ route('admin.inventory.update', ['equipment_id' => $equipment->equipment_id]) }}'>Edit</button>
                            <!-- delete -->
                            <button class="btn btn-danger"
                                    data-action="{{ route('admin.inventory.destroy', ['equipment_id' => $equipment->equipment_id]) }}"
                                    data-toggle="confirmation"
                                    data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
                                    data-btn-ok-class="btn btn-sm btn-danger"
                                    data-btn-cancel-label="Cancel"
                                    data-btn-cancel-icon="fa fa-chevron-circle-left"
                                    data-btn-cancel-class="btn btn-sm btn-default"
                                    data-title="Are you sure you want to delete ?"
                                    data-placement="left" data-singleton="true">
                                Delete
                            </button>
                            <!--                            <button class="btn btn-danger deletetype" data-id="{{$equipment->equipment_id}}" >Delete</button>-->
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
                <h4 class="modal-title">Add Equipment</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => route('admin.inventory.store')]) !!}
                <div class="form-group">
                    <label>Equipment Name</label>
                    <input type="text" class="form-control" placeholder="" name="equipment_name" required>
                </div>
                <div class="form-group">
                    <label>Cost</label>
                    <input type="number" class="form-control" placeholder="" name="cost" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control" placeholder="" name="quantity" required>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id='btn-submit'>Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- edit equipment -->
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Equpment</h4>
            </div>
            <div class="modal-body">
                {!! Form::open() !!}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Equipment Name</label>
                    <input type="text" class="form-control inpequipment" placeholder="" name="equipment_name" required>
                </div>
                <div class="form-group">
                    <label>Cost</label>
                    <input type="number" class="form-control inpcost" placeholder="" name="cost" required>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control inpquantity" placeholder="" name="quantity" required>
                </div>
                {!! Form::close() !!}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id='btn-submit'>Save changes</button>
            </div>
        </div>
    </div>
</div>

<form method="post" action="/deleteequipment" id="delete-form">
    {{ csrf_field() }}
    <input type="hidden" name="id" class="id">
</form>
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
                            window.location = '{{ route("admin.inventory") }}'
                        });
                    },
                    error: function (data) {
                        console.log(data);
                        return false;
                    }
                });

                return false;
            }
        });
    });
</script>

<script type="text/javascript">
    $('#addequipment').click(function () {
        $('#addModal').modal('show');
    });

    $('#addModal').on('show.bs.modal', function () {
        $(this).find('#btn-submit').on('click', function () {
            $('#addModal').find('form').submit();
        });
    });

    $('#editModal').on('show.bs.modal', function () {
        $(this).find('#btn-submit').on('click', function () {
            $('#editModal').find('form').submit();
        });
    })

    $('.edittype').click(function () {
        $.ajax
                ({
                    type: "get",
                    url: 'inventory/' + $(this).data('id'),
                    dataType: "json",
                    success: function (data) {
                        $('#editModal .inpequipment').val(data.equipment_name);
                        $('#editModal .inpcost').val(data.cost);
                        $('#editModal .inpquantity').val(data.quantity);
                    }
                });
        $('#editModal form').attr('action', $(this).data('action'));
        $('#editModal').modal('show');
    });

    $('.deletetype').click(function () {
        $('#delete-form .id').val($(this).data('id'));
        $('#delete-form').submit();
    });
</script>
@endsection