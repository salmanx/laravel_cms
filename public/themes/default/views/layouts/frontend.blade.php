<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <link href="/fs/misc/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title></title><!-- Mobile Specific Metas
    ================================================== -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="deny" http-equiv="X-Frame-Options">
    <meta content="" name="description">
    @include('layouts.frontend.partials.head')

</head>
<body class="fireservice-portal-gov-bd">
    @include('layouts.frontend.partials.mobile-screen')
    <div class="container">
      @include('layouts.frontend.partials.top-bar')
      @include('layouts.frontend.partials.banner')
      @include('layouts.frontend.partials.navbar')
        <div class="sixteen columns" id="contents">
        @yield('content')
        </div>
    </div><!-- container -->
    @include('layouts.frontend.partials.footer')
</body>
</html>