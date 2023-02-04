@section("header")


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{url('/')}}/dashboard/assets/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/style.min.css">
    <link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/font.css">
    @yield('extracss')
    <link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/style.css">

    <style>
        
    </style>


  

    <title>Document</title>
</head>
<body class="rtl">
<div class="loader" id="loader">
    <img src="{{url('/')}}/dashboard/assets/images/sambal.png" alt="sambal">
</div>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top text-white" id="main-navbar">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler"
                    data-mdb-target="#sidebarMenu" data-mdb-toggle="collapse" type="button">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand text-white" href="#">
                بالاهنگ
                <!-- <img alt="" height="25" loading="lazy"
                src="{{url('/')}}/dashboard/img/final-home-graphic-last.png"/> -->
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" class="form-control rounded"
                       placeholder='Search (ctrl + "/" to focus)'
                       style="min-width: 225px" type="search"/>
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                    <a aria-expanded="false" class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                       data-mdb-toggle="dropdown"
                       href="#" id="navbarDropdownMenuLinks" role="button">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Something else</a>
                        </li>
                    </ul>
                </li>

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#">
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>
                <!-- Icon -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>

                <!-- Icon dropdown -->
                <li class="nav-item dropdown">
                    <a aria-expanded="false" class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                       data-mdb-toggle="dropdown"
                       href="#"
                       id="navbarDropdown" role="button">
                        <i class="united kingdom flag m-0"></i>
                    </a>
                    <ul aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                                <i class="fa fa-check text-success ms-2"></i></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider"/>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
                        </li>
                    </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a aria-expanded="false"
                       class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                       data-mdb-toggle="dropdown" href="#" id="navbarDropdownMenuLink"
                       role="button">
                        <img alt=""
                             class="rounded-circle" height="22"
                             loading="lazy" src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"/>
                    </a>
                    <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- Sidebar -->

    <!-- Navbar -->

    <!-- Navbar -->
</header>
@show