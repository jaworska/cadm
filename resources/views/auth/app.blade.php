<!DOCTYPE html>
<!-- Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7Author: KeenThemesWebsite: http://www.keenthemes.com/Contact: support@keenthemes.comFollow: www.twitter.com/keenthemesDribbble: www.dribbble.com/keenthemesLike: www.facebook.com/keenthemesPurchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemesRenew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemesLicense: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.-->
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>CADM Automotive</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>            WebFont.load({
            google: {
                "families":[
                    "Poppins:300,400,500,600,700",
                    "Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;                }            });        </script>
    <!--end::Fonts -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="/metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="/metronic/assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/metronic/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="/metronic/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="/metronic/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="/metronic/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="/metronic/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="/img/logo-cadm-white.png" />
</head>
<!-- end::Head -->
<!-- begin::Body -->
<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" >
@include('auth.partials.page_loader')
<!-- begin:: Page -->
@include('auth.partials.mobile_header')
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        @include('auth.partials.aside_base')
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item kt-header--fixed " >
                <div></div>
                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    <!--begin: Language bar -->
                    {{--@include('auth.partials.language_bar')--}}
                    <!--end: Language bar -->

                    <!--begin: User Bar -->
                    @include('auth.partials.user_bar')
                    <!--end: User Bar -->
                </div>
                <!-- end:: Header Topbar -->
            </div>
            <!-- end:: Header -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                <div class="kt-content kt-grid__item kt-grid__item--fluid" id="kt_content">
                    @yield('content')
                </div>
            </div>
            @include('auth.partials.footer')
        </div>
    </div>
</div>
<!-- end:: Page -->
<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop"><i class="fa fa-arrow-up"></i></div>
<!-- end::Scrolltop -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors":{
            "state":{
                "brand":"#e95c1b",
                "dark":"#282a3c",
                "light":"#ffffff",
                "primary":"#e95c1b",
                "success":"#34bfa3",
                "info":"#36a3f7",
                "warning":"#ffb822",
                "danger":"#fd3995"},
            "base":{
                "label":[
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"],
                "shape":[
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"]}}};
</script>
<!-- end::Global Config -->
<!--begin::Global Theme Bundle(used by all pages) -->
<script src="/metronic/assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="/metronic/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->
<!--begin::Page Vendors(used by this page) -->
<script src="/metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="/metronic/assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Scripts(used by this page) -->
<script src="/metronic/assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
@yield('scripts')
<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>