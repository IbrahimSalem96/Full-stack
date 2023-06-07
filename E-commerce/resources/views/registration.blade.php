@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Login/Register</h1>
                    <p><a href="index.html" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Login/Register</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Login -->
        <div class="container text-center Login center-contact">
            <div class="row row-cols-1 ">
                <div class="col m-0 p-0">
                    <div class="p-3 h-100 d-flex align-items-center">
                        <div class="w-50 m-auto p-4">
                            <h5 class="text-dark">Registration</h5>
                            <form class="form" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="p-2">
                                    <input id="name" type="text" class="w-75 p-3  @error('name') is-invalid @enderror" name="name"  placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="p-2">
                                    <input id="email" type="email" class="w-75 p-3 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="p-2">
                                    <input id="mobile" type="text" class="w-75 p-3  @error('mobile') is-invalid @enderror" name="mobile"  placeholder="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="p-2">
                                    <input id="password" type="Password" class="w-75 p-3 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="p-2">
                                    <input id="password-confirm" type="Password" class="w-75 p-3"  name="password_confirmation" placeholder="Repeat Password" required autocomplete="new-password">
                                </div>
                                <div class="p-4">
                                    <button type="submit" class="w-75 ps-4 pe-4 pt-2 pb-2 text-uppercase">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login -->
@endsection
