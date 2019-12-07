<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fastsaver - Admin Dashboard</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ asset('../css/shards-dashboards.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/extras.1.1.0.min.css') }}">
{{--    <script async defer src="https://buttons.github.io/buttons.js"></script>--}}
</head>
<body class="h-100">

{{--<div class="color-switcher-toggle animated pulse infinite">--}}
{{--    <i class="material-icons">settings</i>--}}
{{--</div>--}}
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <div class="main-navbar">
                <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                    <a class="navbar-brand w-100 mr-0" href="/admin" style="line-height: 25px;">
                        <div class="d-table m-auto">
                            <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{asset('images/shards-dashboards-logo.svg')}}" alt="Dashboard">
                            <span class="d-none d-md-inline ml-1">Admin Dashboard</span>
                        </div>
                    </a>
                    <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                </nav>
            </div>

            <div class="nav-wrapper">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is( 'admin') ? 'active'  : '' }}" href="/admin">
                            <i class="material-icons">edit</i>
                            <span>Admin Dashboard</span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="components-blog-posts.html">--}}
{{--                            <i class="material-icons">vertical_split</i>--}}
{{--                            <span>Blog Posts</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="add-new-post.html">--}}
{{--                            <i class="material-icons">note_add</i>--}}
{{--                            <span>Add New Post</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="form-components.html">--}}
{{--                            <i class="material-icons">view_module</i>--}}
{{--                            <span>Forms &amp; Components</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is( 'admin/fixedplan') ? 'active'  : '' }}" href="/admin/fixedplan">
                            <i class="material-icons">table_chart</i>
                            <span>Fixed Plans</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is( 'admin/users') ? 'active'  : '' }}" href="/admin/users">
                            <i class="material-icons">person</i>
                            <span>Users</span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link " href="errors.html">--}}
{{--                            <i class="material-icons">error</i>--}}
{{--                            <span>Errors</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <!-- Main Navbar -->
                <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                    <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">

                    </form>
                    <ul class="navbar-nav border-left flex-row ">
                        <li class="nav-item border-right dropdown notifications">
                            <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="nav-link-icon__wrapper">
                                    <i class="material-icons">&#xE7F4;</i>
                                    <span class="badge badge-pill badge-danger">2</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">&#xE6E1;</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Analytics</span>
                                        <p>Your website’s active users count increased by
                                            <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="notification__icon-wrapper">
                                        <div class="notification__icon">
                                            <i class="material-icons">&#xE8D1;</i>
                                        </div>
                                    </div>
                                    <div class="notification__content">
                                        <span class="notification__category">Sales</span>
                                        <p>Last week your store’s sales count decreased by
                                            <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                                    </div>
                                </a>
                                <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle mr-2" src="{{asset('images/avatars/0.jpg')}}" alt="User Avatar">
                                <span class="d-none d-md-inline-block">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-small">
                                <a class="dropdown-item" href="/admin/users/edit/{{Auth::user()->id}}">
                                    <i class="material-icons">&#xE7FD;</i> Edit Profile</a>
                                <a class="dropdown-item" href="/admin/fixedplan">
                                    <i class="material-icons">vertical_split</i> My Plans</a>
                                <a class="dropdown-item" href="/admin/fixedplan/create">
                                    <i class="material-icons">note_add</i> Create New Plan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">
                                    <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                            </div>
                        </li>
                    </ul>
                    <nav class="nav">
                        <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                            <i class="material-icons">&#xE5D2;</i>
                        </a>
                    </nav>
                </nav>
            </div>
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 text-center text-sm-left mb-0" style="display: block;">
                        {{--                        <span class="text-uppercase page-subtitle">Dashboard</span>--}}
                        @yield('title')

                    </div>
                </div>
                <div class="row">
                    @yield('content')
                </div>
                <!-- End Page Header -->
                <!-- Small Stats Blocks -->
                            @yield('stats')
                                <!-- End Small Stats Blocks -->

            </div>

        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="../js/extras.1.1.0.min.js"></script>
<script src="../js/shards-dashboards.1.1.0.min.js"></script>
<script src="../js/app/app-blog-overview.1.1.0.js"></script>
</body>
</html>