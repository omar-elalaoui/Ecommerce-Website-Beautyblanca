<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Gestion Sock</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/stylesheets/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/stylesheets/skins/default.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/stylesheets/theme-custom.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css" />


    <link rel="stylesheet" href="{{ asset('/assets/vendor/summernote/summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendor/summernote/summernote-bs3.css') }}" />
    <script src="{{ asset('/assets/vendor/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/summernote/summernote.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('assets/javascripts/theme.custom.js') }}"></script>
</head>
<style>
    .new_pp{ background: rgba(120, 224, 143,.4) !important; }
    .old_pp{ background: rgba(225, 112, 85, .4) !important; }
</style>

<body>

<section class="body">

    <!-- start: header -->

    <header class="header">
        <div class="logo-container">
            <a href="../" class="logo">
                <img src="/assets/images/logo.png" height="35" alt="Porto Admin" />
            </a>
            <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <span class="separator"></span>
            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">Omar El Alaoui</span>
                        <span class="role">administrator</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    Menu
                </div>

                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-main">
                            <li class="{{ (request()->is('admin')) ? 'nav-active' : '' }}">
                                <a href="{{url('/admin')}}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Accueil</span>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/produits*') ? 'nav-active' : '' }}">
                                <a href="{{url('/admin/produits')}}">
                                    <i class="fas fa-users"></i>
                                    <span>Produits</span>
                                </a>
                            </li>
                            <li class="{{ (request()->is('admin/orders*')) ? 'nav-active' : '' }}">
                                <a href="{{url('/admin/orders')}}">
                                    <i class="fas fa-user-friends"></i>
                                    <span>Commandes</span>
                                </a>
                            </li>

                        </ul>
                    </nav>

                    <hr class="separator" />
                </div>

            </div>

        </aside>
        <!-- end: sidebar -->

        <section role="main" class="content-body">

            <!-- start: page -->

            @yield('content')

            <!-- end: page -->
        </section>
    </div>

</section>

<!-- Vendor -->



<script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/javascripts/theme.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/javascripts/theme.init.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<script type="text/javascript" src="{{ URL::asset('assets/javascripts/tables/examples.datatables.default.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js') }}"></script>





</body>

</html>
