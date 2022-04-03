<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @if(View::hasSection('content-header'))
        @yield("content-header")
    @else
        <title>Doppelherz Việt Nam - Leader Talk</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
        <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    @endif
</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        @yield('content-body')
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
@if(View::hasSection('content-footer-script'))
    @yield("content-footer-script")
@else
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/deznav-init.js')}}"></script>
@endif
</body>

</html>
