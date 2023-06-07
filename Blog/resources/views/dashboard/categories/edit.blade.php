@extends('dashboard.layout.layout')
@section('title', 'Edit Category')
@section('body')
<div class="border border-light ">
    <div class="alert alert-secondary" role="alert">
        {{__('words.Edit Category')}} : {{$category->title}}
    </div>
    <form action="{{route('dashboard.category.update', $category) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
            <input type="file" class="form-control" name="image"  placeholder="{{__('words.image')}}" aria-label="image">
        </div>
        <div class="pb-2 d-flex justify-content-center">
            <img src="{{asset($category->image)}}">
        </div>
        <div class="pb-2">
            <select name="parent" id="" class="form-control">
                <option value="0"  @if ($category->parent == 0 || $category->parent == null) selected @endif>{{__('words.main section')}}</option>
                    @foreach ($categories as $item)
                        @if ($item->id != $category->id)
                            <option @if ($category->parent ==  $item->id) selected @endif value="{{$item->id}}">{{$item->title}}</option>
                        @endif
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
                    <input type="text" name="{{$key}}[title]" class="form-control" placeholder="{{ __('words.title') }}" value="{{$category->translate($key)->title}}">
                </div>
                <div class="col">
                    <label for="inputcontent" class="form-label">{{__('words.content')}} : {{$lang}}</label>
                    <textarea name="{{$key}}[content]" class="form-control" cols="30" rows="10">{{$category->translate($key)->content}}</textarea>
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
