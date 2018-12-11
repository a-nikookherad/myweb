@extends('backend.layout')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{url('admin/dashboard')}}">dashboard</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{url('admin/dashboard/allproductspage')}}">All products</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>products</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            @include('backend.partials.msg')
            {{--@include('backend.partials.products_list',$all_products)--}}
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>product</th>
                        <th>category</th>
                        <th>brand</th>
                        <th>price</th>
                        <th>Status</th>
                        <th>image</th>
                        <th>offer</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @if ($all_products)
                        @foreach ($all_products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                @foreach($categories as $category)
                                    @if($category->id == $product->cat_id)
                                        <td>{{!empty($category->cat_name)?$category->cat_name:'دسته بندی نشده'}}</td>
                                    @endif
                                @endforeach
                                @foreach($brands as $brand)
                                    @if($brand->id == $product->brand_id)
                                        <td>{{!empty($brand->brand_name)?$brand->brand_name:'بدون برند'}}</td>
                                    @endif
                                @endforeach
                                <td>{{$product->product_price}}</td>
                                @if($product->product_status==1)
                                    <td class="center">
                                        <span class="label label-success">visible</span>
                                    </td>
                                @else
                                    <td class="center">
                                        <span class="label label-important">hidden</span>
                                    </td>
                                @endif
                                <td>@if(is_file($product->product_img))<img src="{{asset($product->product_img)}}" style="height: 60px;width: 60px;">@endif </td>
                                <td>@if(is_file($product->product_offer_img))<img src="{{asset($product->product_offer_img)}}" style="height: 60px;width: 60px;">@endif </td>
                                <td class="center">
                                    @unless($product->product_status==1)
                                        <a class="btn btn-success"
                                           href="{{route('back.products.show',$product->id)}}">
                                            <i class="halflings-icon white zoom-in"></i>
                                            show
                                        </a>
                                    @else
                                        <a class="btn btn-important"
                                           href="{{route('back.products.hidden',$product->id)}}">
                                            <i class="halflings-icon white zoom-in"></i>
                                            hide
                                        </a>
                                    @endunless
                                    <a class="btn btn-info" href="{{route('back.products.edit',$product->id)}}">
                                        <i class="halflings-icon white edit"></i>
                                        edit
                                    </a>
                                    <a class="btn btn-danger" href="{{route('back.products.delete',$product->id)}}"
                                       onclick="return confirm('Are You Shure?');">
                                        <i class="halflings-icon white trash"></i>
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection()