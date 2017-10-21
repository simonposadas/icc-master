@extends('layouts.admin')

@section('title','Food')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List of Recipe for food</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Recipe to creat a Food Product
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="createFoodProductTable">
                                <thead>
                                    <tr>
                                        <th>Recipe ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Selling Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @foreach($recipe as $recip)
                                  <tr>
                                    <td>{{$recip->recipe_id}}</td>
                                    <td>{{$recip->name}}</td>
                                    <td>{{$recip->initial_Price}}</td>
                                    <td>{{$recip->initial_Price+($recip->initial_Price * 0.1)}}</td>
                                    <td><button type="button" data-id="{{ $recip->recipe_id }}" data-price="{{ $recip->initial_Price }}" data-name="{{$recip->name}}" data-sellingprice="{{$recip->initial_Price+($recip->initial_Price * 0.1)}}" class = "add-to-list btn btn-md btn-primary"> Add to list</button></td>
                                  </tr>
                                @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                 <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of foods
                            <div class="pull-right">
                              <button type="button" class="btn btn-primary btn-xs" id="addfood">Add New Recipe</button>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="addNewRecipeTable">
                                <thead>
                                    <tr>
                                        <th>Recipe ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>

                                <tbody>
                                  @foreach(Cart::instance('Recipes')->content() as  $cart)
                                    <tr>
                                      <td>{{$cart->id}}</td>
                                      <td>{{$cart->name}}</td>
                                      <td>{{number_format($cart->price,2)}}</td>
                                      <td>{{$cart->qty}} pcs</td>
                                    </tr>
                                  @endforeach
                                </tbody>
                                
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
        <h4 class="modal-title">Add Food</h4>
      </div>
      <div class="modal-body">
{!! Form::open(array('route' => 'New_food.store', 'data-parsley-validate'=>'', 'method'=>'POST')) !!}
    {{csrf_field()}}

    {{csrf_field()}}
          <div class="form-group">
            <label>Food Name</label>
            <input type="text" class="form-control" placeholder="" name="name" max-length = '15' required/>
          </div>
          <div class="form-group">
            <label>Type</label>
            <select name = "type" class = "form-control">
              @foreach($types as $types)
                <option value = "{{$types->food_type_id}}"> {{$types->food_type_name}} </option>
              @endforeach
            </select>

          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Create Item</button>
      </div>
    {!! Form::close()!!}
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Food</h4>
      </div>

      <div class="modal-body">

         <input type="hidden" class="id" name="id" id="editID">		  
          <div class="form-group">
		    <label>Name of the Recipe</label>
		    <input type="text" class="form-control inpname" placeholder="" name="name">
		  </div>
          <div class="form-group">
            <label>Please Enter Your Initial Price</label>
            <input type="number" class="form-control" placeholder="" name="price">
          </div>
      </div>  
	   <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
  {!! Form::close() !!}
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

    $('#createFoodProductTable').on('click','.add-to-list',function(){

        url = "";
        id = $(this).data('id')
        price = $(this).data('price')
        name = $(this).data('name')
        sellingprice = $(this).data('sellingprice')
        swal({
        title: "Enter quantity!",
        text: "Enter quantity of recipe to be added",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top"
      },
      function(inputValue){
        if (inputValue === false) return false;

        if (inputValue === "") {
          swal.showInputError("You need to write something!");
          return false
        }

        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'post',
          url: "{{ url('reservation/Adding_reservations') }}",
          dataType: 'json',
          data: {
            'quantity': inputValue,
            'id': id,
            'price': price,
            'name': name,
            'sellingprice': sellingprice
          },
          success: function(response){
            if(response == 'success')
            swal('Success','Operation Successful','success')
            else
            swal('Error','Problem Occurred while processing your data','error')
            location.reload();
          },
          error: function(){
            swal('Error','Problem Occurred while processing your data','error')
          }
        })
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