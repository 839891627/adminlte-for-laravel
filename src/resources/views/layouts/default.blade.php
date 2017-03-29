<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/arvin/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/arvin/AdminLTE.min.css') }}">
    <title>@yield('title', '')</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

@include('arvin::layouts._header')
@include('arvin::layouts._sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('page_title')
            </h1>
            {{--<ol class="breadcrumb">--}}
            {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
            {{--<li class="active">Here</li>--}}
            {{--</ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-info">
                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    @include('arvin::layouts._footer')
</div>

<script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
@yield('js')
</body>
</html>
