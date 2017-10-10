@extends('layouts.admin')

@section('title','Reservation Worker')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Reservation Worker</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Workers for Reservation #<b> {{ $reservation_detail->reserv_id }} </b>
                    <div class="pull-right">
                        <!-- back -->
                        <a href='{{ route('admin.reserv') }}' role='button' class='btn btn-primary btn-xs'>Back</a>
                        <!-- tag -->
                        <button type="button" class="btn btn-primary btn-xs" id="addequipment" data-toggle='modal' data-target='#addModal'>Tag Worker</button>
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
                        @foreach($reservation_detail->worker as $worker)
                        <tbody>
                            <!-- name -->
                        <td>{{ $worker->worker_fname . ' ' . $worker->worker_mname . ' ' . $worker->worker_lname }}</td>
                        <!-- age -->
                        <td>{{ $worker->worker_age }}</td>
                        <!-- quantity -->
                        <td>{{ $worker->worker_role->worker_role_description }}</td>
                        <!-- actions -->
                        <td>
                            <!-- untag -->
                            <button class="btn btn-danger"
                                    data-action="{{ route('admin.reserv.worker.destroy', ['reserv_id' => $worker->pivot->reserv_id, 
                                            'id' => $worker->pivot->id]) }}"
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
<!-- tag worker -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tag Worker</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => route('admin.reserv.worker.store', ['reserv_id' => $reservation_detail->reserv_id])]) !!}
                <!-- worker -->
                <div class="form-group {{ $errors->has('worker_id') ? 'has-error' : '' }}">
                    <label>Worker</label>
                    {!! Form::select('worker_id', $workers, old('worker_id'), ['required' => 'required', 'class' => 'form-control selectpicker', 
                    'placeholder' => 'Nothing selected', 'data-live-search' => 'true']) !!}
                    @if($errors->has('worker_id'))
                    <span class='help-block'>
                        <strong>{{ $errors->first('worker_id') }}</strong>
                    </span>
                    @endif
                </div>

                <!-- age -->
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" class="form-control" placeholder="" value='{{ old('age') }}' name="age" readonly>
                </div>

                <!-- role --> 
                <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
                    <label>Role</label>
                    <input type="text" class="form-control" placeholder="" name="role" value='{{ old('role') }}' required readonly>
                </div>
                {!! Form::close() !!}
            </div>

            <!-- buttons -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id='btn-submit'>Tag Worker</button>
            </div>
        </div>
    </div>
</div>

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
        modal.find('select[name="worker_id"]').on('change', function () {
            $.ajax({
                url: '/admin/worker/' + $(this).val(),
                dataType: 'json',
                success: function (data) {
                    modal.find('input[name="age"]').val(data.worker_age);
                    modal.find('input[name="role"]').val(data.worker_role.worker_role_description)
                },
                error: function () {
                    alert('Whoops! Something went wrong...');
                }
            });
        })
    });

</script>

@if(session('err_store'))
<script>
    $('#addModal').modal('show');
</script>
@endif
@endsection