@extends('frontend.layout',['siteinfo'=>$siteinfo])

@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{route('home')}}">خانه</a></li>
				  <li class="active">سبد خرید</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image text-center">محصول</td>
							<td class="description text-center"> نام</td>
							<td class="price text-center">قیمت</td>
							<td class="quantity text-center">تعداد</td>
							<td class="total text-center">جمع</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					@php $total=0; @endphp
					@foreach($products as $product)
						<tr>
							<td class="cart_product text-center">
								<a href=""><img style="width: 50%;height: 50%;" src="{{asset($product->product_img)}}" alt="{{$product->product_name}}" ></a>
							</td>
							<td class="cart_description text-center">
								<h4><a href="">{{$product->product_name}}</a></h4>
								<p>{{$product->id}}</p>
							</td>
							<td class="cart_price text-center">
								<p>{{$product->product_price}}</p>
							</td>
							<td class="cart_quantity text-center">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="{{route('up_qty',['customer_id'=>\Illuminate\Support\Facades\Auth::user()->id,'product_id'=>$product->id,])}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$product->pivot->product_qty}} " autocomplete="off" size="2">
									<a class="cart_quantity_down" href="{{route('down_qty',['customer_id'=>\Illuminate\Support\Facades\Auth::user()->id,'product_id'=>$product->id,])}}"> - </a>
								</div>
							</td>
							<td class="cart_total text-center">
								<p class="cart_total_price">{{$product->pivot->product_qty*$product->product_price}}</p>
							</td>
							<td class="cart_delete text-center">
								<a class="cart_quantity_delete" href="{{route('delete_from_cart',['customer_id'=>\Illuminate\Support\Facades\Auth::user()->id,'product_id'=>$product->id,])}}"><i class="fa fa-times"></i></a>
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

	<section id="do_action" dir="ltr">
		<div class="container">
			<div class="heading" dir="rtl">
				<h3>دوست دارید بعد از این چکار کنید؟</h3>
				<p>تکمیل سفارش</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area text-right" style="padding:5px;" >

						@if($errors->any())@include('backend.partials.error')@else <p class="pull-right " style="width: 100% ;background-color: #FE980F;border-right: 10px solid #ccc;padding: 10px;display: block;" >لطفااطلاعات پستی خود را وارد کنید</p>@endif

						<div class="clearfix"></div>
						<form action="{{route('front.shipping.add')}}" method="post">
							@csrf
						<ul class="user_info">
							<li class="single_field zip-field">
								<label>:نام گیرنده</label>
								<input type="text" class="form-control" name="customer_name">
							</li>

							<li class="single_field zip-field">
								<label>:کد پستی</label>
								<input type="text" class="form-control" name="postal_code">
							</li>
							<li class="single_field zip-field">
								<label>:ایمیل</label>
								<input type="text" class="form-control" name="customer_email">
							</li>
							<li class="single_field zip-field">
								<label>:تلفن گیرنده</label>
								<input type="text" class="form-control" name="customer_phone">
							</li>
							<li>
								<label>:آدرس گیرنده</label>
								<textarea type="text" class="form-control" name="customer_addr"></textarea>
							</li>
						</ul>
							<button type="reset" class="btn btn-default check_out" style="margin: 0px 20px 30px 0px;">تصحیح</button>
							<button type="submit" class="btn btn-default update" style="margin: 0px 20px 30px 0px;">ذخیره</button>
						</form>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area text-right">
						<ul>
							<li> <span>{{$total}}</span>هزینه محصول</li>
							<li> <span>{{$a=115}}</span> مالیات</li>
							<li> هزینه ارسال: رایگان</li>
							<li> <span>{{$total+$a}}</span>مجموع کل</li>
						</ul>
							<a class="btn btn-default check_out" href="#">تسویه حساب</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/#do_action-->


@endsection