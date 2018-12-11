@extends('frontend.layout')
@section('content')
<!--form-->
	<section id="form">
		<div class="container">
			<div class="row">
				@include('backend.partials.errorMsg')
				<div class="col-sm-4 col-sm-offset-1">
					<!--login form-->
					<div class="login-form">
						<h2>ورود به پنل کاربری</h2>

						<form action="{{route('customers.sign_in_post')}}" method="post">
							@csrf
							<input type="email" name="email" placeholder="email" value="{{old('email')}}"/>
							<input type="password" name="password" placeholder="password" value="{{old('password')}}"/>
							<span>
								<input type="checkbox" class="checkbox" name="remember" value="1">
								مرا به خاطر بسپار
							</span>
							<button type="submit" class="btn btn-default">ورود</button>
						</form>
					</div>
					<!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">یا</h2>
				</div>
				<div class="col-sm-4">
					<!--sign up form-->
					<div class="signup-form">
						<h2>ثبت نام کاربر جدید!</h2>
						@include('backend.partials.msg')
						<form action="{{route('customers.sign_up_post')}}" method="post">
							@csrf
							<input type="text" name="name" placeholder="Name"/>
							<input type="email" name="email" placeholder="Email"/>
							@if($errors->has('email')) <p class="bg-danger" style="background-color: rgba(250,50,50,.5);padding: 10px;border-right: 15px solid dodgerblue;">{{$errors->first('email')}}</p> @endif
							<input type="password" name="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">ثبت نام</button>
						</form>
					</div>
					<!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
<!--/form-->
@endsection