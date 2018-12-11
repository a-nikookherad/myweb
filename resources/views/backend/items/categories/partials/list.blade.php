<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->cat_name}}</td>
    <td>{{$category->cat_desc}}</td>
    <td>
        <ul>
            @foreach($category->subcategories()->get() as $sub )
                <li>{{$sub->sub_cat_name}}</li>
            @endforeach
        </ul>
    </td>
    @if($category->cat_status==1)
        <td class="center">
            <span class="label label-success">visible</span>
        </td>
    @else
        <td class="center">
            <span class="label label-important">hidden</span>
        </td>
    @endif
    <td class="center">
        <a class="btn btn-info" href="{{route('back.categories.edit',$category->id)}}">
            <i class="halflings-icon white edit"></i>
            edit
        </a>
        <a class="btn btn-danger" href="{{route('back.categories.delete',$category->id)}}"
           onclick="return confirm('Are You Shure?');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>