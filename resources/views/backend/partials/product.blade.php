<div class="wrapper">
    <div class="container" style="padding-right: 0px;padding-left: 0px;">
        <div class="top">
            <img src="{{asset($store->product_img)}}" alt="" class="w-100 h-100">
        </div>
        <div class="bottom" id="bott{{$store->product_id}}">
            <div class="left">
                <div class="details">
                    <h1>{{$store->product_name}}</h1>
                    <p>R{{$store->product_price}}</p>
                </div>
                <div class="buy" onclick="$('#bott{{$store->product_id}}').addClass('clicked');"><i
                            class="material-icons">add_shopping_cart</i></div>
            </div>
            <div class="right">
                <div class="done"><i class="material-icons">done</i></div>
                <div class="details">
                    <form action="{{url('orderpage/'.$store->product_id)}}">
                        <h3>{{$store->product_name}}</h3>
                        <input type="submit" class="btn btn-success" value="Added to cart">
                    </form>
                </div>
                <div class="remove" onclick="$('#bott{{$store->product_id}}').removeClass('clicked');"><i
                            class="material-icons">clear</i></div>
            </div>
        </div>
    </div>
    <div class="inside">
        <div class="icon"><i class="material-icons">info_outline</i></div>
        <div class="contents">
            <table>
                @if(!empty($store->product_color))
                    <tr>
                        <th>Color</th>
                        <th>{{$store->product_color}}</th>
                    </tr>
                @endif
                <tr>
                    <th>Width</th>
                    <th>Height</th>
                </tr>

            </table>
        </div>
    </div>
</div>