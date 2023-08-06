@extends('dashboard.layout.layout')
@section('title', 'Setting')
@section('body')
<div class="container">

    <div class="alert alert-dark" role="alert">
        <p class="m-0">{{__('words.setting')}}</p>
    </div>
    @include('dashboard.includes.success')
    @include('dashboard.includes.errors')
    <form action="{{route('dashboard.setting.update', $setting)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row mb-4">
            <div class="col">
                <label for="inputlogo" class="form-label">{{__('words.logo')}}</label>
                <img src="{{asset($setting->logo)}}" width="100px" height="100px">
            </div>
            <div class="col">
                <label for="inputfavicon" class="form-label">{{__('words.favicon')}}</label>
                <img src="{{asset($setting->favicon)}}" width="100px" height="100px">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="inputlogo" class="form-label">{{__('words.logo')}}</label>
                <input type="file" class="form-control" name="logo" placeholder="{{__('words.logo')}}" aria-label="logo">
                @error('logo')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="inputfavicon" class="form-label">{{__('words.favicon')}}</label>
                <input type="file" class="form-control" name="favicon" placeholder="{{__('words.favicon')}}" aria-label="favicon">
                @error('favicon')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="inputfacebook" class="form-label">{{__('words.facebook')}}</label>
                <input type="text" class="form-control" name="facebook" placeholder="{{__('words.facebook')}}" value="{{$setting->facebook}}" aria-label="facebook">
            </div>
            <div class="col">
                <label for="inputinstagram" class="form-label">{{__('words.instagram')}}</label>
                <input type="text" class="form-control" name="instagram" placeholder="{{__('words.instagram')}}" value="{{$setting->instagram}}" aria-label="instagram">
                @error('instagram')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="inputphone" class="form-label">{{__('words.phone')}}</label>
                <input type="text" class="form-control" name="phone" placeholder="{{__('words.phone')}}"   aria-label="phone">
                @error('phone')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="inputemail" class="form-label">{{__('words.email')}}</label>
                <input type="email" class="form-control" name="email" placeholder="{{__('words.email')}}"   aria-label="email">
                @error('email')
                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
            </div>
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
                    <input type="text" class="form-control" name="{{$key}}[title]" placeholder="{{__('words.title')}}" value="{{$setting->translate($key)->title}}" aria-label="title">
                    @error('title')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="inputcontent" class="form-label">{{__('words.content')}} : {{$lang}}</label>
                    <textarea class="form-control" name="{{$key}}[content]" placeholder="{{__('words.content')}}" aria-label="content">{{$setting->translate($key)->content}}</textarea>
                    @error('content')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col">
                    <label for="inputaddress" class="form-label">{{__('words.address')}} : {{$lang}} </label>
                    <input type="text" class="form-control" name="{{$key}}[address]" placeholder="{{__('words.address')}}" value="{{$setting->translate($key)->address}}" aria-label="address">
                    @error('address')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        @endforeach
        <div class="mt-3">
            <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>


@endsection
