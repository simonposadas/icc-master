@extends('layouts.admin')

@section('title','Food')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Food</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of foods
                            <div class="pull-right">
                            	<a href = "{{route('Create_Food')}}" type="button" class="btn btn-primary btn-xs" id="addfood">Create a Food</a>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Food ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach($var as $var)
                                <tbody>
                                    <td>{{$var->food_id}}</td>
                                    <td>{{$var->food_name}}</td>
                                	<td>{{$var->food_type_name}}</td>
                                    <td>Php {{$var->price}}</td>
                                    <td>
                                        <button class="btn btn-primary edittype" data-id="{{$var->food_id}}">Edit</button>
                                        <button class="btn btn-danger deletetype" data-id="{{$var->food_id}}">Delete</button>
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


<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Food</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/editfood">
    {{csrf_field()}}
    <input type="hidden" class="id" name="id" id="editID">		  
          <div class="form-group">
		    <label>Food Name</label>
		    <input type="text" class="form-control inpname" placeholder="" name="name">
		  </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" placeholder="" name="price">
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

<form method="post" action="/deletefood" id="delete-form">
{{ csrf_field() }}
<input type="hidden" name="id" class="id">
</form>
@endsection

@section('script')
<script type="text/javascript">
	$('#addfood').click(function () {
	  $('#addModal').modal('show');
	});

    $('#editModal').on('show.bs.modal', function () {
        $(this).find('#btn-primary').on('click', function () {
            $('#editModal').find('form').submit();
        });
    })

    $('.edittype').click(function () {
        // $.ajax
        // ({
        //     type : 'get',
        //     url : '/getfood' + $(this).data('id'),
        //     data : {"id" : $(this).data('id')},
        //     dataType: "json",
        //     success: function(response) {
        //         response.forEach(function(data){
        //             $('#editModal .id').val($(this).data('id'));
        //             $('#editModal .inpname').val(data.food_name);
        //             alert($('#editModal').val());
        //         })
        //     }
        // });
        // $('#editModal form').attr('action', $(this).data('action'));
        $('#editID').val($(this).data('id'));
        $('#editModal').modal('show');
    });

    $('.deletetype').click(function(){
        $('#delete-form .id').val($(this).data('id'));
        $('#delete-form').submit();
    });
</script>
@endsection