@extends('layouts.app')

@section('content')
    <section class="main-content mt-3">
        <div class="container-xl">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">Новости</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
                </ol>
            </nav>

            <div class="row gy-4">

                <div class="col-lg-8">
                    <!-- post single -->
                    <div class="post post-single">
                        <!-- post header -->
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3">{{$post->title}}</h1>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">{{$post->category->name}}</a></li>
                                <li class="list-inline-item">{{$post->category->created_at}}</li>
                            </ul>
                        </div>
                        <!-- featured image -->
                        <div class="featured-image">
                            <img src="{{asset('storage/images/' . $post->image)}}" alt="post-title">
                        </div>
                        <!-- post content -->
                        <div class="post-content clearfix">
                            <p style="font-weight: bold; font-size: 18px;">{{$post->lead}}</p>


                            {!! $post->content !!}
                        </div>
                        <!-- post bottom section -->

                    </div>

                    <div class="spacer" data-height="50" style="height: 50px;"></div>
                </div>

                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">
                        <div class="inner-wrapper-sticky" style="position: relative;">

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

                            <!-- widget categories -->
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

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
