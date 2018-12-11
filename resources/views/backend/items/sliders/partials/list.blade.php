<tr>
    <td>{{$slide->id}}</td>
    <td>{{str_limit($slide->slide_title,15)}}</td>
    <td>{{str_limit($slide->slide_desc,20)}}</td>
    <td>@if(is_file($slide->slide_img))<img src="{{asset($slide->slide_img)}}" style="height: 60px;width: 60px;">@endif </td>
    <td>@if(is_file($slide->slide_offer_img)) <img src="{{asset($slide->slide_offer_img)}}" style="height: 60px;width: 60px;">@endif </td>
    @if($slide->slide_status==1)
        <td class="center">
            <span class="label label-success">visible</span>
        </td>
    @else
        <td class="center">
            <span class="label label-important">hidden</span>
        </td>
    @endif

    <td class="center">
        @unless($slide->slide_status==1)
            <a class="btn btn-success"
               href="{{route('back.sliders.show',$slide->id)}}">
                <i class="halflings-icon white zoom-in"></i>
                show
            </a>
        @else
            <a class="btn btn-important"
               href="{{route('back.sliders.hidden',$slide->id)}}">
                <i class="halflings-icon white zoom-in"></i>
                hide
            </a>
        @endunless
        <a class="btn btn-info" href="{{route('back.sliders.edit',$slide->id)}}">
            <i class="halflings-icon white edit"></i>
            edit
        </a>
        <a class="btn btn-danger" href="{{route('back.sliders.delete',$slide->id)}}"
           onclick="return confirm('آیا مطمئن هستید؟');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>