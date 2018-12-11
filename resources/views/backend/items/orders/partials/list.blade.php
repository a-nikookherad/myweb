<tr>
    <td>{{$order->id}}</td>
    <td>{{$order->order_name}}</td>
    <td>{{$order->order_qty}}</td>
    <td>{{$order->shipping_id}}</td>
    <td>{{$order->product_id}}</td>
    <td>
        <a class="btn btn-danger" href="{{route('back.orders.delete',$order->id)}}"
           onclick="return confirm('آیا مطمئن هستید؟');">
            <i class="halflings-icon white trash"></i>
            delete
        </a>
    </td>
</tr>