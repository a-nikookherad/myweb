@extends('backend.layout')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{url('admin/dashboard')}}">dashboard</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="{{url('admin/dashboard/editproduct')}}">edit product</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>product</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <!-- edit product form -->
            @include('backend.partials.msg')
            @include('backend.partials.error')
            @if($product)
                <div class="box-content">
                    <form class="form-horizontal" action="{{route('back.products.edit_post',$product->id)}}"
                          method="post" enctype="multipart/form-data">
                        <fieldset>
                            @include('backend.items.products.partials.product_form',$product)
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">update</button>
                                <a href="{{route('back.products.list')}}" class="btn btn-danger">cancel</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!--/end product form-->
            @endif
        </div><!--/span-->

    </div><!--/row-->

@endsection()