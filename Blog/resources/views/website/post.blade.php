@extends('website.layout.layout')
@section('meta_description')
        {{ strip_tags($post->content)}}
@endsection
@section('meta_keywords')
        الكلمات الدلالية
@endsection

@section('title')
{{$post->title}} - {{$setting->title}}
@endsection


@section('body')
 <!-- Breadcrumb Start -->
 <div class="container-fluid">
    <div class="container">
        <nav class="breadcrumb bg-transparent m-0 p-0">
            <a class="breadcrumb-item" href="#">{{__('words.Home')}}</a>
            <a class="breadcrumb-item" href="#">{{__('words.Category')}}</a>
            <a class="breadcrumb-item" href="#">{{$post->title}}</a>
        </nav>
    </div>
</div>
    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container-fluid py-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- News Detail Start -->
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="{{asset($post->image)}}" style="object-fit: cover;">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-3">
                                                <a href="">{{$post->category->title}}</a>
                                                <span class="px-1">/</span>
                                                <span>{{$post->created_at->format('M d,Y')}}</span>
                                            </div>
                                            <div>
                                                <h3 class="mb-3">{{$post->title}}</h3>
                                                <p>{!! $post->smallDesc !!}</p>
                                                <p>{!! $post->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- News Detail End -->
                                    <!-- Comment List Start -->
                                    <div class="bg-light mb-3" style="padding: 30px;">
                                        <h3 class="mb-4">{{__('words.Comments')}} : </h3>
                                        @foreach ($post->comments as $comment)
                                            <div class="media mb-4">
                                                <img src="{{asset('front/img/activity-03.png')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                                <div class="media-body">
                                                    <h6><a href="#">@if($comment->name == Null) User @else {{$comment->name}} @endif</a> <small><i>{{$comment->created_at->format('M d,Y')}}</i></small></h6>
                                                    <p>{{$comment->body}}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Comment List End -->
                                    <div class="bg-light mb-3" style="padding: 30px;">
                                        <h3 class="mb-4">{{__('words.Leave a Comment')}}</h3>
                                        @include('website.includes.success')
                                        @include('website.includes.errors')
                                        <form action="{{route('comment.store', $post->id)}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">{{__('words.Name')}}</label>
                                                <input type="text" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">{{__('words.Comment')}}<span class="text-danger">*</span></label>
                                                @error('comment')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <textarea id="message" name="comment" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="submit" value="{{__('words.Add Comment')}}"
                                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Comment Form End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3 mt-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            @if ($setting->facebook != '')
                                <a href="{{ $setting->facebook }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                    <small class="fab fa-facebook-f mr-2"></small><small>---- Fans</small>
                                </a>
                            @endif

                            @if ($setting->instagram != '')
                                <a href="{{ $setting->instagram }}" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                    <small class="fab fa-instagram mr-2"></small><small>---- Followers</small>
                                </a>
                            @endif
                        </div>
                    </div>
                    <!-- Social Follow End -->
                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        @foreach ($postshare as $posts)
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">{{$posts->title}}</a>
                        @endforeach
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- News With Sidebar End -->




@endsection
