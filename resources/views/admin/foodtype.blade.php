@extends('layouts.admin')

@section('title','Food Type')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Food Type</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of food Type
                            <div class="pull-right">
                                <button type="button" class="btn btn-primary btn-xs" id="addfood">Add Food Type</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach($type as $type)
                                <tbody>
                                    <td>{{$type->food_type_name}}</td>
                                    <td>
                                        <button class="btn btn-primary edittype" data-id="{{$type->food_type_id}}">Edit</button>
                                        <button class="btn btn-danger deletetype" data-id="{{$type->food_type_id}}">Delete</button>
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
        <h4 class="modal-title">Add Food Type</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/addfoodtype">
    {{csrf_field()}}
          <div class="form-group">
            <label>Food Type Name</label>
            <input type="text" class="form-control" placeholder="" name="name">
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
        <h4 class="modal-title">Edit Food Type</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/editfoodtype">
    {{csrf_field()}}
    <input type="hidden" class="id" name="id" id="editID">
          <div class="form-group">
            <label>Food Type Name</label>
            <input type="text" class="form-control inpname" placeholder="" name="name" >
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

<form method="post" action="/deletefoodtype" id="delete-form">
{{ csrf_field() }}
<input type="hidden" name="id" class="id">
</form>
@endsection

@section('script')
<script type="text/javascript">
	$('#addfood').click(function () {
	  $('#addModal').modal('show');
	});

    $('.edittype').click(function () {
        // $.ajax
        // ({
        //     type : "get",
        //     url : '/getFoodType',
        //     data : {"id" : $(this).data('id')},
        //     dataType: "json",
        //     success: function(response) {
        //         response.forEach(function(data){
        //             $('#editModal .id').val(data.food_type_id);
        //             $('#editModal .inpname').val(data.food_type_name);
        //         })
        //     }
        // });
        $('#editID').val($(this).data('id'));
        $('#editModal').modal('show');
    });

    $('.deletetype').click(function(){
        $('#delete-form .id').val($(this).data('id'));
        $('#delete-form').submit();
    });
</script>
@endsection