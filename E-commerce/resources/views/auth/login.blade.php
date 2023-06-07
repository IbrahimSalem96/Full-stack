@extends('../layouts.master')
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
    <div class="row row-cols-1 row-cols-lg-2 row-cols-md-2">
        <div class="col p-0">
            <div class="p-3 bg-login-left text-white d-flex align-items-center">
                <div class="w-100">
                    <h2>New to our website?</h2>
                    <p class="m-auto w-75 pb-5 mt-3">There are advances being made in science and technology everyday, and a good example of this is the</p>
                    <form action="{{ route('registrationuser')}}">
                        <button class="w-50 ps-4 pe-4 pt-2 pb-2">CREATE AN ACCOUNT</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col m-0 p-0">
            <div class="p-3 h-100 d-flex align-items-center">
                <div class="w-100 p-4">
                    <h5 class="text-dark">Log In To Enter</h5>
                    <form class="form" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="p-2">
                            <input id="email" type="email" class="w-75 p-3 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
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
                        <div class="p-4">
                            <button type="submit" class="w-75 ps-4 pe-4 pt-2 pb-2">CREATE AN ACCOUNT</button>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link p-2 text-decoration-none " href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login -->
@endsection
