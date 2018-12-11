<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
<!--header-->
@if(isset($siteinfo))
@include('frontend.header')
@endif
<!--/header-->

<!--slider-->
@if(isset($sliders))
	@include('frontend.slider')
@endif
<!--/slider-->

<!-- content and sidebar -->
	<section>
		<div class="container">
			<div class="row">

				<!-- content and sidebar -->
			@yield('content')
			<!-- content and sidebar -->
				<!-- csidebar -->
				@if(isset($categories) && isset($brands))
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>دسته بندی ها</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

							@foreach($categories as $category)

								@if(!count($category->subcategories->all())>0)
										<div class="panel panel-default">
											<div class="panel-heading" >
												<h4 class="panel-title"><a href="">{{$category->cat_name}}</a></h4>
											</div>
										</div>
								@else
							<div class="panel panel-default">
								<div class="panel-heading" style="padding-right: 10px;">
									<h4 class="panel-title" >
										<a data-toggle="collapse" data-parent="#accordian" href="#{{$category->cat_name}}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$category->cat_name}}
										</a>
									</h4>
								</div>
								@if(count($category->subcategories->all())>0)
								<div id="{{$category->cat_name}}" class="panel-collapse collapse">
									<div class="panel-body" style="padding:0px 15px;">
										<ul style="padding:5px 15px 5px 5px;margin-bottom: 0px;">
											@foreach($category->subcategories->all() as $sub)
											<li><a href="{{route('front.sub.products',$sub->id)}}">{{$sub->sub_cat_name}} </a></li>
											@endforeach
										</ul>
									</div>
								</div>
									@endif
							</div>
								@endif
							@endforeach
						</div>
						<!--/category-products-->

						<!--brands_products-->
						<div class="brands_products">
							<h2>برندها</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked" style="padding-right: 0px;">
									@foreach($brands as $brand)
									<li><a href="{{route('front.brand.products',$brand->id)}}" style="padding-right: 20px;"> <span class="pull-left">({{$brand->products->all()?count($brand->products->all()):'0'}})</span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<!--/brands_products-->

						<!--price-range-->
						<div class="price-range">
							<h2>رنج قیمت</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div>
						<!--/price-range-->

						<!--shipping-->
						<div class="shipping text-center">
							<img src="{{asset('frontend/images/home/shipping.jpg')}}" alt="" />
						</div>
						<!--/shipping-->
					
					</div>
				</div>
				<!-- content and sidebar -->

				@endif



			</div>
		</div>
	</section>
<!-- /content and sidebar -->

<!--Footer-->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('frontend/images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{asset('frontend/images/home/map.png')}}" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>سرویس ها</h2>
							<ul class="nav nav-pills nav-stacked" style="padding-right: 10px;">
								<li><a href="#">راهنمایی آنلاین</a></li>
								<li><a href="#">ارتباط با ما</a></li>
								<li><a href="#">وضعیت سفارش</a></li>
								<li><a href="#">تغییر مکان</a></li>
								<li><a href="#">فیدبک</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>خرید سریع</h2>
							<ul class="nav nav-pills nav-stacked" style="padding-right: 10px;">
								<li><a href="#">تیشرت</a></li>
								<li><a href="#">آقایان</a></li>
								<li><a href="#">خانوم ها</a></li>
								<li><a href="#">کارت هدیه</a></li>
								<li><a href="#">کفش</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>سیاست ها</h2>
							<ul class="nav nav-pills nav-stacked" style="padding-right: 7px;">
								<li><a href="#">نحوه اعمال</a></li>
								<li><a href="#">سیاست های شخصی سازی</a></li>
								<li><a href="#">باز نگری سیاسی</a></li>
								<li><a href="#">سیستم ارائه</a></li>
								<li><a href="#">سیستم تیکت</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>درباره فروشگاه</h2>
							<ul class="nav nav-pills nav-stacked" style="padding-right: 10px;">
								<li><a href="#">اطلاعات درباره شرکت</a></li>
								<li><a href="#">دفتر</a></li>
								<li><a href="#">آدرس انبار</a></li>
								<li><a href="#">ثبت تخلف</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>درباره فروشگاه</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="آدرس ایمیل شما" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>نمایش به روز ترین تغییرات <br />سایت ما خودش را به روز رسانی کرد...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2018 </p>
					<p class="pull-right">Developed by <span><a target="_blank" href="http://www.themeum.com">Ali Nikookherad</a></span></p>
				</div>
			</div>
		</div>
		
	</footer>

    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
