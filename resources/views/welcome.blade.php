
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->







    <!-- Facebook -->

    <meta property="og:title" content="Delta Institute">
    <meta property="og:description" content="Delta state institute.">







    <!-- Meta -->




    <title>Laravel Admin</title>

    <!-- vendor css -->
    <link href="http://127.0.0.1:8000/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/admin/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/admin/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/admin/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/admin/lib/chartist/chartist.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css" media="screen">
        .no-padding {
            padding: 0;
        }
        .pointer {
            cursor: pointer;
        }
        .card {
            width: 100%;
        }
        .modal .modal-header {
            -webkit-border-top-left-radius: .2rem;
            -webkit-border-top-right-radius: .2rem;
            -moz-border-radius-topleft: .2rem;
            -moz-border-radius-topright: .2rem;
            border-top-left-radius: .2rem;
            border-top-right-radius: .2rem;
        }
        .modal-success .modal-header {
            color: #ffffff;
            background-color: #5cb85c;
        }
        .modal-warning .modal-header {
            color:#fff;
            background-color: #f0ad4e;
        }
        .modal-danger .modal-header {
            color:#fff;
            background-color: #d9534f;
        }
        .modal-info .modal-header {
            color:#fff;
            background-color: #5bc0de;
        }
        .modal-primary .modal-header {
            color:#fff;
            background-color: #428bca;
        }
        .blocked-table {
            border: 0;
        }
        .blocked-table tr td:first-child {
            padding-left: 15px;
        }
        .blocked-table tr td:last-child {
            padding-right: 15px;
        }
        .blocked-table.table-responsive,
        .blocked-table.table-responsive table {
            margin-bottom: 0;
        }
        .clickable-row:hover {
            cursor: pointer;
        }
        .blocked-table.table-responsive {
            border: none;
        }
        .blocked-table .list-group {
            margin-bottom: 0;
        }
        .blocked-table .dropdown-menu > li button {
            padding: 3px 20px;
            background: transparent;
            border: none;
            outline: none;
            width: 100%;
            text-align: left;
            white-space: nowrap;
        }
        .blocked-table .dropdown-menu > li button:hover {
            background: rgba(0,0,0,.04);
        }

        .blocked-table {
            border: 0;
        }
        .blocked-table tr th {
            border: 0 !important;
        }
        .blocked-table tr th:first-child,
        .blocked-table tr td:first-child {
            padding-left: 15px;
        }
        .blocked-table tr th:last-child,
        .blocked-table tr td:last-child {
            padding-right: 15px;
        }
        .blocked-table .table-responsive,
        .blocked-table .table-responsive table {
            margin-bottom: 0;
            border-top: 0;
            border-left: 0;
            border-right: 0;
        }
        .blocked-table .data-table {
            width: 100%;
        }
        .btn-save,
        .pw-change-container {
            display: none;
        }
        .has-error,
        .has-error input,
        .has-error select,
        .has-error textarea {
            border-color: #d9534f;
        }
        .clear-search {
            display: none;
        }
        div.dataTables_wrapper div.dataTables_length label {
            margin-top: 5px;
            margin-bottom: 5px;
            margin-right:20px;
        }
        div.dataTables_wrapper div.dataTables_length label select {
            margin-left: 5px;
            margin-right: 5px
        }
        #search_blocked_form {
            display: none;
        }
        .disabled {
            color: #dcdbdb;
            pointer-events: none;
            cursor: not-allowed;
        }
        .disabled .switch span.active {
            color: #dcdbdb;
            pointer-events: none;
            cursor: not-allowed;
        }
        .accordion.accordion-item {
            cursor: pointer;
            cursor: zoom-out;
        }
        .accordion.accordion-item.collapsed {
            cursor: zoom-in;
        }
        .accordion.accordion-item .permission-name:before,
        .accordion.accordion-item .role-name:before {
            font-family: 'FontAwesome';
            content: "\f068";
            margin: 0 .5em 0 0;
        }
        .accordion.accordion-item.collapsed .permission-name:before,
        .accordion.accordion-item.collapsed .role-name:before {
            content: "\f067";
        }
        .list-group-item table {
            font-size: .5em;
            width: 100%;
            display: table;
            table-layout: fixed;
        }
        .permissions-table,
        .roles-table {
            font-size: .9em;
        }
        .table.permissions-table thead th,
        .table.permissions-table td,
        .table.roles-table thead th,
        .table.roles-table td {
            border: none;
            vertical-align: middle;
        }
        .table.permissions-table form,
        .table.roles-table form {
            margin: 0;
        }
        @media(min-width: 576px) {
            .edit-form-delete {
                margin-top: -2.85em;
            }
        }
    </style>
    <style type="text/css" media="screen">
        .visible-xs,
        .visible-sm,
        .visible-md,
        .visible-lg {
            display: none !important;
        }
        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block {
            display: none !important;
        }
        @media (max-width: 767px) {
            .visible-xs {
                display: block !important;
            }
            table.visible-xs {
                display: table !important;
            }
            tr.visible-xs {
                display: table-row !important;
            }
            th.visible-xs,
            td.visible-xs {
                display: table-cell !important;
            }
        }
        @media (max-width: 767px) {
            .visible-xs-block {
                display: block !important;
            }
        }
        @media (max-width: 767px) {
            .visible-xs-inline {
                display: inline !important;
            }
        }
        @media (max-width: 767px) {
            .visible-xs-inline-block {
                display: inline-block !important;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm {
                display: block !important;
            }
            table.visible-sm {
                display: table !important;
            }
            tr.visible-sm {
                display: table-row !important;
            }
            th.visible-sm,
            td.visible-sm {
                display: table-cell !important;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-block {
                display: block !important;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline {
                display: inline !important;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline-block {
                display: inline-block !important;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md {
                display: block !important;
            }
            table.visible-md {
                display: table !important;
            }
            tr.visible-md {
                display: table-row !important;
            }
            th.visible-md,
            td.visible-md {
                display: table-cell !important;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-block {
                display: block !important;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline {
                display: inline !important;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline-block {
                display: inline-block !important;
            }
        }
        @media (min-width: 1200px) {
            .visible-lg {
                display: block !important;
            }
            table.visible-lg {
                display: table !important;
            }
            tr.visible-lg {
                display: table-row !important;
            }
            th.visible-lg,
            td.visible-lg {
                display: table-cell !important;
            }
        }
        @media (min-width: 1200px) {
            .visible-lg-block {
                display: block !important;
            }
        }
        @media (min-width: 1200px) {
            .visible-lg-inline {
                display: inline !important;
            }
        }
        @media (min-width: 1200px) {
            .visible-lg-inline-block {
                display: inline-block !important;
            }
        }
        @media (max-width: 767px) {
            .hidden-xs {
                display: none !important;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .hidden-sm {
                display: none !important;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .hidden-md {
                display: none !important;
            }
        }
        @media (min-width: 1200px) {
            .hidden-lg {
                display: none !important;
            }
        }
        .visible-print {
            display: none !important;
        }
        @media  print {
            .visible-print {
                display: block !important;
            }
            table.visible-print {
                display: table !important;
            }
            tr.visible-print {
                display: table-row !important;
            }
            th.visible-print,
            td.visible-print {
                display: table-cell !important;
            }
        }
        .visible-print-block {
            display: none !important;
        }
        @media  print {
            .visible-print-block {
                display: block !important;
            }
        }
        .visible-print-inline {
            display: none !important;
        }
        @media  print {
            .visible-print-inline {
                display: inline !important;
            }
        }
        .visible-print-inline-block {
            display: none !important;
        }
        @media  print {
            .visible-print-inline-block {
                display: inline-block !important;
            }
        }
        @media  print {
            .hidden-print {
                display: none !important;
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/css/bracket.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="WsKh9cS3SGt3VpnvyMa82elbZRaRthnhvnErwCxn">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

</head>


<body>

<div id="">

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>Laravel Admin<span>]</span></a></div>

    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>

        <div class="br-sideleft-menu">
            <a href="http://127.0.0.1:8000/admin/dashboard" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="http://127.0.0.1:8000/home" target="_blank" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-home tx-22"></i>
                    <span class="menu-item-label">Home</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
                    <span class="menu-item-label">Articles</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <a href="http://127.0.0.1:8000/admin/users" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-person tx-24"></i>
                    <span class="menu-item-label">Users</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->





















            <a href="http://127.0.0.1:8000/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-log-out tx-24"></i>
                    <span class="menu-item-label">Sign Out</span>
                </div><!-- menu-item -->
                <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="WsKh9cS3SGt3VpnvyMa82elbZRaRthnhvnErwCxn">                </form>
            </a><!-- br-menu-link -->

        </div><!-- br-sideleft-menu -->

    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">Benjamin</span>
                        <img src="https://ui-avatars.com/api/?name=Benjamin&amp;background=0D8ABC&amp;color=fff&amp;bold=true" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                            <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>



                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 ">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="http://127.0.0.1:8000/admin/dashboard">Dashboard</a>
                <span class="breadcrumb-item active">    Editing Role: <strong>Admin</strong>
</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
        </div>

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">    Editing Role: <strong>Admin</strong>
            </h4>

            <div class=" " style="padding-top: 10px;">


                <div class="row">
                    <div class="col-12">
                        <div class="card card-post" id="post_card">
                            <div class="card-header">
                                Editing Role: <strong>Admin</strong>
                                <div class="pull-right">
                                    <a href="http://127.0.0.1:8000/roles" class="btn btn-outline-secondary btn-sm float-right" data-toggle="tooltip" data-placement="left" title="Back to dashboard">
                                        <i class="fa fa-fw fa-reply-all" aria-hidden="true"></i>
                                        <span class="hidden-xs">Back</span> <span class="hidden-xs hidden-sm">to Roles</span>
                                    </a>
                                </div>
                            </div>
                            <input type="hidden" name="_method" value="PUT">
                            <form action="http://127.0.0.1:8000/roles/1" method="POST" accept-charset="utf-8" id="edit_role_form" class="mb-0 needs-validation" enctype="multipart/form-data" role="form" >
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="card-body">
                                    <input type="hidden" name="id" value="1">
                                    <input type="hidden" name="_token" value="WsKh9cS3SGt3VpnvyMa82elbZRaRthnhvnErwCxn">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group has-feedback row ">
                                                <label for="name" class="col-12 control-label">
                                                    Role Name
                                                </label>
                                                <div class="col-12">
                                                    <input type="text" id="name" name="name" class="form-control" value="Admin" placeholder="Type Role Name">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback row ">
                                                <label for="slug" class="col-12 control-label">
                                                    Role Slug
                                                </label>
                                                <div class="col-12">
                                                    <input type="text" id="slug" name="slug" class="form-control" value="admin" onkeypress="return numbersAndLettersOnly()" placeholder="Type Role Slug">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback row ">
                                                <label for="description" class="col-12 control-label">
                                                    Role Description
                                                </label>
                                                <div class="col-12">
                                                    <textarea id="description" name="description" class="form-control" placeholder="Type Role Description">Admin Role</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group has-feedback row ">
                                                <label for="level" class="col-12 control-label">
                                                    Role Level
                                                </label>
                                                <div class="col-12">
                                                    <input type="number" id="level" name="level" min="0" step="1" onkeypress="return event.charCode >= 48" class="form-control" value="5" placeholder="Type Role Level">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback row ">
                                                <label for="permissions" class="col-12 control-label">
                                                    Role Permissions
                                                </label>
                                                <div class="col-12">
                                                    <select name="permissions[]" id="permissions" multiple>
                                                        <option value="">Select Permissions</option>
                                                        <option  selected  value="{&quot;id&quot;:1,&quot;name&quot;:&quot;Can View Users&quot;,&quot;slug&quot;:&quot;view.users&quot;,&quot;description&quot;:&quot;Can view users&quot;,&quot;model&quot;:&quot;Permission&quot;,&quot;created_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;deleted_at&quot;:null}">
                                                            Can View Users
                                                        </option>
                                                        <option  selected  value="{&quot;id&quot;:2,&quot;name&quot;:&quot;Can Create Users&quot;,&quot;slug&quot;:&quot;create.users&quot;,&quot;description&quot;:&quot;Can create new users&quot;,&quot;model&quot;:&quot;Permission&quot;,&quot;created_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;deleted_at&quot;:null}">
                                                            Can Create Users
                                                        </option>
                                                        <option  selected  value="{&quot;id&quot;:3,&quot;name&quot;:&quot;Can Edit Users&quot;,&quot;slug&quot;:&quot;edit.users&quot;,&quot;description&quot;:&quot;Can edit users&quot;,&quot;model&quot;:&quot;Permission&quot;,&quot;created_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;deleted_at&quot;:null}">
                                                            Can Edit Users
                                                        </option>
                                                        <option  selected  value="{&quot;id&quot;:4,&quot;name&quot;:&quot;Can Delete Users&quot;,&quot;slug&quot;:&quot;delete.users&quot;,&quot;description&quot;:&quot;Can delete users&quot;,&quot;model&quot;:&quot;Permission&quot;,&quot;created_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-02T14:45:15.000000Z&quot;,&quot;deleted_at&quot;:null}">
                                                            Can Delete Users
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row ">
                                        <div class="col-md-6">
                <span data-toggle="tooltip" title="Save Role Changes">
                    <button type="submit" class="btn btn-success btn-lg btn-block" value="save" name="action">
                        <i class="fa fa-save fa-fw">
                            <span class="sr-only">
                                 Save Role Icon
                            </span>
                        </i>
                        Save Role Changes
                    </button>
                </span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <script type="text/javascript">
                                function numbersAndLettersOnly() {
                                    var ek = event.keyCode;
                                    if(48 <= ek && ek <= 57) {
                                        return true;
                                    }
                                    if(65 <= ek && ek <= 90) {
                                        return true;
                                    }
                                    if(97 <= ek && ek <= 122) {
                                        return true;
                                    }
                                    return false;
                                }
                            </script>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>


<script src="http://127.0.0.1:8000/admin/lib/jquery/jquery.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/popper.js/popper.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/bootstrap/bootstrap.js"></script>
<script src="http://127.0.0.1:8000/admin/js/perfect-scrollbar.jquery.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/moment/moment.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/peity/jquery.peity.js"></script>

<script src="http://127.0.0.1:8000/admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="http://127.0.0.1:8000/admin/lib/d3/d3.js"></script>




<script src="http://127.0.0.1:8000/admin/js/bracket.js"></script>





<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var is_touch_device = 'ontouchstart' in document.documentElement;
        if (!is_touch_device) {
            $('[data-toggle="tooltip"]').tooltip();
        }
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
<script type="text/javascript">
    var noConflictMode = jQuery.noConflict(true);
    (function ($) {
        $(document).ready(function () {
            $("#permissions").selectize({
                placeholder: ' Select Permissions ',
                allowClear: true,
                create: false,
                highlight: true,
                diacritics: true
            });
        });
    }(noConflictMode));
</script>

<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>
</body>
</html>
