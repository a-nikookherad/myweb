<tr>
    <td>{{str_limit($siteinfo->facebook,6)}}</td>
    <td>{{str_limit($siteinfo->twitter,6)}}</td>
    <td>{{str_limit($siteinfo->linked_in,6)}}</td>
    <td>{{str_limit($siteinfo->google,6)}}</td>
    <td>{{str_limit($siteinfo->gmail,6)}}</td>
    <td>{{str_limit($siteinfo->phone,6)}}</td>
    <td>@if(is_file($siteinfo->logo))<img src="{{asset($siteinfo->logo)}}" style="height: 60px;width: 60px;">@endif </td>
    <td class="center">
        <a class="btn btn-info" href="{{route('back.siteinfos.edit',$siteinfo->id)}}">
            <i class="halflings-icon white edit"></i>
            edit
        </a>
    </td>
</tr>