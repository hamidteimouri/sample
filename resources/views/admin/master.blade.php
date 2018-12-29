<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>قالب اچ تی ام ال مدیریتی نادیا</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="/assets/admin/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/assets/admin/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="/assets/admin/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>نا</i>دیا</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav hidden-xs">
                                <li><a href="#" class="waves-effect waves-light">فایل ها</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">منوکشویی <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">ایتم یک</a></li>
                                        <li><a href="#">ایتم دو</a></li>
                                        <li><a href="#">ایتم سه</a></li>
                                        <li><a href="#">ایتم چهار</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="جستجو..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">3 جدید</span>اطلاعیه ها</li>
                                        <li class="list-group slimscroll-noti notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">عنوان اطلاعیه</h5>
                                                    <p class="m-0">
                                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">عنوان اطلاعیه</h5>
                                                    <p class="m-0">
                                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">عوان اطلاعیه</h5>
                                                    <p class="m-0">
                                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">عنوان اطلاعیه</h5>
                                                    <p class="m-0">
                                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">عنوان اطلاعیه</h5>
                                                    <p class="m-0">
                                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">عنوان اطلاعیه</h5>
                                                    <p class="m-0">
                                                        <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">مشاهده تمام اطلاعیه ها</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> پروفایل</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> تنظیمات</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> قفل صفحه</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> خروج</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">اصلی</li>

                            <li class="has_sub">
                                <a href="index.html" class="waves-effect"><i class="ti-home"></i> <span> داشبورد </span> <span class="menu-arrow"></span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> کیت UI  </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-buttons.html">دکمه ها</a></li>
                                    <li><a href="ui-panels.html">پنل ها</a></li>
                                    <li><a href="ui-portlets.html">پورتلت</a></li>
                                    <li><a href="ui-checkbox-radio.html">چک باکس</a></li>
                                    <li><a href="ui-tabs.html">تب ها</a></li>
                                    <li><a href="ui-modals.html">مودال ها</a></li>
                                    <li><a href="ui-progressbars.html">پروگرس بار</a></li>
                                    <li><a href="ui-notification.html">اطلاعیه ها</a></li>
                                    <li><a href="ui-images.html">تصاویر</a></li>
                                    <li><a href="ui-bootstrap.html">رابط بوت استرپ</a></li>
                                    <li><a href="ui-typography.html">تایپوگرافی</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-light-bulb"></i><span class="label label-primary pull-right">5</span><span> اجزا </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="components-widgets.html">ویدجت ها</a></li>
                                    <li><a href="components-range-sliders.html">نوار لغزنده</a></li>
                                    <li><a href="components-masonry.html">پنل ها</a></li>
                                    <li><a href="components-sweet-alert.html">هشدارها</a></li>
                                    <li><a href="components-treeview.html">نمای درختی</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-spray"></i> <span> ایکون ها </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> فرم ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">المان های عمومی</a></li>
                                    <li><a href="form-advanced.html">فرم پیشرفته</a></li>
                                    <li><a href="form-validation.html">اعتبار سنجی فرم</a></li>
                                    <li><a href="form-pickers.html">فرم انتخاب کننده</a></li>
                                    <li><a href="form-wizard.html">فرم ویزارد</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>جدول ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="tables-basic.html">انواع جدول</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-bar-chart"></i><span class="label label-pink pull-right">2</span><span> نمودارها </span></a>
                                <ul class="list-unstyled">
                                	<li><a href="chart-flot.html">نمودار بزرگ</a></li>
                                    <li><a href="chart-morris.html">نمودار موریس</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-location-pin"></i><span> نقشه ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="map-google.html"> نقشه گوگل</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">بیشتـر</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> صفحات </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-login.html">ورود</a></li>
                                    <li><a href="page-login-v2.html">ورود 2</a></li>
                                    <li><a href="page-register.html">عضویت</a></li>
                                    <li><a href="page-register-v2.html">عضویت 2</a></li>
                                    <li><a href="page-signup-signin.html">ورود و عضویت</a></li>
                                    <li><a href="page-recoverpw.html">بازیابی پسورد</a></li>
                                    <li><a href="page-lock-screen.html">قفل صفحه</a></li>
                                    <li><a href="page-400.html">ارور 400</a></li>
                                    <li><a href="page-403.html">ارور 403</a></li>
                                    <li><a href="page-404.html">ارور 404</a></li>
                                    <li><a href="page-404_alt.html">ارور 404 ال</a></li>
                                    <li><a href="page-500.html">ارور 500</a></li>
                                    <li><a href="page-503.html">ارور 503</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> افزودنی ها </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extra-profile.html">پروفایل</a></li>
                                    <li><a href="extra-timeline.html">گاهشمار</a></li>
                                    <li><a href="extra-invoice.html">فاکتور</a></li>
                                    <li><a href="extra-email-template.html">قالب ایمیل</a></li>
                                    <li><a href="extra-maintenance.html">حالت تعمیر</a></li>
                                    <li><a href="extra-coming-soon.html">صفحه بزودی</a></li>
                                    <li><a href="extra-faq.html">سوالات متداول</a></li>
                                    <li><a href="extra-gallery.html">گالری</a></li>
                                    <li><a href="extra-pricing.html">تعرفه ها</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> ایمیل </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="email-inbox.html"> صندوق ورودی</a></li>
                                    <li><a href="email-read.html"> خواندن میل</a></li>
                                    <li><a href="email-compose.html"> ارسال میل</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>چند مرحله ای </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>منو 1 </span>  <span class="menu-arrow"></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><span>زیر منو 1</span></a></li>
                                            <li><a href="javascript:void(0);"><span>زیر منو 3</span></a></li>
                                            <li><a href="javascript:void(0);"><span>زیر منو 3</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>منو 2</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">افزودنی ها</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i><span> مدیریت مشتری </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="crm-dashboard.html"> داشبورد </a></li>
                                    <li><a href="crm-opportunities.html"> فرصت ها </a></li>
                                    <li><a href="crm-customers.html"> مشتریان </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-shopping-cart"></i><span class="label label-warning pull-right">6</span><span> فروشگاه </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ecommerce-dashboard.html"> داشبورد</a></li>
                                    <li><a href="ecommerce-products.html"> محصولات</a></li>
                                    <li><a href="ecommerce-product-detail.html"> جزئیات محصول</a></li>
                                    <li><a href="ecommerce-product-edit.html"> ویرایش محصولات</a></li>
                                    <li><a href="ecommerce-orders.html"> سفارشات</a></li>
                                    <li><a href="ecommerce-sellers.html"> فروشندگان</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">تنظیمات <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="#">ایتم 1</a></li>
                                        <li><a href="#">ایتم 2</a></li>
                                        <li><a href="#">ایتم 3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">ایتم 4</a></li>
                                    </ul>
                                </div>
                                <h4 class="page-title">داشبورد</h4>
                                <p class="text-muted page-title-alt">به قالب مدیریتی نادیا خوش امدید</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-attach-money text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600">50568</h2>
                                    <div class="text-muted m-t-5">درآمد کل</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-add-shopping-cart text-pink"></i>
                                    <h2 class="m-0 text-dark counter font-600">1256</h2>
                                    <div class="text-muted m-t-5">فروش</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-store-mall-directory text-info"></i>
                                    <h2 class="m-0 text-dark counter font-600">18</h2>
                                    <div class="text-muted m-t-5">مغازه ها</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-account-child text-custom"></i>
                                    <h2 class="m-0 text-dark counter font-600">8564</h2>
                                    <div class="text-muted m-t-5">کاربران</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        	<div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="text-dark header-title m-t-0">درامد کل</h4>

                        			<div class="row">
                        				<div class="col-md-8">
                        					<div class="text-center">
												<ul class="list-inline chart-detail-list">
													<li>
														<h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>دکستاپ</h5>
													</li>
													<li>
														<h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>تبلت ها</h5>
													</li>
                                                    <li>
														<h5><i class="fa fa-circle m-r-5" style="color: #bbbbbb;"></i>موبایل ها</h5>
													</li>
												</ul>
											</div>

											<div id="morris-area-with-dotted" style="height: 300px;"></div>

                        				</div>



                        				 <div class="col-md-4">

                                            <p class="font-600">ای مک <span class="text-primary pull-right">80%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-primary progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                              </div><!-- /.progress-bar .progress-bar-danger -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">ای بوک <span class="text-pink pull-right">50%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                              </div><!-- /.progress-bar .progress-bar-pink -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">ایفون s5 <span class="text-info pull-right">70%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                              </div><!-- /.progress-bar .progress-bar-info -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">ایفون 6 <span class="text-warning pull-right">65%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                              </div><!-- /.progress-bar .progress-bar-warning -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">ایفون s6 <span class="text-success pull-right">40%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                              </div><!-- /.progress-bar .progress-bar-success -->
                                            </div><!-- /.progress .no-rounded -->


                                        </div>



                        			</div>

                        			<!-- end row -->

                        		</div>

                            </div>



                        </div>
                        <!-- end row -->

                        <div class="row">
							<div class="col-lg-4">
								<div class="card-box">
									<div class="bar-widget">
										<div class="table-box">
											<div class="table-detail">
												<div class="iconbox bg-info">
													<i class="icon-layers"></i>
												</div>
											</div>

											<div class="table-detail">
											   <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
											   <h5 class="text-muted m-b-0 m-t-0">بازدید کننده</h5>
											</div>
                                            <div class="table-detail text-right">
                                                <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                                            </div>

										</div>
									</div>
								</div>
							</div>

                            <div class="col-lg-4">
								<div class="card-box">
									<div class="bar-widget">
										<div class="table-box">
											<div class="table-detail">
												<div class="iconbox bg-custom">
													<i class="icon-layers"></i>
												</div>
											</div>

											<div class="table-detail">
											   <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
											   <h5 class="text-muted m-b-0 m-t-0">بازدید کننده</h5>
											</div>
                                            <div class="table-detail text-right">
                                                <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">1/5</span>
                                            </div>

										</div>
									</div>
								</div>
							</div>

                            <div class="col-lg-4">
								<div class="card-box">
									<div class="bar-widget">
										<div class="table-box">
											<div class="table-detail">
												<div class="iconbox bg-danger">
													<i class="icon-layers"></i>
												</div>
											</div>

											<div class="table-detail">
											   <h4 class="m-t-0 m-b-5"><b>1256</b></h4>
											   <h5 class="text-muted m-b-0 m-t-0">بازدید کننده</h5>
											</div>
                                            <div class="table-detail text-right">
                                                <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5</span>
                                            </div>

										</div>
									</div>
								</div>
							</div>
						</div>



						<div class="row">
                            <!-- Transactions -->
                            <div class="col-lg-4">
                            	<div class="card-box">
									<h4 class="m-t-0 m-b-20 header-title"><b>تاریخ و زمان آخرین معاملات</b></h4>

									<div class="nicescroll mx-box">
                                        <ul class="list-unstyled transaction-list m-r-5">
                                            <li>
                                                <i class="ti-download text-success"></i>
                                                <span class="tran-text">تبلیغات</span>
                                                <span class="pull-right text-success tran-price">+ 200 ریال</span>
                                                <span class="pull-right text-muted">1395/1/2</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-upload text-danger"></i>
                                                <span class="tran-text">پشتیبانی لایسنس</span>
                                                <span class="pull-right text-danger tran-price">- 300 ریال</span>
                                                <span class="pull-right text-muted">1395/2/2</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-download text-success"></i>
                                                <span class="tran-text">فروش لایسنس</span>
                                                <span class="pull-right text-success tran-price">+ 800 ریال</span>
                                                <span class="pull-right text-muted">1395/3/3</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-download text-success"></i>
                                                <span class="tran-text">تبلیغات</span>
                                                <span class="pull-right text-success tran-price">+ 320 ریال</span>
                                                <span class="pull-right text-muted">1395/4/4</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-upload text-danger"></i>
                                                <span class="tran-text">افزودن پلاگین جدید</span>
                                                <span class="pull-right text-danger tran-price"> - 3200 ریال</span>
                                                <span class="pull-right text-muted">1395/5/5/</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-download text-success"></i>
                                                <span class="tran-text">گوگل.</span>
                                                <span class="pull-right text-success tran-price">+ 400 ریال</span>
                                                <span class="pull-right text-muted">1395/6/6</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-upload text-danger"></i>
                                                <span class="tran-text">تبلیغات فیس بوک</span>
                                                <span class="pull-right text-danger tran-price">- 2100 ریال</span>
                                                <span class="pull-right text-muted">1395/7/7</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-download text-success"></i>
                                                <span class="tran-text">فروش جدید</span>
                                                <span class="pull-right text-success tran-price">380 ریال</span>
                                                <span class="pull-right text-muted">1395/8/8</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-download text-success"></i>
                                                <span class="tran-text">تبلیغات</span>
                                                <span class="pull-right text-success tran-price">+ 600 ریال</span>
                                                <span class="pull-right text-muted">1395/9/9</span>
                                                <span class="clearfix"></span>
                                            </li>

                                            <li>
                                                <i class="ti-upload text-danger"></i>
                                                <span class="tran-text">پشتیبانی لایسنس</span>
                                                <span class="pull-right text-danger tran-price">- 600 ریال</span>
                                                <span class="pull-right text-muted">1395/10/10</span>
                                                <span class="clearfix"></span>
                                            </li>


                                        </ul>
                                    </div>
								</div>

                            </div> <!-- end col -->

                            <!-- CHAT -->
                            <div class="col-lg-4">
                            	<div class="card-box">
                            		<h4 class="m-t-0 m-b-20 header-title"><b>چت</b></h4>

                            		<div class="chat-conversation">
                                        <ul class="conversation-list nicescroll">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/avatar-1.jpg" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>جان</i>
                                                        <p>
                                                           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>اسمیت</i>
                                                        <p>
                                                           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/avatar-1.jpg" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>جان</i>
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                    <i>10:02</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>اسمیت</i>
                                                        <p>
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم...
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-sm-9 chat-inputbar">
                                                <input type="text" class="form-control chat-input" placeholder="پیام خود را تایپ کنید">
                                            </div>
                                            <div class="col-sm-3 chat-send">
                                                <button type="submit" class="btn btn-md btn-info btn-block waves-effect waves-light">ارسال</button>
                                            </div>
                                        </div>
                                    </div>
                            	</div>

                            </div> <!-- end col-->


                            <!-- Todos app -->
                            <div class="col-lg-4">
                            	<div class="card-box">
									<h4 class="m-t-0 m-b-20 header-title"><b>تودو</b></h4>
									<div class="todoapp">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 id="todo-message"><span id="todo-remaining"></span> از <span id="todo-total"></span> باقی مانده</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">بایگانی</a>
                                            </div>
                                        </div>

                                        <ul class="list-group no-margn nicescroll todo-list" style="height: 280px" id="todo-list"></ul>

                                         <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                            <div class="row">
                                                <div class="col-sm-9 todo-inputbar">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="افزودن مورد جدید">
                                                </div>
                                                <div class="col-sm-3 todo-send">
                                                    <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">افزودن</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>

                            </div> <!-- end col -->
                        </div> <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    © 1396. تمام حقوق محفوظ است
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">چت</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">چانجل</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">توماس</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">دیوید</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">کارتینا</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">شادا</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">ادیمنه</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">اوکا</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">دانا</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">جان</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">سورتو</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap-rtl.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>


        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

         <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

        <!-- Todojs  -->
        <script src="assets/pages/jquery.todo.js"></script>

        <!-- chatjs  -->
        <script src="assets/pages/jquery.chat.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>

		<script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		<script src="assets/pages/jquery.dashboard_2.js"></script>



    </body>
</html>