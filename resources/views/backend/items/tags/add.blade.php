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
            <a href="{{route('back.tags.add')}}">Add tag</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>tag</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>

            <!-- tag form -->
            @include('backend.partials.msg')
            @include('backend.partials.error')
            <div class="box-content">
                <form class="form-horizontal" action="{{route('back.tags.add_post')}}"
                      method="post" >
                    <fieldset>
                        @include('backend.items.tags.partials.form')
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">save</button>
                            <button type="reset" class="btn btn-danger">reset</button>
                        </div>
                    </fieldset>
                </form>
            </div>

            <!--/end tag form-->
        </div><!--/span-->

    </div><!--/row-->

@endsection()