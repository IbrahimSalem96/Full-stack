@extends('layouts.masterAdmin')
@section('title', 'Edit vendor')
@section('content')
    <h1 class="p-relative"><i class="fa-solid fa-right-long mt-1"></i> Edit vendor</h1>
    <div class="container">
        <div class="alert alert-primary d-flex" role="alert">
            <a class="me-2 text-decoration-none text-dark fw-bold" href="{{ route('index-admin') }}">index</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <a class="me-2 ms-2 text-decoration-none text-dark fw-bold" href="{{ route('admin.Venders.index') }}">vendors</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <p class="ms-2 text-success m-0">Edit Vendor</p>
        </div>
    </div>
    <div class="container w-75 mb-5">
        <form class="row g-3" action="{{ route('admin.Venders.update', $vendor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input name="id" value="{{$vendor->id}}" type="hidden">
            <div class="text-center">
                <img src="{{ $vendor->logo }}" width="200px" height="200px">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" name="logo" id="formFile">
                @error('logo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Store Name</label>
                <input type="text" class="form-control" value="{{ $vendor->name }}" name="name" id="inputEmail4">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">Section</label>
                <select id="inputState" class="form-select" name="category_id">
                    @if($categories && $categories->count() > 0)
                        @foreach($categories as $category)
                            <option
                            value="{{$category -> id }}"
                                @if($vendor->category_id == $category->id  ) selected @endif>
                                {{$category->name}}</option>
                            </option>
                        @endforeach
                    @endif
                </select>
                @error('category_id')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Mobile</label>
                <input type="text" class="form-control" value="{{ $vendor->mobile }}" name="mobile" id="inputEmail4">
                @error('mobile')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control"  value="{{ $vendor->email }}" name="email" id="inputEmail4">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="inputPasswords">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 d-flex">
                <label class="form-check-label me-3" for="flexSwitchCheckChecked">Active</label><br>
                <div class="form-check form-switch ">
                    <input class="form-check-input" type="checkbox" role="switch" value="" name="active" id="flexSwitchCheckChecked" @if($vendor -> active == 1)checked @endif>
                    @error('active')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Address</label>
                <input type="text" class="form-control" value="{{ $vendor->address }}"  name="address" id="pac-input">
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jordin&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-i.net">blade runner 123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
