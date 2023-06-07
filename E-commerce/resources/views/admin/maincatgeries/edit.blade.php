@extends('layouts.masterAdmin')
@section('title', 'Create Language')
@section('content')
    <h1 class="p-relative"><i class="fa-solid fa-right-long mt-1"></i> Edit Categories</h1>
    <div class="container">
        <div class="alert alert-primary d-flex" role="alert">
            <a class="me-2 text-decoration-none text-dark fw-bold" href="{{ route('index-admin') }}">index</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <p class="ms-2 text-success m-0">Main Categories</p->
        </div>
    </div>
    <div class="container w-75 mb-5">
        <form class="row g-3" action="{{ route('admin.main_catgeries.update',$maincatgorie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input name="id" value="{{$maincatgorie->id}}" type="hidden">
            <div class="text-center">
                <img src="{{asset($maincatgorie->photo)}}" width="200px" height="200px">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" name="photo" id="formFile">
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @if(get_languages()->count() > 0)
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Categories Name : {{__('messages.'.$maincatgorie->translation_lang)}}</label>
                        <input type="text" class="form-control" value="{{ $maincatgorie->name }}" name="category[0][name]"  id="inputEmail4">
                        @error("category.0.name")
                        <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-6 visually-hidden">
                        <label for="inputPassword4" class="form-label">Language abbreviation : {{__('messages.'.$maincatgorie->translation_lang)}} </label>
                        <input type="text" class="form-control" name="category[0][abbr]" id="inputPassword4" value="{{$maincatgorie->translation_lang}}">
                        @error("category.0.abbr")
                        <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex">
                        <label class="form-check-label me-3" for="flexSwitchCheckChecked">active : {{__('messages.'.$maincatgorie->translation_lang)}} </label>
                        <div class="form-check form-switch ">
                            <input class="form-check-input" type="checkbox" role="switch" value="1" name="category[0][active]" id="flexSwitchCheckChecked" @if($maincatgorie->active == 1)checked @endif/>
                            @error("category.0.active")
                            <span class="text-danger">This field is required</span>
                            @enderror
                        </div>
                    </div>
            @endif
            <div class="col-12">
                <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        <!-- All languages -->
        <div class="tab mt-4">
            @isset($maincatgorie->categories)
                @foreach ($maincatgorie->categories as $index => $translation )
                    <button class="tablinks" onclick="openCity(event, 'tab{{$index}}')">{{$translation->translation_lang}}</button>
                @endforeach
            @endisset
        </div>
        @isset($maincatgorie->categories)
            @foreach ($maincatgorie->categories as $index => $translation )
                <div id="tab{{$index}}" class="tabcontent">
                    <form class="row g-3" action="{{ route('admin.main_catgeries.update',$translation->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="id" value="{{$maincatgorie->id}}" type="hidden">
                            @if(get_languages()->count() > 0)
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Categories Name : {{__('messages.'.$translation->translation_lang)}}</label>
                                        <input type="text" class="form-control" value="{{ $translation->name }}" name="category[0][name]"  id="inputEmail4">
                                        @error("category.0.name")
                                        <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 visually-hidden">
                                        <label for="inputPassword4" class="form-label">Language abbreviation : {{__('messages.'.$translation->translation_lang)}} </label>
                                        <input type="text" class="form-control" name="category[0][abbr]" id="inputPassword4" value="{{$translation->translation_lang}}">
                                        @error("category.0.abbr")
                                        <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 d-flex">
                                        <label class="form-check-label me-3" for="flexSwitchCheckChecked">active : {{__('messages.'.$translation->translation_lang)}} </label>
                                        <div class="form-check form-switch ">
                                            <input class="form-check-input" type="checkbox" role="switch" value="1" name="category[0][active]" id="flexSwitchCheckChecked" @if($translation->active == 1)checked @endif/>
                                            @error("category.0.active")
                                            <span class="text-danger">This field is required</span>
                                            @enderror
                                        </div>
                                    </div>
                            @endif
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            @endforeach
        @endisset
    </div>
    </div>
@endsection
