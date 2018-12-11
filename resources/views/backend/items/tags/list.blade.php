@extends('backend.layout')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{url('admin/dashboard')}}">dashboard</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="{{route('back.tags.list')}}">All tags</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>tags</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            @include('backend.partials.msg')
            {{--@include('backend.partials.tags_list',$all_tags)--}}
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        @include('backend.items.tags.partials.culomns')
                    </tr>
                    </thead>

                    <tbody>
                    @if ($all_tags)
                        @foreach ($all_tags as $tag)
                            @include('backend.items.tags.partials.list')
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection()