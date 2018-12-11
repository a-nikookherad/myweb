<!--header-->
<header id="header">
    <!--header_top-->
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <div class="logo pull-left">
                            @if(isset($siteinfo->logo)) <a href="index.html"><img src="{{asset($siteinfo->logo)}}"
                                                                                  alt="" style="height: 30px;"
                                                                                  class="pull-left"/></a> @endif
                        </div>
                        <ul class="nav nav-pills pull-right">

                            @if(isset($siteinfo->phone))
                                <li><a href="#"><i class="fa fa-phone"></i> {{$siteinfo->phone}}</a></li>@endif
                            @if(isset($siteinfo->gmail))
                                <li><a href="#"><i class="fa fa-envelope"></i> {{$siteinfo->gmail}}</a></li>@endif
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="@if(isset($siteinfo->facebook)){{url($siteinfo->facebook) }} @endif"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li><a href="@if(isset($siteinfo->twitter)){{$siteinfo->twitter }} @endif"><i
                                            class="fa fa-twitter"></i></a></li>
                            <li><a href="@if(isset($siteinfo->linked_in)){{$siteinfo->linked_in }} @endif"><i
                                            class="fa fa-linkedin"></i></a></li>
                            <li><a href="@if(isset($siteinfo->google)){{$siteinfo->google }} @endif"><i
                                            class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->
    <!--header-middle-->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pull-left" dir="rtl">
                    <div class="shop-menu ">
                        <ul class="nav navbar-nav">
                            @if(isset(\Illuminate\Support\Facades\Auth::user()->role))
                                @if(! \Illuminate\Support\Facades\Auth::user()->role == 'customers')
                                    <li><a href="{{route('customers.sign_in')}}"><i class="fa fa-lock"></i> ورود</a>
                                    </li>@endif
                                @if( \Illuminate\Support\Facades\Auth::user()->role == 'customers')
                                    <li><a href="{{route('customers.log_out')}}"><i class="fa fa-lock"></i> خروج</a>
                                    </li>
                                @endif
                            @else
                                <li><a href="{{route('customers.sign_in')}}"><i class="fa fa-lock"></i> ورود</a></li>
                            @endif

                            <li><a href="{{route('front.favorites.list')}}"><i class="fa fa-star"></i> علاقه مندی ها</a>
                            </li>
                            <li><a href="{{route('front.carts.list')}}"><i class="fa fa-shopping-cart"></i> سبد خرید</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 pull-left">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-right">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('contact_us')}}">ارتباط با ما</a></li>
                            <li><a href="{{route('about_us')}}">درباره ما</a></li>
                            <li class="dropdown"><a href="#">فروشگاه<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu" style="right:0">
                                    <li><a href="{{route('home')}}">محصولات</a></li>
                                    <li><a href="{{route('front.carts.list')}}">سبد خرید</a></li>
                                    <li><a href="{{route('customers.sign_in')}}">ورود</a></li>
                                </ul>
                            </li>
                            {{--<li class="dropdown"><a href="#">بلاگ<i class="fa fa-angle-down"></i></a>--}}
                            {{--<ul role="menu" class="sub-menu">--}}
                            {{--<li><a href="blog.html" class="pr-4">لیست بلاگ ها</a></li>--}}
                            {{--<li><a href="blog-single.html">تک بلاگ</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{route('home')}}">بلاگ</a></li>--}}
                            <li><a href="{{route('home')}}" class="active">خانه</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->
    <!--header-bottom-->

    <!--/header-bottom-->
</header>
<!--/header-->
