<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Совет старейшин Республики Ингушетия</title>
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


    <style>

        /* Стили для модального окна */
        .modal-content {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .modal-content a {
            text-decoration: none;
            font-weight: 500;
        }

        .modal-content a:hover {
            text-decoration: underline;
        }

        /* Стили для стики-баннера */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 15px 0;
            z-index: 9999;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
            border-top: 3px solid #4a7dff;
        }

        .cookie-banner a {
            color: #ffd700;
            text-decoration: none;
        }

        .cookie-banner a:hover {
            text-decoration: underline;
            color: #fff;
        }

        .cookie-banner .btn-light {
            background-color: white;
            color: #1e3c72;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .cookie-banner .btn-light:hover {
            background-color: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
        }

        .cookie-banner .btn-outline-light {
            border-width: 2px;
            padding: 8px 20px;
            border-radius: 6px;
        }

        .cookie-banner .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .document-list {
            font-size: 18px;
        }
        .document-list {
            text-decoration: underline;
        }
    </style>
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
                                    <a class="nav-link" href="{{route('documents')}}">Документы</a>
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

{{--    <!-- instagram feed -->--}}
{{--    <div class="instagram">--}}
{{--        <div class="container-xl">--}}
{{--            <!-- button -->--}}
{{--            <a href="#" class="btn btn-default btn-instagram">Фотогалерея</a>--}}
{{--            <!-- images -->--}}
{{--            <div class="instagram-feed d-flex flex-wrap">--}}
{{--                <div class="insta-item col-sm-2 col-6 col-md-2">--}}
{{--                    <a href="#">--}}
{{--                        <img src="{{asset('images/insta/insta-1.jpg')}}" alt="insta-title"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="insta-item col-sm-2 col-6 col-md-2">--}}
{{--                    <a href="#">--}}
{{--                        <img src="images/insta/insta-2.jpg" alt="insta-title"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="insta-item col-sm-2 col-6 col-md-2">--}}
{{--                    <a href="#">--}}
{{--                        <img src="images/insta/insta-3.jpg" alt="insta-title"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="insta-item col-sm-2 col-6 col-md-2">--}}
{{--                    <a href="#">--}}
{{--                        <img src="images/insta/insta-4.jpg" alt="insta-title"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="insta-item col-sm-2 col-6 col-md-2">--}}
{{--                    <a href="#">--}}
{{--                        <img src="images/insta/insta-5.jpg" alt="insta-title"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="insta-item col-sm-2 col-6 col-md-2">--}}
{{--                    <a href="#">--}}
{{--                        <img src="images/insta/insta-6.jpg" alt="insta-title"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- footer -->
    <footer>
        <div class="container-xl">
            <div class="footer-inner">
                <div class="row d-flex align-items-center gy-4">
                    <!-- copyright text -->
                    <div class="col-md-4">
                        <span class="copyright">Разработчик: <a href="">Беслан Шамаев</a></span>
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

<div class="cookie-banner" id="cookieBanner" style="display: none;">
    <div class="container-xl">
        <div class="row align-items-center">
            <div class="col-md-9">
                <p class="mb-0">
                    <i class="fas fa-info-circle me-2"></i>
                    Этот сайт использует файлы cookie для улучшения работы. Продолжая использовать сайт, вы соглашаетесь с
                    <a href="#" class="text-white fw-bold">политикой конфиденциальности</a>.
                </p>
            </div>
            <div class="col-md-3 text-md-end mt-2 mt-md-0">
                <button class="btn btn-light btn-sm" id="acceptBannerBtn">Принять</button>
                <button class="btn btn-outline-light btn-sm ms-2">Подробнее</button>
            </div>
        </div>
    </div>
</div>

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
    </ul>
</div>


<!-- Модальное окно с предупреждением -->
<div class="modal fade" id="warningModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0" style="background-color: #051945; color: white;">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <i class="fas fa-exclamation-triangle me-2"></i>Важное уведомление
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Этот сайт использует файлы cookie и другие технологии для обеспечения корректной работы и улучшения вашего опыта использования. Продолжая использовать сайт, вы соглашаетесь с нашей <a href="#" class="text-warning">Политикой конфиденциальности</a>.</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-light" id="acceptModalBtn">Принять</button>
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Подробнее</button>
            </div>
        </div>
    </div>
</div>

<!-- JAVA SCRIPTS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>


<script>
    $(document).ready(function() {
        // Проверяем, принял ли пользователь уже уведомление
        if (!localStorage.getItem('cookieAccepted')) {
            // Показываем модальное окно через 1 секунду после загрузки
            setTimeout(function() {
                $('#warningModal').modal('show');
            }, 1000);

            // Или показываем баннер (раскомментируйте нужный вариант)
            // $('#cookieBanner').slideDown(300);
        }

        // Обработчик для кнопки "Принять" в модальном окне
        $('#acceptModalBtn').click(function() {
            localStorage.setItem('cookieAccepted', 'true');
            $('#warningModal').modal('hide');

            // Можно показать уведомление об успешном принятии
            alert('Спасибо! Настройки сохранены.');
        });

        // Обработчик для кнопки "Принять" в баннере
        $('#acceptBannerBtn').click(function() {
            localStorage.setItem('cookieAccepted', 'true');
            $('#cookieBanner').slideUp(300);

            // Можно показать небольшое уведомление
            const toast = document.createElement('div');
            toast.className = 'position-fixed bottom-0 end-0 p-3';
            toast.innerHTML = `
            <div class="toast show" role="alert">
                <div class="toast-header bg-success text-white">
                    <strong class="me-auto"><i class="fas fa-check-circle me-2"></i>Принято</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    Настройки сохранены. Спасибо!
                </div>
            </div>
        `;
            document.body.appendChild(toast);

            setTimeout(() => toast.remove(), 3000);
        });

        // Закрытие модального окна по нажатию на крестик
        $('.modal .btn-close').click(function() {
            // Можете добавить дополнительную логику при отказе
            console.log('Пользователь отказался от принятия');
        });
    });
</script>
</body>
</html>
