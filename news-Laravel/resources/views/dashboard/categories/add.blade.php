@extends('dashboard.layout.layout')
@section('title', 'Add Category')
@section('body')
<div class="border border-light ">
    <div class="alert alert-secondary" role="alert">
        {{__('words.Add Category')}}
    </div>
    <form action="{{route('dashboard.category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="pb-2">
            <input type="file" name="image" class="form-control" placeholder="{{__('words.image')}}" aria-label="Name">
        </div>
        <div class="pb-2">
            <select name="parent" class="form-control">
                <option value="0">{{__('words.main section')}}</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach

            </select>
        </div>

        <div class="tab">
            @foreach (config('app.languages') as $key => $lang)
            <button type="button" class="tablinks" onclick="openCity(event, '{{ $key }}')">{{ $lang }}</button>
            @endforeach
        </div>
        @foreach (config('app.languages') as $key => $lang)
            <div id="{{$key}}" class="tabcontent mb-5">
                <div class="col">
                    <label for="inputtitle" class="form-label">{{__('words.title')}} : {{$lang}}</label>
                    <input type="text" class="form-control" name="{{$key}}[title]" placeholder="{{__('words.title')}}" value="" aria-label="title">
                    @error('title')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="inputcontent" class="form-label">{{__('words.content')}} : {{$lang}}</label>
                    <textarea class="form-control" name="{{$key}}[content]" placeholder="{{__('words.content')}}" aria-label="content"> </textarea>
                    @error('content')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        @endforeach


        <div class="mt-3">
            <button type="button" class="btn btn-primary" onclick="history.back();">{{__('words.Back')}}</button>
            <button type="submit" class="btn btn-primary">{{__('words.Save')}}</button>
        </div>
    </form>
</div>
@endsection
