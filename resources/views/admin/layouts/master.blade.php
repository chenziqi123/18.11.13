<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset ('org/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset ('org/assets')}}/libs/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset ('org/assets')}}/css/theme.min.css">

    <title>孙悟空</title>
</head>
<body>




<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
            <img src="{{asset ('org/image/5.jpg')}}" style="width: 80px;height: 50px" class="navbar-brand-img
          mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{asset ('org/image/000000.JPG')}}" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{route ('admin.index')}}">
                        <i class="fe fe-home"></i> 大话西游
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-file"></i> 文章系统
                    </a>
                    <div class="collapse " id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route ('admin.category.index')}}" class="nav-link ">
                                    添加文章
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link ">
                                    Pricing <span class="badge badge-soft-success ml-auto">New</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="fe fe-user"></i> Authentication
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                                    Error
                                </a>
                                <div class="collapse" id="sidebarError">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="error-illustration.html" class="nav-link">
                                                Illustration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="error.html" class="nav-link">
                                                Basic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">

            <!-- Heading -->
            <h6 class="navbar-heading text-muted">
                Documentation
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link " href="getting-started.html">
                        <i class="fe fe-clipboard"></i> Getting started
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                        <i class="fe fe-book-open"></i> Components
                    </a>
                    <div class="collapse " id="sidebarComponents">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="components.html#utilities" class="nav-link">
                                    Utilities
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="changelog.html">
                        <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.1.2</span>
                    </a>
                </li>
            </ul>



            <!-- User (md) -->
            <div class="navbar-user mt-auto d-none d-md-flex">

                <!-- Icon -->
                <a href="#sidebarModalActivity" class="text-muted" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-bell"></i>
              </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="{{asset ('org/image/1.JPG')}}" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="settings.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="{{route ('home')}}" class="dropdown-item">返回用户页面</a>
                    </div>

                </div>

                <!-- Icon -->
                <a href="#sidebarModalSearch" class="text-muted" data-toggle="modal">
              <span class="icon">
                <i class="fe fe-search"></i>
              </span>
                </a>

            </div>


        </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container-fluid -->
</nav>

<div class="main-content">
    @yield('content')
</div>

</body>
</html>
@include('layouts.hdjs')
@include('layouts.message')
<script>
    require(['bootstrap'])
</script>
@stack('js')