{{--@if(Illuminate\Support\Facades\Auth::check())--}}
<!DOCTYPE html>
<html lang="en" class=" js inlinesvg" dir="rtl">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Dashboard</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->


	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="{{asset('backend/css/ie.css')}}" rel="stylesheet">
	<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="{{asset('backend/css/ie9.css')}}" rel="stylesheet">
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{ asset('backend/img/favicon.ico') }}">
	<!-- end: Favicon -->




</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{route('dashboard')}}"><span>دشبورد</span></a>

				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav" dir="ltr">
					<ul class="nav pull-right">

						<li><a href="#">
								@if(\Illuminate\Support\Facades\Auth::check())
									خوش آمدید: {{\Illuminate\Support\Facades\Auth::user()->name}}
								@endif
								</a></li>

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>تنظیمات کاربری</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i>
										@if(\Illuminate\Support\Facades\Auth::check())
											{{\Illuminate\Support\Facades\Auth::user()->name}}
										@endif
									</a></li>
								<li><a href="{{route('users.logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

			</div>
		</div>
	</div>
	<!-- start: Header -->

		<div class="container-fluid-full" >
		<div class="row-fluid">

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2" >
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> کاربران </span><span class="badge badge-info "> 2 </span></a>
							<ul>
								<li><a class="submenu" href="{{route('users.list')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> لیست کاربران سایت</span></a></li>
								<li><a class="submenu" href="{{route('users.register')}}"><i class="icon-edit"></i><span class="hidden-tablet"> اضافه کردن کاربر</span></a></li>
							</ul>
						</li>
						<li>
                            <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> محصولات</span><span class="badge badge-info "> 2 </span></a>
                            <ul>
                                <li><a class="submenu" href="{{route('back.products.list')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> لیست محصولات سایت</span></a></li>
                                <li><a class="submenu" href="{{route('back.products.add')}}"><i class="icon-edit"></i><span class="hidden-tablet"> اضافه کردن محصول</span></a></li>
                            </ul>
                        </li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-envelope"></i></i><span class="hidden-tablet"> دسته بندی ها</span><span class="badge badge-info "> 2 </span></a>
							<ul>
								<li><a class="submenu" href="{{route('back.categories.list')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> لیست دسته بندی</span></a></li>
								<li><a class="submenu" href="{{route('back.categories.add')}}"><i class="icon-edit"></i><span class="hidden-tablet"> اضافه کردن دسته بندی</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> برندها</span><span class="badge badge-info "> 2 </span></a>
							<ul>
								<li><a class="submenu" href="{{route('back.brands.list')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> همه ی برند ها</span></a></li>
								<li><a class="submenu" href="{{route('back.brands.add')}}"><i class="icon-edit"></i><span class="hidden-tablet">اضافه کردن برند</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-font"></i><span class="hidden-tablet"> تگ های محصول</span><span class="badge badge-info "> 2 </span></a>
							<ul>
								<li><a class="submenu" href="{{route('back.tags.list')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> لیست تگ ها</span></a></li>
								<li><a class="submenu" href="{{route('back.tags.add')}}"><i class="icon-edit"></i><span class="hidden-tablet"> اضافه کردن تگ</span></a></li>
							</ul>
						</li>
						<li>
							<a class="submenu" href="{{route('back.customers.list')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> لیست مشتریان</span></a>
						</li>
						<li><a href="{{route('back.orders.list')}}"><i class="icon-list-alt"></i><span class="hidden-tablet"> لیست سفارشات</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-picture"></i><span class="hidden-tablet"> اسلایدر سایت</span><span class="badge badge-info "> 2 </span></a>
							<ul>
								<li><a class="submenu" href="{{route('back.sliders.list')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> لیست اسلایدها</span></a></li>
								<li><a class="submenu" href="{{route('back.sliders.add')}}"><i class="icon-edit"></i><span class="hidden-tablet"> اضافه کردن اسلاید</span></a></li>
							</ul>
						</li>
						<li><a href="{{route('back.siteinfos.list')}}"><i class="icon-calendar"></i><span class="hidden-tablet"> اطلاعات سایت</span></a></li>
						<li><a href="{{route('front.shipping.list')}}"><i class="icon-align-justify"></i><span class="hidden-tablet">اطلاعات ارسال</span></a></li>
						{{--<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>--}}
						{{--<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>--}}
						{{--<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>--}}
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10" style="min-height: 168px;margin-right: 14.422%;margin-left:0px !important; " dir="ltr">


			@yield('content')
				<!--/row-->

			</div>
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2018 <a href="http://github.io/redtie7/" alt="داشبورد مدیریتی">داشبورد مدیریتی </a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>

		<script src="{{asset('backend/js/modernizr.js')}}"></script>

		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>

		<script src='{{asset("backend/js/fullcalendar.min.js")}}'></script>

		<script src='{{asset("backend/js/jquery.dataTables.min.js")}}'></script>
		<script src="{{asset('backend/js/excanvas.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>

		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>

		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>

		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>

		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

		<script src="{{asset('backend/js/counter.js')}}"></script>

		<script src="{{asset('backend/js/retina.js')}}"></script>

		<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->

</body>
</html>
{{--@endif--}}