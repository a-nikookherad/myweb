<tr>
    <td>{{$brand->id}}</td>
    <td>{{$brand->brand_name}}</td>
    <td>{{$brand->brand_desc}}</td>
    {{--<td>{{$brand->subbrandegories->sub_brand_name}}</td>--}}
    @if($brand->brand_status==1)
        <td class="center">
            <span class="label label-success">visible</span>
        </td>
    @else
        <td class="center">
            <span class="label label-important">hidden</span>
        </td>
    @endif
    <td class="center">
        <a class="btn btn-info" href="{{route('back.brands.edit',$brand->id)}}">
            <i class="halflings-icon white edit"></i>
            edit
        </a>
        <a class="btn btn-danger" href="{{route('back.brands.delete',$brand->id)}}"
           onclick="return confirm('Are You Shure?');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>