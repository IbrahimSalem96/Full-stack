@extends('layouts.masterAdmin')
@section('title', 'Create Product')
@section('content')
    <h1 class="p-relative"><i class="fa-solid fa-right-long mt-1"></i> Create Product</h1>
    <div class="container">
        <div class="alert alert-primary d-flex" role="alert">
            <a class="me-2 text-decoration-none text-dark fw-bold" href="{{ route('index-admin') }}">index</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <a class="me-2 ms-2 text-decoration-none text-dark fw-bold" href="{{ route('admin.Product.index') }}">Product</a>
            <i class="fa-solid fa-right-long mt-1"></i>
            <p class="ms-2 text-success m-0">Create Product</p>
        </div>
    </div>
    <div class="container w-75 mb-5">
        <form class="row g-3" action="{{ route('admin.Product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" name="logo" id="formFile">
                @error('logo')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name Product</label>
                <input type="text" class="form-control" name="name" id="inputEmail4">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="text" class="form-control" name="mobile" id="inputEmail4">
                @error('mobile')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 d-flex">
                <label class="form-check-label me-3" for="flexSwitchCheckChecked">Active</label><br>
                <div class="form-check form-switch ">
                    <input class="form-check-input" type="checkbox" role="switch" value="" name="active" id="flexSwitchCheckChecked" checked>
                    @error('active')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection


