@extends('layouts.admin')

@section('title','Equipment')

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
                                @foreach($type as $type)
                                <tbody>
                                    <td>{{$type->equipment_name}}</td>
                                    <td>{{$type->cost}}</td>
                                    <td>{{$type->quantity}}</td>
                                    <td>
                                        <button class="btn btn-primary edittype" data-id="{{$type->equipment_id}}">Edit</button>
                                        <button class="btn btn-danger deletetype" data-id="{{$type->equipment_id}}">Delete</button>
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
        <h4 class="modal-title">Add Equipment</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/addequipment">
    {{csrf_field()}}
          <div class="form-group">
            <label>Equipment Name</label>
            <input type="text" class="form-control" placeholder="" name="Equipment">
          </div>
          <div class="form-group">
            <label>Cost</label>
            <input type="number" class="form-control" placeholder="" name="Cost">
          </div>
          <div class="form-group">
            <label>Quantity</label>
            <input type="number" class="form-control" placeholder="" name="Quantity">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Equpment</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/editequipment">
    {{csrf_field()}}
    <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label>Equipment Name</label>
            <input type="text" class="form-control inpequipment" placeholder="" name="Equipment">
          </div>
          <div class="form-group">
            <label>Cost</label>
            <input type="number" class="form-control inpcost" placeholder="" name="Cost">
          </div>
          <div class="form-group">
            <label>Quantity</label>
            <input type="number" class="form-control inpquantity" placeholder="" name="Quantity">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
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
	$('#addequipment').click(function () {
	  $('#addModal').modal('show');
	});

    $('.edittype').click(function () {
        $.ajax
        ({
            type : "get",
            url : '/getEquipment',
            data : {"id" : $(this).data('id')},
            dataType: "json",
            success: function(response) {
                response.forEach(function(data){
                    $('#editModal .id').val(data.equipment_id);
                    $('#editModal .inpequipment').val(data.equipment_name);
                    $('#editModal .inpcost').val(data.cost);
                    $('#editModal .inpquantity').val(data.quantity);
                })
            }
        });
        $('#editModal').modal('show');
    });

    $('.deletetype').click(function(){
        $('#delete-form .id').val($(this).data('id'));
        $('#delete-form').submit();
    });
</script>
@endsection