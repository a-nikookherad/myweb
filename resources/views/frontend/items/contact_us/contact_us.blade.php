@extends('frontend.layout')
@section('content')
    {{--<div id="contact-page" class="container">--}}
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">ارتباط با  <strong>ما</strong></h2>
                    <div id="gmap" class="contact-map" style="height: auto;">
                        <h4>با سلام:</h4>
                        <p>برای ارتباط با ما از اطلاعاتی که در زیر آمده استفاده کنید</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">فرستادن پیام</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" action="{{route('home')}}" method="post">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="ایمیل">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="نام">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="عنوان">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="پیام شما ..."></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-left" >ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">اطلاعات تماس</h2>
                        <address>
                            <p>فروشگاه مجازی</p>
                            <p>مرکزی(ایران)</p>
                            <p>ساوه میدان شهرداری</p>
                            <p>موبایل: {{$siteinfo->phone}}</p>
                            <p>فکس: {{$siteinfo->phone}}</p>
                            <p>ایمیل: {{$siteinfo->gmail}}</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">شبکه های اجتماعی</h2>
                            <ul>
                                <li>
                                    <a href="{{$siteinfo->facebook}}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{$siteinfo->twitter}}"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{$siteinfo->google}}"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--</div>--}}
@endsection