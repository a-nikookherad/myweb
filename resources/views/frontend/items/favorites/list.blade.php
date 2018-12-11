@extends('frontend.layout',$siteinfo)

@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{route('home')}}">خانه</a></li>
				  <li class="active">علاقه مندی</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image text-center">محصول</td>
							<td class="description text-center"> نام</td>
							<td class="price text-center">قیمت</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					@php $total=0; @endphp
					@foreach($products as $product)
						<tr>
							<td class="cart_product text-center">
								<a href=""><img style="width: 25%;height: 25%;" src="{{asset($product->product_img)}}" alt="{{$product->product_name}}" ></a>
							</td>
							<td class="cart_description text-center">
								<h4><a href="">{{$product->product_name}}</a></h4>
								<p>{{$product->id}}</p>
							</td>
							<td class="cart_price text-center">
								<p>{{$product->product_price}}</p>
							</td>

							<td class="cart_delete text-center">
								<a class="cart_quantity_delete" href="{{route('delete_from_fav',['customer_id'=>\Illuminate\Support\Facades\Auth::user()->id,'product_id'=>$product->id,])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@php $total+=$product->product_price*$product->pivot->product_qty; @endphp
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!--/#cart_items-->

	{{--<section id="do_action" dir="ltr">--}}
		{{--<div class="container">--}}
			{{--<div class="heading" dir="rtl">--}}
				{{--<h3>دوست دارید بعد از این چکار کنید؟</h3>--}}
				{{--<p>تکمیل سفارش</p>--}}
			{{--</div>--}}
			{{--<div class="row">--}}
				{{--<div class="col-sm-6">--}}
					{{--<div class="chose_area">--}}

						{{--<ul class="user_option">--}}
							{{--<li>--}}
								{{--<input type="checkbox">--}}
								{{--<label>استفاده از کوپن</label>--}}
							{{--</li>--}}
							{{--<li>--}}
								{{--<input type="checkbox">--}}
								{{--<label>استفاده از کارت هدیه</label>--}}
							{{--</li>--}}
							{{--<li>--}}
								{{--<input type="checkbox">--}}
								{{--<label>مالیات</label>--}}
							{{--</li>--}}
						{{--</ul>--}}
						{{--<form action="{{route('front.shipping.add')}}" method="post">--}}
							{{--@csrf--}}
						{{--<ul class="user_info">--}}
							{{--<li class="single_field zip-field">--}}
								{{--<label>نام گیرنده:</label>--}}
								{{--<input type="text" class="form-control" name="customer_name">--}}
							{{--</li>--}}

							{{--<li class="single_field zip-field">--}}
								{{--<label>کد پستی:</label>--}}
								{{--<input type="text" class="form-control" name="postal_code">--}}
							{{--</li>--}}
							{{--<li class="single_field zip-field">--}}
								{{--<label>ایمیل:</label>--}}
								{{--<input type="text" class="form-control" name="customer_email">--}}
							{{--</li>--}}
							{{--<li class="single_field zip-field">--}}
								{{--<label>موبایل گیرنده:</label>--}}
								{{--<input type="text" class="form-control" name="customer_phone">--}}
							{{--</li>--}}
							{{--<li>--}}
								{{--<label>آدرس گیرنده:</label>--}}
								{{--<textarea type="text" class="form-control" name="customer_addr"></textarea>--}}
							{{--</li>--}}
						{{--</ul>--}}
						{{--<button type="submit" class="btn btn-default update" >ذخیره</button>--}}
						{{--<button type="reset" class="btn btn-default check_out" >تصحیح</button>--}}
						{{--</form>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="col-sm-6">--}}
					{{--<div class="total_area">--}}
						{{--<ul>--}}
							{{--<li>هزینه محصول <span>{{$total}}</span></li>--}}
							{{--<li>مالیات <span>0</span></li>--}}
							{{--<li>هزینه ارسال<span>رایگان</span></li>--}}
							{{--<li>مجموع کل <span>{{$total}}</span></li>--}}
						{{--</ul>--}}
							{{--<a class="btn btn-default check_out" href="">تسویه حساب</a>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</section>--}}
	<!--/#do_action-->


@endsection