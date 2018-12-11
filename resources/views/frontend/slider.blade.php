<section id="slider" dir="ltr">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                @if($sliders)

                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @php  $active='active';$counter=0;   @endphp
                            @foreach($sliders as $slide)
                                <li data-target="#slider-carousel" data-slide-to="{{isset($active)?$active:''}}" class="{{isset($active)?$active:''}}"></li>
                                @php  unset($active);$counter++;   @endphp
                            @endforeach
                        </ol>

                        <div class="carousel-inner">

                            @php  $active='active';   @endphp
                            @foreach($sliders as $slide)
                                <div class="item {{isset($active)?$active:''}}">
                                    <div class="col-sm-6" dir="rtl">
                                        <h1>{{$slide->slide_title}}</h1>
                                        {{--<h2>Free E-Commerce Template</h2>--}}
                                        <p>{{$slide->slide_desc}}</p>
                                        {{--<button type="button" class="btn btn-default get">Get it now</button>--}}
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{asset($slide->slide_img)}}" class="girl img-responsive"
                                             alt="{{$slide->slide_title}}"/>
                                        @if(isset($slide->slide_offer_img))
                                            <img src="{{asset($slide->slide_offer_img)}}"
                                                 style="width: 150px;height: 150px;" class="pricing"
                                                 alt="{{$slide->slide_title}}"/>
                                        @endif
                                    </div>
                                </div>
                                @php  unset($active);   @endphp
                            @endforeach
                            @endif


                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

            </div>
        </div>
    </div>
</section>