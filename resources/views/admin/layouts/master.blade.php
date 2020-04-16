<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IOvita</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/admin.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper" id="iovita">
        <header class="main-header">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span class="logo-mini">IOv</span>
                <span class="logo-lg"><b>IO</b>vita</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/images/user.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ Auth::guard('admin')->User()->display_name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="/images/user.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        {{ Auth::guard('admin')->User()->display_name }}
                                        @if(Auth::guard('admin')->User()->created_at != null)
                                            <small>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Auth::guard('admin')->User()->created_at)->format('d-m-Y') }}</small>
                                        @endif
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj</a>
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU</li>
                    <li{{ str_contains(Route::currentRouteName(), 'admin.dashboard') ? ' class=active' : '' }}>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Pulpit</span>
                        </a>
                    </li>
                    <li class="treeview{{ str_contains(Route::currentRouteName(), 'admin.post.') ? ' active' : '' }}">
                        <a href="#">
                            <i class="fa fa-file-text-o"></i>
                            <span>Wpisy</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li{{ str_contains(Route::currentRouteName(), 'admin.post.index') ? ' class=active' : '' }}><a href="{{ route('admin.post.index') }}"><i class="fa fa-angle-double-right"></i> Wszystkie wpisy</a></li>
                            <li{{ str_contains(Route::currentRouteName(), 'admin.post.create') ? ' class=active' : '' }}><a href="{{ route('admin.post.create') }}"><i class="fa fa-angle-double-right"></i> Nowy wpis</a></li>
                            <li{{ str_contains(Route::currentRouteName(), 'admin.post.create') ? ' class=active' : '' }}><a href="{{ route('admin.post.create') }}"><i class="fa fa-angle-double-right"></i> Kategorie</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 0.0.1
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="https://zencore.pl" target="_blank">Zencore Creative Agency</a>
        </footer>
    </div>
    <script src="/js/admin.js"></script>
    @yield('scripts')
</body>
</html>