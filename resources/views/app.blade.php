<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- STYLES -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/blue.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/morris.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('/css/simple-line-icons.css') }}" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('/css/weather-icons.min.css') }}" rel="stylesheet" />     -->
    <!-- <link href="{{ asset('/css/themify-icons.css') }}" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('/css/flag-icon.min.css') }}" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('/css/linea.css') }}" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('/css/materialdesignicons.min.css') }}" rel="stylesheet" /> -->
    <link href="{{ asset('/css/spinners.css') }}" rel="stylesheet" />    
    
    <!-- SCRIPTS -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.slimscroll.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.sparkline.min.js') }}" defer></script>
    <script src="{{ asset('/js/jQuery.style.switcher.js') }}" defer></script>
    <script src="{{ asset('/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/js/custom.min.js') }}" defer></script>        
    <script src="{{ asset('/js/morris.min.js') }}" defer></script>
    <!-- <script src="{{ asset('/js/dashboard1.js') }}" defer></script> -->
    <script src="{{ asset('/js/raphael-min.js') }}" defer></script>
    <script src="{{ asset('/js/sidebarmenu.js') }}" defer></script>
    <script src="{{ asset('/js/sticky-kit.min.js') }}" defer></script>
    <script src="{{ asset('/js/waves.js') }}" defer></script>
    @inertiaHead
  </head>
  <body class="fix-header fix-sidebar card-no-border">
    @inertia
  </body>
</html>