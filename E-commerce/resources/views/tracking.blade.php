@extends('../layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Order Tracking</h1>
                    <p><a href="index.html" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Fashon Category</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Tracking -->
        <div class="container center-contact Tracking">
            <p class="w-75">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
            <form class="form">
                <div class="p-0 pt-3">
                    <input type="text" name="username" placeholder="Order ID" class="w-50 ps-4 p-2">
                </div>
                <div class="p-0 pt-3">
                    <input type="text" name="Password" placeholder="Billing Email Address" class="w-50 ps-4 p-2">
                </div>
                <div class="p-0 pt-3">
                    <button class="w-25 pt-2 pb-2">Track Order</button>
                </div>
            </form>
        </div>
        <!-- End Tracking -->
        <!-- Start footer-area -->
@endsection
