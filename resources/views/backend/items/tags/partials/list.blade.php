<tr>
    <td>{{$tag->id}}</td>
    <td>{{$tag->tag_name}}</td>

    <td class="center">
        <a class="btn btn-info" href="{{route('back.tags.edit',$tag->id)}}">
            <i class="halflings-icon white edit"></i>
            edit
        </a>
        <a class="btn btn-danger" href="{{route('back.tags.delete',$tag->id)}}"
           onclick="return confirm('آیا مطمئن هستید؟');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>