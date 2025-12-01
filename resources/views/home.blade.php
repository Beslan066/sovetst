@extends('layouts.app')

@section('content')

    @if(isset($mainPosts))
        <section class="hero-carousel">
            <div class="container-xl">
                <div class="post-carousel-lg">
                    <!-- post -->
                    @foreach($mainPosts as $mainPost)
                        <div class="post featured-post-xl">
                            <div class="details clearfix">

                                <h4 class="post-title"><a href="{{route('newsSingle', $mainPost->id)}}">{{$mainPost->title}}</a></h4>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item"><a class="category-badge lg">{{$mainPost->category->name}}</a></li>
                                    <li class="list-inline-item">{{$mainPost->created_at}}</li>
                                </ul>
                            </div>
                            <a href="{{route('newsSingle', $mainPost->id)}}">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="{{asset('storage/images/' . $mainPost->image)}}"></div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- section main content -->
    <section class="main-content">
        <div class="container-xl">

            <div class="row gy-4">


                <div class="col-lg-8">

                    @if(isset($posts))
                        @foreach($posts as $post)
                            <!-- post -->
                            <div class="post post-classic rounded bordered">
                                <div class="thumb top-rounded">
                                    <a class="category-badge lg position-absolute">{{$post->category->name}}</a>
                                    @if(isset($post->video))
                                        <span class="post-format">
								<i class="icon-camrecorder"></i>
							</span>
                                    @endif
                                    <a href="{{route('newsSingle', $post->id)}}">
                                        <div class="inner">
                                            <img src="{{asset('storage/images/' . $post->image)}}" alt="post-title" />
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">{{$post->created_at}}</li>
                                        <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3"><a href="{{route('newsSingle', $post->id)}}">{{$post->title}}</a></h5>
                                    <p class="excerpt mb-0">{{$post->lead}}</p>
                                </div>
                                <div class="post-bottom clearfix d-flex align-items-center">
                                    <div class="social-share me-auto">
                                        <button class="toggle-button icon-share"></button>
                                        <ul class="icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-vk"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fas fa-link"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="float-end d-none d-md-block">
                                        <a href="{{route('newsSingle', $post->id)}}" class="more-link">Читать дальше<i class="icon-arrow-right"></i></a>
                                    </div>
                                    <div class="more-button d-block d-md-none float-end">
                                        <a href="{{route('newsSingle', $post->id)}}"><span class="icon-options"></span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>

                </div>

                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- widget about -->
                        <div class="widget rounded">
                            <div class="widget-about data-bg-image text-center" >
                                <p class="mb-4">Совет старейшин в Ингушетии — это общественная организация,
                                    созданная для решения социально значимых вопросов, укрепления традиционных ценностей
                                    и взаимодействия с органами власти. Он представляет собой консультативный орган,
                                    который предлагает инициативы и рекомендации, а также участвует в профилактике таких
                                    проблем, как наркомания, и помогает решать бытовые конфликты.
                                </p>
                                {{--                                <ul class="social-icons list-unstyled list-inline mb-0">--}}
                                {{--                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
                                {{--                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                {{--                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
                                {{--                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>--}}
                                {{--                                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>--}}
                                {{--                                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>--}}
                                {{--                                </ul>--}}
                            </div>
                        </div>

                        <!-- widget popular posts -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Популярное</h3>
                            </div>
                            <div class="widget-content">
                                <!-- post -->

                                @if(isset($popularPosts))
                                    @foreach($popularPosts as $post)
                                        <div class="post post-list-sm circle">
                                            <div class="details clearfix">
                                                <h6 class="post-title my-0"><a href="{{route('newsSingle', $post->id)}}">{{$post->title}}</a></h6>
                                                <ul class="meta list-inline mt-1 mb-0">
                                                    <li class="list-inline-item">{{$post->created_at}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <!-- widget categories -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Категории</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    @if(isset($categories))
                                        @foreach($categories as $category)
                                            <li><a href="#">{{$category->name}}</a><span>{{$category->posts->count()}}</span></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>

                        </div>

{{--                        <!-- widget newsletter -->--}}
{{--                        <div class="widget rounded">--}}
{{--                            <div class="widget-header text-center">--}}
{{--                                <h3 class="widget-title">Newsletter</h3>--}}
{{--                                <img src="images/wave.svg" class="wave" alt="wave" />--}}
{{--                            </div>--}}
{{--                            <div class="widget-content">--}}
{{--                                <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>--}}
{{--                                <form>--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <input class="form-control w-100 text-center" placeholder="Email address…" type="email">--}}
{{--                                    </div>--}}
{{--                                    <button class="btn btn-default btn-full" type="submit">Sign Up</button>--}}
{{--                                </form>--}}
{{--                                <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <!-- widget post carousel -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">События</h3>
                            </div>
                            <div class="widget-content">
                                <div class="post-carousel-widget">
                                    <!-- post -->
                                    <div class="post post-carousel">
                                        <div class="thumb rounded">
                                            <a href="category.html" class="category-badge position-absolute"></a>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <h5 class="post-title mb-0 mt-4"><a>Скоро...</a></h5>

                                    </div>
                                </div>
                                <!-- carousel arrows -->
                                <div class="slick-arrows-bot">
                                    <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                    <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- widget advertisement -->
{{--                        <div class="widget no-container rounded text-md-center">--}}
{{--                            <span class="ads-title">- Sponsored Ad -</span>--}}
{{--                            <a href="#" class="widget-ads">--}}
{{--                                <img src="images/ads/ad-360.png" alt="Advertisement" />--}}
{{--                            </a>--}}
{{--                        </div>--}}

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
