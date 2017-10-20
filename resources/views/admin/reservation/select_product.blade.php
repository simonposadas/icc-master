 @extends('layouts.admin')

@section('title','Select Product')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Select Product</h1>
            <button type="button" class="btn btn-primary pull right">Create New Package</button>
        </div>
        <!-- /.col-lg-12 -->
    </div><br />
    <div class="row">
        @for($products = 0; $products <= 5; $products++)
            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="row"><br />
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success">Select</a><br />
                                <a href="{{ route('admin.reserv.view.product.details') }}">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <!-- /.row -->
</div>

@endsection

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{{url('css/datatables.css')}}" />
@endsection