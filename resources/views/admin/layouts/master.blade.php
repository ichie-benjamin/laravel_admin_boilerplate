<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.partials.head')


<body>

<div id="">

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>{{ env('APP_NAME') }}<span>]</span></a></div>

@include('admin.layouts.partials.sideleft')

<!-- ########## START: HEAD PANEL ########## -->
@include('admin.layouts.partials.header')
<!-- ########## END: HEAD PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 ">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <span class="breadcrumb-item active">@yield("head_title")</span>
            </nav>
        </div><!-- br-pageheader -->

        @yield('notification', @include('admin.notification'))

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">@yield("head_title")</h4>

            <div class=" " style="padding-top: 10px;">

        @yield('content')

            </div>
        </div>

    </div>
</div>


@include('admin.layouts.partials.foot')
</body>
</html>
