<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- site wrapper -->
<div class="site-wrapper">

    <div class="main-overlay"></div>

    <!-- header -->
    <header class="header-classic">

        <div class="container-xl">
            <!-- header top -->
            <div class="header-top">
                <div>

                    <a class="navbar-brand align-items-center" href="{{route('home')}}">
                        <div class="col-md-4 col-xs-12 d-flex align-items-center">
                            <!-- site logo -->


                            <img src="{{asset('images/logoof.png')}}" alt=""
                                 style="width: 60px; height: 60px; margin-right: 10px;">
                            <div>
                                Совет старейшин <br>
                                <span>Республики Ингушетия</span>
                            </div>


                        </div>
                    </a>

                    <div class=" d-none d-md-block">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0 float-end">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram"></i></a></li>
                            <li class="list-inline-item" style="margin-top: 0">
                                <a href="#">
                                    <svg width="16" height="18" viewBox="0 0 169 169" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_45_484)">
                                            <path
                                                d="M84.0337 168.01H84.7036C118.068 168.01 137.434 164.651 151.152 151.333C165.139 137.206 168.369 117.709 168.369 84.4749V83.5351C168.369 50.311 165.139 30.9445 151.152 16.677C137.444 3.3594 117.938 0 84.7136 0H84.0437C50.6797 0 31.3031 3.3594 17.5856 16.677C3.59808 30.8045 0.368652 50.311 0.368652 83.5351V84.4749C0.368652 117.699 3.59808 137.066 17.5856 151.333C31.1732 164.651 50.6797 168.01 84.0337 168.01Z"
                                                fill="#051945"/>
                                            <path
                                                d="M148.369 82.7304C148.369 82.0906 147.849 81.5608 147.209 81.5308C124.246 80.661 110.271 77.732 100.494 67.955C90.6967 58.1581 87.7776 44.1724 86.9079 21.1596C86.8879 20.5198 86.358 20 85.7082 20H83.0291C82.3893 20 81.8594 20.5198 81.8295 21.1596C80.9597 44.1624 78.0406 58.1581 68.2437 67.955C58.4568 77.742 44.4911 80.661 21.5283 81.5308C20.8885 81.5508 20.3687 82.0806 20.3687 82.7304V85.4096C20.3687 86.0494 20.8885 86.5792 21.5283 86.6092C44.4911 87.4789 58.4667 90.408 68.2437 100.185C78.0206 109.962 80.9397 123.908 81.8195 146.83C81.8394 147.47 82.3693 147.99 83.0191 147.99H85.7082C86.348 147.99 86.8779 147.47 86.9079 146.83C87.7876 123.908 90.7067 109.962 100.484 100.185C110.271 90.398 124.236 87.4789 147.199 86.6092C147.839 86.5892 148.359 86.0594 148.359 85.4096V82.7304H148.369Z"
                                                fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_45_484">
                                                <rect width="168.04" height="168.04" fill="white"
                                                      transform="translate(0.368652)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <!-- header bottom -->
            <div class="header-bottom  w-100">

                <div class="container-xl">
                    <div class="d-flex align-items-center">
                        <div class="collapse navbar-collapse flex-grow-1">
                            <!-- menus -->
                            <ul class="navbar-nav top-nav">
                                <li class="nav-item dropdown active">
                                    <a class="nav-link" href="{{route('home')}}">Главная</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('news')}}">Новости</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle">Состав</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('team')}}">Состав Совета
                                                старейшин</a></li>
                                        <li><a class="dropdown-item" href="{{route('presidiumTeam')}}">Состав Президиума
                                                Совета старейшин</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset('documents')}}">Документы</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">О нас</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                                </li>
                            </ul>
                        </div>

                        <!-- header buttons -->
                        <div class="header-buttons">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button ms-2 float-end float-lg-none">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </nav>

    </header>

    @yield('content')

    <!-- instagram feed -->
    <div class="instagram">
        <div class="container-xl">
            <!-- button -->
            <a href="#" class="btn btn-default btn-instagram">Фотогалерея</a>
            <!-- images -->
            <div class="instagram-feed d-flex flex-wrap">
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="{{asset('images/insta/insta-1.jpg')}}" alt="insta-title"/>
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-2.jpg" alt="insta-title"/>
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-3.jpg" alt="insta-title"/>
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-4.jpg" alt="insta-title"/>
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-5.jpg" alt="insta-title"/>
                    </a>
                </div>
                <div class="insta-item col-sm-2 col-6 col-md-2">
                    <a href="#">
                        <img src="images/insta/insta-6.jpg" alt="insta-title"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container-xl">
            <div class="footer-inner">
                <div class="row d-flex align-items-center gy-4">
                    <!-- copyright text -->
                    <div class="col-md-4">
                        <span class="copyright">Разработчик: <a href="">Беслан Шамаев</a></span>
                    </div>

                    <!-- social icons -->
                    <div class="col-md-4 text-center">
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <!-- go to top button -->
                    <div class="col-md-4">
                        <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Наверх</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>
    <!-- content -->
    <div class="search-content">
        <div class="text-center">
            <h3 class="mb-4 mt-0">Нажмите ESC или на иконку X для закрытия</h3>
        </div>
        <!-- form -->
        <form class="d-flex search-form">
            <input class="form-control me-2" type="search" placeholder="Введите для поиска..." aria-label="Поиск">
            <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
        </form>
    </div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>

    <!-- logo -->
    <div class="logo">
        <h2 class="title">Совет старейшин Республики Ингушетия</h2>
    </div>

    <!-- menu -->
    <nav>
        <ul class="vertical-menu">
            <li class="active"><a href="{{route('home')}}">Главная</a></li>
            <li><a href="{{route('home')}}">Новости</a></li>
            <li><a href="{{route('team')}}">Состав</a></li>
            <li><a href="{{route('presidiumTeam')}}">Состав Президиума</a></li>
            <li><a href="{{route('documents')}}">Документы</a></li>
            <li><a href="{{route('about')}}">О нас</a></li>
            <li><a href="{{route('contact')}}">Контакты</a></li>
        </ul>
    </nav>

    <!-- social icons -->
    <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
        <li class="list-inline-item"><a href="#"><i class="fab fa-telegram"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-vk"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
    </ul>
</div>

<!-- JAVA SCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
