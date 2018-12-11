@extends('frontend.layout',['categories'=>$categories,'brands'=>$brands,'siteinfo'=>$siteinfo,])
@section('content')

    <div class="col-sm-9 padding-right" dir="ltr">
        <!--product-details-->
        <div class="product-details">
            <div class="col-sm-5">
                <div class="view-product">
                    <img src="{{asset($product->product_img)}}" alt=""/>
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            @for($i=0;$i<3;$i++)
                                @if(isset($products[$i]->product_img))<a href=""><img
                                            src="{{asset($products[$i]->product_img)}}" alt=""></a>@endif
                            @endfor
                        </div>
                        @if(isset($products[3]->product_img))
                            <div class="item">
                                @for($i=3;$i<6;$i++)
                                    @if(isset($products[$i]->product_img))<a href=""><img
                                                src="{{asset($products[$i]->product_img)}}" alt=""></a>@endif
                                @endfor
                            </div>
                        @endif
                        @if(isset($products[6]->product_img))
                            <div class="item">
                                @for($i=6;$i<9;$i++)
                                    @if(isset($products[$i]->product_img))<a href=""><img
                                                src="{{asset($products[$i]->product_img)}}" alt=""></a>@endif
                                @endfor
                            </div>
                        @endif
                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>

            <div class="col-sm-7">
                <!--product-information-->
                <div class="product-information" dir="rtl" style="padding-right: 20px;">
                    <img src="{{asset('frontend/images/product-details/new.jpg')}}" class="newarrival" alt=""/>
                    <h2>{{$product->product_name}}</h2>
                    <p>Web ID:{{$product->id}}</p>
                    <img src="{{asset('frontend/images/product-details/rating.png')}}" alt="" style="display: block;"/>
                    <span dir="rtl">
						<span>IR ${{$product->product_price}}</span>
						<label>تعداد:</label>
						<input type="text" value="1"/>
						@if( \Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role == 'customers')@php $cus_id=\Illuminate\Support\Facades\Auth::user()->id; @endphp
						<a href="{{route('add_to_cart',['customer_id'=>$cus_id,'product_id'=>$product->id,])}}"
                           class="btn btn-fefault cart">
							<i class="fa fa-shopping-cart"></i>
							اضافه به سبد خرید
						</a>
                        @else
                            <a href="{{route('customers.sign_in')}}"
                               class="btn btn-fefault cart">
							<i class="fa fa-shopping-cart"></i>
							اضافه به سبد خرید
						</a>
                        @endif
					</span>
                    <p><b>وضعیت محصول:</b> موجود</p>
                    <p><b>نوع محصول:</b> جدید</p>
                    <p><b>برند محصول:</b> {{$product->brand_id}}</p>
                    <a href=""><img src="{{asset('frontend/images/product-details/share.png')}}"
                                    class="share img-responsive" alt=""/></a>
                </div>
                <!--/product-information-->
            </div>
        </div>
        <!--/product-details-->

        <!--category-tab-->
        <div class="category-tab shop-details-tab" dir="rtl">
            <div class="col-sm-12">
                <ul class="nav nav-tabs ">
                    <li class="pull-right"><a href="#details" data-toggle="tab">جزئیات محصول</a></li>
                    <li class="pull-right"><a href="#companyprofile" data-toggle="tab">اطلاعات سازنده </a></li>
                    <li class="pull-right"><a href="#tag" data-toggle="tab">تگ </a></li>
                    <li class="pull-right active"><a href="#reviews" data-toggle="tab">نقل و قول</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="details">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery1.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery2.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery3.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery4.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="companyprofile">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery1.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery3.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery2.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery4.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tag">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery1.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery2.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery3.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('frontend/images/home/gallery4.jpg')}}" alt=""/>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade active in" id="reviews">
                    <div class="col-sm-12">
                        <ul>
                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                        </ul>
                        <p>با سلام و عرض خسته نباشید خدمت شما مشتریان عزیز سایت ردتای پروداکشن تمام تلاش خودش رو میکنه
                            تا شما به راحتی و با رضایت هر چه تمام تر خرید خودتون را انجام بدید امیدوار هستیم در هر کجا
                            که هستید شاد و موفق و پیروز باشید.</p>
                        <p><b>نظر خود را در مورد این محصول بدهید</b></p>

                        <form action="#" method="get">
							<span>
								@csrf
								<input type="text" placeholder="نام شما" name="name"/>
								<input type="email" placeholder="آدرس ایمیل شما" name="email"/>
							</span>
                            <textarea name="description"></textarea>
                            <img class="pull-left" src="{{asset('frontend/images/product-details/rating.png')}}"
                                 alt=""/><b class="pull-left"> رتبه : </b>
                            <button type="submit" class="btn btn-default pull-right">
                                ارسال نظر
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">پیشنهادات ما برای شما</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('frontend/images/home/recommend1.jpg')}}" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('frontend/images/home/recommend2.jpg')}}" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('frontend/images/home/recommend3.jpg')}}" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('frontend/images/home/recommend1.jpg')}}" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('frontend/images/home/recommend2.jpg')}}" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{asset('frontend/images/home/recommend3.jpg')}}" alt=""/>
                                        <h2>$56</h2>
                                        <p>Easy Polo Black Edition</p>
                                        <button type="button" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

    </div>

@endsection