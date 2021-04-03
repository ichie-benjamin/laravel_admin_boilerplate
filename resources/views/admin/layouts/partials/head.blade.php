
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
{{--    <meta name="twitter:site" content="@themepixels">--}}
{{--    <meta name="twitter:creator" content="@themepixels">--}}
{{--    <meta name="twitter:card" content="summary_large_image">--}}
{{--    <meta name="twitter:title" content="Bracket">--}}
{{--    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">--}}
{{--    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">--}}

<!-- Facebook -->

    <meta property="og:title" content="Delta Institute">
    <meta property="og:description" content="Delta state institute.">

{{--    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">--}}
{{--    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">--}}
{{--    <meta property="og:image:type" content="image/png">--}}
{{--    <meta property="og:image:width" content="1200">--}}
{{--    <meta property="og:image:height" content="600">--}}

    <!-- Meta -->
    {{--    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">--}}
    {{--    <meta name="author" content="ThemePixels">--}}


    <title>{{ env('APP_NAME') }}</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/chartist/chartist.css') }}" rel="stylesheet">
{{--    <link href="http://themetrace.com/template/bracket/lib/select2/css/select2.min.css" rel="stylesheet">--}}


<!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

    @yield('style')


</head>
