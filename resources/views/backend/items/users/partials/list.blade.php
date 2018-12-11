<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td >{{$user->role}}</td>
    <td >{{$user->active}}</td>

    <td class="center">
        <a class="btn btn-info" href="{{route('users.edit',$user->id)}}">
            <i class="halflings-icon white edit"></i>
            edit
        </a>
        <a class="btn btn-danger" href="{{route('users.delete',$user->id)}}"
           onclick="return confirm('آیا مطمئن هستید؟');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>