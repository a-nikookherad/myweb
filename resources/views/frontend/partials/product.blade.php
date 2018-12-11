<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{asset($product->product_img)}}" alt="{{asset($product->product_name)}}" />
                <h2>{{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>

                @if( \Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == 'customers')@php $cus_id=\Illuminate\Support\Facades\Auth::user()->id; @endphp
                    <a href="{{route('add_to_cart',['customer_id'=>$cus_id,'product_id'=>$product->id,])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ارسال به سبد خرید</a>
                @else
                    <a href="{{route('customers.sign_in')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ارسال به سبد خرید</a>
                @endif

            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{$product->product_price}}</h2>
                    <p>{{$product->product_desc}}</p>
                    @if( \Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == 'customers')@php $cus_id=\Illuminate\Support\Facades\Auth::user()->id; @endphp
                        <a href="{{route('add_to_cart',['customer_id'=>$cus_id,'product_id'=>$product->id,])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ارسال به سبد خرید</a>
                    @else
                        <a href="{{route('customers.sign_in')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ارسال به سبد خرید</a>
                    @endif
                </div>
            </div>
            @if(is_file($product->product_offer_img))<img src="{{asset($product->product_offer_img)}}" class="new" alt="" />@endif
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified" style="padding-right: 0px;">

                @if( \Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == 'customers')@php $cus_id=\Illuminate\Support\Facades\Auth::user()->id; @endphp
                    <li><a href="{{route('add_to_fav',['customer_id'=>$cus_id,'product_id'=>$product->id,])}}"><i class="fa fa-heart"></i>علاقه مندی</a></li>
                @else
                    <li><a href="{{route('customers.sign_in')}}"><i class="fa fa-heart"></i>علاقه مندی</a></li>
                @endif

                <li><a href="{{route('back.products.detail',$product->id)}}"><i class="fa fa-edit"></i>جزئیات محصول</a></li>
            </ul>
        </div>
    </div>
</div>
