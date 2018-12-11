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
            <a href="{{route('back.categories.edit')}}">edit category</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>category</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <!-- edit category form -->
            @include('backend.partials.msg')
            @include('backend.partials.error')
            @if($cat)
                <div class="box-content">
                    <form class="form-horizontal" action="{{route('back.categories.edit_post',$cat->id)}}"
                          method="post" enctype="multipart/form-data">
                        <fieldset>
                            @include('backend.items.categories.partials.form',$cat)
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">update</button>
                                <a href="{{route('back.categories.list')}}" class="btn btn-danger">cancel</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!--/end category form-->
            @endif
        </div><!--/span-->

    </div><!--/row-->

@endsection()