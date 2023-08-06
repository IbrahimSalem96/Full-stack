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
                    <form class="form">
                        <div class="p-2">
                            <input type="text" name="username" placeholder="Username" class="w-75 p-3">
                        </div>
                        <div class="p-2">
                            <input type="Password" name="Password" placeholder="Password" class="w-75 p-3">
                        </div>
                        <div class="p-4">
                            <button class="w-75 ps-4 pe-4 pt-2 pb-2">CREATE AN ACCOUNT</button>
                        </div>
                        <a href="#" class="p-2 text-decoration-none ">Forgot Password ?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login -->
@endsection
