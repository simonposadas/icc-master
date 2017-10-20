
@extends('layouts.admin')

@section('title','Worker')

@section('content')
<div id="page-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Worker</h1>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of workers
                            <div class="pull-right">
                            	<button type="button" class="btn btn-primary btn-xs" id="addworker">Add Worker</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach($var as $var)
                                <tbody>
                                    <td>{{$var->worker_fname.' '.$var->worker_mname.' '.$var->worker_lname}}</td>
                                	<td>{{$var->worker_age}}</td>
                                    <td>{{$var->worker_role_description}}</td>
                                    <td>
                                        <button class="btn btn-primary edittype" data-id="{{$var->worker_id}}">Edit</button>
                                        <button class="btn btn-danger deletetype" data-id="{{$var->worker_id}}">Delete</button>
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
        <h4 class="modal-title">Add Worker</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/addworker">
    {{csrf_field()}}
          <div class="form-group">
            <label>Worker Fname</label>
            <input type="text" class="form-control" placeholder="" name="FirstName">
          </div>
          <div class="form-group">
            <label>Worker MName</label>
            <input type="text" class="form-control" placeholder="" name="MiddleName">
          </div>
          <div class="form-group">
            <label>Worker LName</label>
            <input type="text" class="form-control" placeholder="" name="LastName">
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" placeholder="" name="Age">
          </div>
          <div class="form-group">
            <label>Worker Role</label>
            <select class="form-control" name="type">
            <option>Select</option>
            @php $type1 = $type @endphp
            @foreach($type1 as $type1)
                <option value="{{$type1->worker_role_id}}">{{$type1->worker_role_description}}</option>
            @endforeach
            </select>
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
        <h4 class="modal-title">Edit Worker</h4>
      </div>
      <div class="modal-body">
    <form method="post" action="/editworker">
    {{csrf_field()}}
    <input type="hidden" class="id" name="id" id="editID">		  
          <div class="form-group">
		    <label>First name</label>
		    <input type="text" class="form-control inpFname" placeholder="" name="FirstName">
		  </div>        
          <div class="form-group">
            <label>Middle name</label>
            <input type="text" class="form-control inpMname" placeholder="" name="MiddleName">
          </div>          
          <div class="form-group">
            <label>Last name</label>
            <input type="text" class="form-control inpLname" placeholder="" name="LastName">
          </div>

          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control inpage" placeholder="" name="Age">
          </div>
          <div class="form-group">
            <label>Worker Role</label>
            <select class="form-control" name="type">
            <option>Select</option>
            @php $type2 = $type @endphp
            @foreach($type2 as $type2)
                <option value="{{$type2->worker_role_id}}">{{$type2->worker_role_description}}</option>
            @endforeach
            </select>
      </div>  
		  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
<form method="post" action="/deleteworker" id="delete-form">
{{ csrf_field() }}
<input type="hidden" name="id" class="id">
</form>
@endsection

@section('script')
<script type="text/javascript">
	$('#addworker').click(function () {
	  $('#addModal').modal('show');
	});

    $('.edittype').click(function () {
        // $.ajax
        // ({
        //     type : "get",
        //     url : '/getWorker',
        //     data : {"id" : $(this).data('id')},
        //     dataType: "json",
        //     success: function(response) {
        //         response.forEach(function(data){
        //             $('#editModal .id').val(data.worker_id);
        //             $('#editModal .inpFname').val(data.worker_fname);
        //             $('#editModal .inpMname').val(data.worker_mname);
        //             $('#editModal .inpLname').val(data.worker_lname);
        //             $('#editModal .inpage').val(data.worker_age);
        //             $('#editModal select option[value="'+data.worker_role_id+'"]').attr("selected","selected");
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