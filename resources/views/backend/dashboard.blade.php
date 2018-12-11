@extends('backend.layout')
@section('content')
    {{--<div id="content" class="span10" style="min-height: 410px;">--}}

        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('home')}}">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        </ul>

    <div class="row-fluid">

        <a class="quick-button metro yellow span2" href="{{route('users.list')}}">
            <i class="icon-group"></i>
            <p>Users</p>
            <span class="badge">237</span>
        </a>
        <a class="quick-button metro red span2" href="{{route('back.products.list')}}">
            <i class="icon-comments-alt"></i>
            <p>pro</p>
            <span class="badge">46</span>
        </a>
        <a class="quick-button metro blue span2" href="{{route('back.orders.list')}}">
            <i class="icon-shopping-cart" ></i>
            <p>Orders</p>
            <span class="badge">13</span>
        </a>
        <a class="quick-button metro green span2" href="{{route('back.products.list')}}">
            <i class="icon-barcode"></i>
            <p>Products</p>
        </a>
        <a class="quick-button metro pink span2" href="{{route('back.sliders.list')}}">
            <i class="icon-envelope"></i>
            <p>sliders</p>
            <span class="badge">88</span>
        </a>
        <a class="quick-button metro black span2" href="{{route('back.siteinfos.list')}}">
            <i class="icon-calendar"></i>
            <p>site info</p>
        </a>

        <div class="clearfix"></div>

    </div>
    <!--/row-->



        <div class="row-fluid">

            <div class="span8 widget blue" ontablet="span7" ondesktop="span8">

                <div id="stats-chart2" style="height: 282px; padding: 0px; position: relative;"><canvas class="base" width="523" height="282"></canvas><canvas class="overlay" width="523" height="282" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:rgba(255,255,255,0.8)"><div class="tickLabel" style="position:absolute;text-align:center;left:39px;top:262px;width:30px">2</div><div class="tickLabel" style="position:absolute;text-align:center;left:73px;top:262px;width:30px">4</div><div class="tickLabel" style="position:absolute;text-align:center;left:106px;top:262px;width:30px">6</div><div class="tickLabel" style="position:absolute;text-align:center;left:139px;top:262px;width:30px">8</div><div class="tickLabel" style="position:absolute;text-align:center;left:172px;top:262px;width:30px">10</div><div class="tickLabel" style="position:absolute;text-align:center;left:205px;top:262px;width:30px">12</div><div class="tickLabel" style="position:absolute;text-align:center;left:238px;top:262px;width:30px">14</div><div class="tickLabel" style="position:absolute;text-align:center;left:271px;top:262px;width:30px">16</div><div class="tickLabel" style="position:absolute;text-align:center;left:304px;top:262px;width:30px">18</div><div class="tickLabel" style="position:absolute;text-align:center;left:338px;top:262px;width:30px">20</div><div class="tickLabel" style="position:absolute;text-align:center;left:371px;top:262px;width:30px">22</div><div class="tickLabel" style="position:absolute;text-align:center;left:404px;top:262px;width:30px">24</div><div class="tickLabel" style="position:absolute;text-align:center;left:437px;top:262px;width:30px">26</div><div class="tickLabel" style="position:absolute;text-align:center;left:470px;top:262px;width:30px">28</div><div class="tickLabel" style="position:absolute;text-align:center;left:503px;top:262px;width:30px">30</div></div><div class="yAxis y1Axis" style="color:rgba(255,255,255,0.8)"><div class="tickLabel" style="position:absolute;text-align:right;top:247px;right:491px;width:32px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:196px;right:491px;width:32px">10000</div><div class="tickLabel" style="position:absolute;text-align:right;top:146px;right:491px;width:32px">20000</div><div class="tickLabel" style="position:absolute;text-align:right;top:95px;right:491px;width:32px">30000</div><div class="tickLabel" style="position:absolute;text-align:right;top:45px;right:491px;width:32px">40000</div><div class="tickLabel" style="position:absolute;text-align:right;top:-6px;right:491px;width:32px">50000</div></div></div></div>

            </div>

            <div class="sparkLineStats span4 widget green" ontablet="span5" ondesktop="span4">

                <ul class="unstyled">

                    <li><span class="sparkLineStats3"><canvas width="80" height="40" style="display: inline-block; width: 80px; height: 40px; vertical-align: top;"></canvas></span>
                        Pageviews:
                        <span class="number">781</span>
                    </li>
                    <li><span class="sparkLineStats4"><canvas width="80" height="40" style="display: inline-block; width: 80px; height: 40px; vertical-align: top;"></canvas></span>
                        Pages / Visit:
                        <span class="number">2,19</span>
                    </li>
                    <li><span class="sparkLineStats5"><canvas width="80" height="40" style="display: inline-block; width: 80px; height: 40px; vertical-align: top;"></canvas></span>
                        Avg. Visit Duration:
                        <span class="number">00:02:58</span>
                    </li>
                    <li><span class="sparkLineStats6"><canvas width="80" height="40" style="display: inline-block; width: 80px; height: 40px; vertical-align: top;"></canvas></span>
                        Bounce Rate: <span class="number">59,83%</span>
                    </li>
                    <li><span class="sparkLineStats7"><canvas width="80" height="40" style="display: inline-block; width: 80px; height: 40px; vertical-align: top;"></canvas></span>
                        % New Visits:
                        <span class="number">70,79%</span>
                    </li>
                    <li><span class="sparkLineStats8"><canvas width="80" height="40" style="display: inline-block; width: 80px; height: 40px; vertical-align: top;"></canvas></span>
                        % Returning Visitor:
                        <span class="number">29,21%</span>
                    </li>

                </ul>

                <div class="clearfix"></div>

            </div><!-- End .sparkStats -->

        </div>

        <div class="row-fluid hideInIE8 circleStats">

            <div class="span2" ontablet="span4" ondesktop="span2">
                <div class="circleStatsItemBox yellow">
                    <div class="header">Disk Space Usage</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="58" class="whiteCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: none; background: none; font-family: Arial; font-weight: bold; text-align: center; color: rgba(255, 255, 255, 0.9); padding: 0px; -webkit-appearance: none;"></div>
                    </div>
                    <div class="footer">
							<span class="count">
								<span class="number">29000</span>
								<span class="unit">MB</span>
							</span>
                        <span class="sep"> / </span>
                        <span class="value">
								<span class="number">50000</span>
								<span class="unit">MB</span>
							</span>
                    </div>
                </div>
            </div>

            <div class="span2" ontablet="span4" ondesktop="span2">
                <div class="circleStatsItemBox green">
                    <div class="header">Bandwidth</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="78" class="whiteCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: none; background: none; font-family: Arial; font-weight: bold; text-align: center; color: rgba(255, 255, 255, 0.9); padding: 0px; -webkit-appearance: none;"></div>
                    </div>
                    <div class="footer">
							<span class="count">
								<span class="number">3900</span>
								<span class="unit">GB</span>
							</span>
                        <span class="sep"> / </span>
                        <span class="value">
								<span class="number">5000</span>
								<span class="unit">GB</span>
							</span>
                    </div>
                </div>
            </div>

            <div class="span2" ontablet="span4" ondesktop="span2">
                <div class="circleStatsItemBox greenDark">
                    <div class="header">Memory</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="100" class="whiteCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: none; background: none; font-family: Arial; font-weight: bold; text-align: center; color: rgba(255, 255, 255, 0.9); padding: 0px; -webkit-appearance: none;"></div>
                    </div>
                    <div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
                        <span class="sep"> / </span>
                        <span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
                    </div>
                </div>
            </div>

            <div class="span2 noMargin" ontablet="span4" ondesktop="span2">
                <div class="circleStatsItemBox pink">
                    <div class="header">CPU</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="83" class="whiteCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: none; background: none; font-family: Arial; font-weight: bold; text-align: center; color: rgba(255, 255, 255, 0.9); padding: 0px; -webkit-appearance: none;"></div>
                    </div>
                    <div class="footer">
							<span class="count">
								<span class="number">3</span>
								<span class="unit">GHz</span>
							</span>
                        <span class="sep"> / </span>
                        <span class="value">
								<span class="number">3.2</span>
								<span class="unit">GHz</span>
							</span>
                    </div>
                </div>
            </div>

            <div class="span2" ontablet="span4" ondesktop="span2">
                <div class="circleStatsItemBox orange">
                    <div class="header">Memory</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="100" class="whiteCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: none; background: none; font-family: Arial; font-weight: bold; text-align: center; color: rgba(255, 255, 255, 0.9); padding: 0px; -webkit-appearance: none;"></div>
                    </div>
                    <div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
                        <span class="sep"> / </span>
                        <span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
                    </div>
                </div>
            </div>

            <div class="span2" ontablet="span4" ondesktop="span2">
                <div class="circleStatsItemBox greenLight">
                    <div class="header">Memory</div>
                    <span class="percent">percent</span>
                    <div class="circleStat">
                        <div style="width:120px;display:inline;&quot;"><canvas width="120" height="120"></canvas><input type="text" value="100" class="whiteCircle" readonly="readonly" style="width: 60px; position: absolute; margin-top: 42.8571px; margin-left: -90px; font-size: 30px; border: none; background: none; font-family: Arial; font-weight: bold; text-align: center; color: rgba(255, 255, 255, 0.9); padding: 0px; -webkit-appearance: none;"></div>
                    </div>
                    <div class="footer">
							<span class="count">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
                        <span class="sep"> / </span>
                        <span class="value">
								<span class="number">64</span>
								<span class="unit">GB</span>
							</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row-fluid">

            <div class="widget blue span5" ontablet="span6" ondesktop="span5">

                <h2><span class="glyphicons globe"><i></i></span> Demographics</h2>

                <hr>

                <div class="content">

                    <div class="verticalChart">

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 37%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">37%</span>
                                </div>

                            </div>

                            <div class="title">US</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 16%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">16%</span>
                                </div>

                            </div>

                            <div class="title">PL</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 12%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">12%</span>
                                </div>

                            </div>

                            <div class="title">GB</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 9%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">9%</span>
                                </div>

                            </div>

                            <div class="title">DE</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 7%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">7%</span>
                                </div>

                            </div>

                            <div class="title">NL</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 6%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">6%</span>
                                </div>

                            </div>

                            <div class="title">CA</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 5%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">5%</span>
                                </div>

                            </div>

                            <div class="title">FI</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 4%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">4%</span>
                                </div>

                            </div>

                            <div class="title">RU</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 3%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">3%</span>
                                </div>

                            </div>

                            <div class="title">AU</div>

                        </div>

                        <div class="singleBar">

                            <div class="bar">

                                <div class="value" style="height: 1%;">
                                    <span style="color: rgb(45, 137, 239); display: inline;">1%</span>
                                </div>

                            </div>

                            <div class="title">N/A</div>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                </div>

            </div><!--/span-->

            <div class="widget span3 red" ontablet="span6" ondesktop="span3">

                <h2><span class="glyphicons pie_chart"><i></i></span> Browsers</h2>

                <hr>

                <div class="content">

                    <div class="browserStat big">
                        <img src="{{asset('backend/img/browser-chrome-big.png')}}" alt="Chrome">
                        <span>34%</span>
                    </div>
                    <div class="browserStat big">
                        <img src="{{asset('backend/img/browser-firefox-big.png')}}" alt="Firefox">
                        <span>34%</span>
                    </div>
                    <div class="browserStat">
                        <img src="{{asset('backend/img/browser-ie.png')}}" alt="Internet Explorer">
                        <span>34%</span>
                    </div>
                    <div class="browserStat">
                        <img src="{{asset('backend/img/browser-safari.png')}}" alt="Safari">
                        <span>34%</span>
                    </div>
                    <div class="browserStat">
                        <img src="{{asset('backend/img/browser-opera.png')}}" alt="Opera">
                        <span>34%</span>
                    </div>


                </div>
            </div>

            <div class="widget yellow span4 noMargin" ontablet="span12" ondesktop="span4">
                <h2><span class="glyphicons fire"><i></i></span> Server Load</h2>
                <hr>
                <div class="content">
                    <div id="serverLoad2" style="height: 224px; padding: 0px; position: relative;"><canvas class="base" width="243" height="224"></canvas><canvas class="overlay" width="243" height="224" style="position: absolute; left: 0px; top: 0px;"></canvas><div class="tickLabels" style="font-size:smaller"><div class="yAxis y1Axis" style="color:rgba(255,255,255,0.8)"><div class="tickLabel" style="position:absolute;text-align:right;top:210px;right:213px;width:30px">0%</div><div class="tickLabel" style="position:absolute;text-align:right;top:167px;right:213px;width:30px">20%</div><div class="tickLabel" style="position:absolute;text-align:right;top:124px;right:213px;width:30px">40%</div><div class="tickLabel" style="position:absolute;text-align:right;top:80px;right:213px;width:30px">60%</div><div class="tickLabel" style="position:absolute;text-align:right;top:37px;right:213px;width:30px">80%</div><div class="tickLabel" style="position:absolute;text-align:right;top:-6px;right:213px;width:30px">100%</div></div></div></div>
                </div>
            </div>

        </div>

        <div class="row-fluid">

            <div class="box black span4" ontablet="span6" ondesktop="span4">
                <div class="box-header">
                    <h2><i class="halflings-icon white list"></i><span class="break"></span>Weekly Stat</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <ul class="dashboard-list metro">
                        <li>
                            <a href="#">
                                <i class="icon-arrow-up green"></i>
                                <strong>92</strong>
                                New Comments
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-arrow-down red"></i>
                                <strong>15</strong>
                                New Registrations
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-minus blue"></i>
                                <strong>36</strong>
                                New Articles
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-comment yellow"></i>
                                <strong>45</strong>
                                User reviews
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-arrow-up green"></i>
                                <strong>112</strong>
                                New Comments
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-arrow-down red"></i>
                                <strong>31</strong>
                                New Registrations
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-minus blue"></i>
                                <strong>93</strong>
                                New Articles
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-comment yellow"></i>
                                <strong>256</strong>
                                User reviews
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--/span-->

            <div class="box black span4" ontablet="span6" ondesktop="span4">
                <div class="box-header">
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <ul class="dashboard-list metro">
                        <li class="green">
                            <a href="#">
                                <img class="avatar" alt="Dennis Ji" src="{{asset('backend/img/avatar.jpg')}}">
                            </a>
                            <strong>Name:</strong> Dennis Ji<br>
                            <strong>Since:</strong> Jul 25, 2012 11:09<br>
                            <strong>Status:</strong> Approved
                        </li>
                        <li class="yellow">
                            <a href="#">
                                <img class="avatar" alt="Dennis Ji" src="{{asset('backend/img/avatar.jpg')}}">
                            </a>
                            <strong>Name:</strong> Dennis Ji<br>
                            <strong>Since:</strong> Jul 25, 2012 11:09<br>
                            <strong>Status:</strong> Pending
                        </li>
                        <li class="red">
                            <a href="#">
                                <img class="avatar" alt="Dennis Ji" src="{{asset('backend/img/avatar.jpg')}}">
                            </a>
                            <strong>Name:</strong> Dennis Ji<br>
                            <strong>Since:</strong> Jul 25, 2012 11:09<br>
                            <strong>Status:</strong> Banned
                        </li>
                        <li class="blue">
                            <a href="#">
                                <img class="avatar" alt="Dennis Ji" src="{{asset('backend/img/avatar.jpg')}}">
                            </a>
                            <strong>Name:</strong> Dennis Ji<br>
                            <strong>Since:</strong> Jul 25, 2012 11:09<br>
                            <strong>Status:</strong> Updated
                        </li>
                    </ul>
                </div>
            </div><!--/span-->

            <div class="box black span4 noMargin" ontablet="span12" ondesktop="span4">
                <div class="box-header">
                    <h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="todo metro">
                        <ul class="todo-list">
                            <li class="red">
                                <a class="action icon-check-empty" href="#"></a>
                                Windows Phone 8 App
                                <strong>today</strong>
                            </li>
                            <li class="red">
                                <a class="action icon-check-empty" href="#"></a>
                                New frontend layout
                                <strong>today</strong>
                            </li>
                            <li class="yellow">
                                <a class="action icon-check-empty" href="#"></a>
                                Hire developers
                                <strong>tommorow</strong>
                            </li>
                            <li class="yellow">
                                <a class="action icon-check-empty" href="#"></a>
                                Windows Phone 8 App
                                <strong>tommorow</strong>
                            </li>
                            <li class="green">
                                <a class="action icon-check-empty" href="#"></a>
                                New frontend layout
                                <strong>this week</strong>
                            </li>
                            <li class="green">
                                <a class="action icon-check-empty" href="#"></a>
                                Hire developers
                                <strong>this week</strong>
                            </li>
                            <li class="blue">
                                <a class="action icon-check-empty" href="#"></a>
                                New frontend layout
                                <strong>this month</strong>
                            </li>
                            <li class="blue">
                                <a class="action icon-check-empty" href="#"></a>
                                Hire developers
                                <strong>this month</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


    <div class="row-fluid">
        <div class="span3 statbox purple" ontablet="span6" ondesktop="span3">
            <div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
            <div class="number">8954<i class="icon-arrow-up"></i></div>
            <div class="title">visits</div>
            <div class="footer">
                read full report
            </div>
        </div>
        <div class="span3 statbox green" ontablet="span6" ondesktop="span3">
            <div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
            <div class="number">8954<i class="icon-arrow-up"></i></div>
            <div class="title">visits</div>
            <div class="footer">
                read full report
            </div>
        </div>
        <div class="span3 statbox blue noMargin" ontablet="span6" ondesktop="span3">
            <div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
            <div class="number">8954<i class="icon-arrow-up"></i></div>
            <div class="title">visits</div>
            <div class="footer">
                read full report
            </div>
        </div>
        <div class="span3 statbox yellow" ontablet="span6" ondesktop="span3">
            <div class="boxchart"><canvas width="64" height="60" style="display: inline-block; width: 64px; height: 60px; vertical-align: top;"></canvas></div>
            <div class="number">8954<i class="icon-arrow-up"></i></div>
            <div class="title">visits</div>
            <div class="footer">
                read full report
            </div>
        </div>

    </div>


    {{--</div>--}}
@endsection