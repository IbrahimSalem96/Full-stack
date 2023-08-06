@extends('website.layout.layout')
@section('title', 'index')
 @section('body')
    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                @foreach ($lastFivePosts as $posts)
                    <div class="d-flex">
                        <img src="{{asset($posts->image)}}" style="width: 80px; height: 80px; object-fit: cover;">
                        <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="{{Route('post',$posts->id)}}">{{$posts->title}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->
    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        @foreach ($lastFivePosts as $postslider)
                            <div class="position-relative overflow-hidden" style="height: 435px;">
                                <img class="img-fluid w-100 h-100" src="{{asset($postslider->image)}}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-1">
                                        <a class="text-white" href="{{Route('category',$postslider->category->id)}}">{{$postslider->category->title}}</a>
                                        <span class="px-2 text-white">/</span>
                                        <a class="text-white" href="">{{$postslider->created_at->format('Y-m-d')}}</a>
                                    </div>
                                    <a class="h2 m-0 text-white font-weight-bold" href="{{Route('post',$postslider->id)}}">{{$postslider->title}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4  ">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">{{ __('words.categories') }}</h3>
                    </div>
                    <div class="scrollbar">
                        @foreach ($categories as $Category)

                                <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                                    <img class="img-fluid w-100 h-100" src="{{$Category->image}}" style="object-fit: cover;">
                                    <a href="{{Route('category',$Category->id)}}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                                        {{$Category->title}}
                                    </a>
                                </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->
    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach ($categories_with_posts as $category)
                    @if (count($category->posts)>0)
                        <div class="col-lg-6 py-3">
                            <div class="bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">{{$category->title}}</h3>
                            </div>
                            <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                                @foreach ($category->posts as $postsshow)
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset($postsshow->image)}}" style="object-fit: cover; height: 150px;">
                                    <div class="overlay position-relative bg-light">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="{{Route('category',$category->id)}}">{{$category->title}}</a>
                                            <span class="px-1">/</span>
                                            <span>{{$postsshow->created_at->format('Y, M-d')}}</span>
                                        </div>
                                        <a class="h4 m-0" href="{{Route('post',$postsshow->id)}}">{{$postsshow->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->
@endsection
