@extends('layouts.masterAdmin')
@section('title', 'Create SubCategory')
@section('content')
    <h1 class="p-relative"><i class="fa-solid fa-right-long mt-1"></i>Create SubCategory</h1>
    <div class="container">
        <div class="alert alert-primary d-flex" role="alert">
            <a class="me-2 text-decoration-none text-dark fw-bold" href="{{ route('index-admin') }}">index</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <p class="ms-2 text-success m-0">SubCategory</p>
        </div>
    </div>
    <div class="container w-75">
        <form class="row g-3" action="{{ route('admin.SubCategory.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" name="photo" id="formFile">
                @error('photo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputState" class="form-label">Section</label>
                <select id="inputState" class="form-select" name="parent_id">
                    @if($categories && $categories->count() > 0)
                        @foreach($categories as $category)
                            <option
                                value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    @endif
                </select>
                @error('parent_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            @if(get_languages()->count() > 0)
                @foreach ( get_languages() as $index => $lang )
                    <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Categories Name : {{__('messages.'.$lang->abbr)}}</label>
                            <input type="text" class="form-control" name="category[{{$index}}][name]"  id="inputEmail4">
                        @error("category.$index.name")
                        <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-6 visually-hidden">
                            <label for="inputPassword4" class="form-label">Language abbreviation : {{__('messages.'.$lang->abbr)}} </label>
                            <input type="text" class="form-control" name="category[{{$index}}][abbr]" id="inputPassword4" value="{{$lang->abbr}}">
                        @error("category.$index.abbr")
                        <span class="text-danger">This field is required</span>
                        @enderror
                    </div>
                    <div class="col-md-12 d-flex">
                        <label class="form-check-label me-3" for="flexSwitchCheckChecked">active : {{__('messages.'.$lang->abbr)}} </label>
                        <div class="form-check form-switch ">
                            <input class="form-check-input" type="checkbox" role="switch" value="1" name="category[{{$index}}][active]" id="flexSwitchCheckChecked" checked>
                            @error("category.$index.active")
                            <span class="text-danger">This field is required</span>
                            @enderror
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-12">
                <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
