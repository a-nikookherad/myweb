<tr>
    <td>{{$customer->id}}</td>
    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->active?'active':'deactive'}}</td>
    <td>
        <a class="btn btn-danger" href="{{route('back.customers.delete',$customer->id)}}"
           onclick="return confirm('آیا مطمئن هستید؟');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>