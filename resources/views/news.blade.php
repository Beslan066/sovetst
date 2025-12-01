@extends('layouts.app')

@section('content')
    <section class="main-content">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">

                    <div class="row gy-4">
                        @if(isset($posts))
                            @foreach($posts as $post)
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-grid rounded bordered">
                                        <div class="thumb top-rounded">
                                            <a class="category-badge position-absolute">{{$post->category->name}}</a>
                                            <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                            <a href="{{route('newsSingle', $post->id)}}">
                                                <div class="inner">
                                                    <img src="{{'storage/images/' . $post->image}}" alt="post-title">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-0">
                                                <li class="list-inline-item">{{$post->created_at}}</li>
                                            </ul>
                                            <h5 class="post-title mb-3 mt-3"><a href="{{route('newsSingle', $post->id)}}">{{$post->title}}</a></h5>
                                            <p class="excerpt mb-0">{{$post->lead}}</p>
                                        </div>
                                        <div class="post-bottom clearfix d-flex align-items-center">
                                            <div class="social-share me-auto">
                                            </div>
                                            <div class="more-button float-end">
                                                <a href="{{route('newsSingle', $post->id)}}">Читать дальше</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>

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
                    <div class="sidebar"><div class="inner-wrapper-sticky">
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
                                                    <h6 class="post-title my-0"><a
                                                            href="{{route('newsSingle', $post->id)}}">{{$post->title}}</a>
                                                    </h6>
                                                    <ul class="meta list-inline mt-1 mb-0">
                                                        <li class="list-inline-item">{{$post->created_at}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>

                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Категории</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                <li>
                                                    <a href="#">{{$category->name}}</a><span>{{$category->posts->count()}}</span>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                            </div>

                        </div></div>

                </div>

            </div>

        </div>
    </section>
@endsection
