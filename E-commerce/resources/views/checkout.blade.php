@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Checkout</h1>
                    <p><a href="#" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Checkout</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Map -->
        <!-- Start Checkout Area-->
        <div class="checkout">
            <div class="container container-center">
                <div class="head p-2">
                    <p class="m-0 ps-3 text-dark">Returning Customer? <a href="#" class="text-danger">Click here to login</a></p>
                </div>
                <div class="p-2 ms-4">
                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                </div>
                <form class="ms-4">
                    <div class="overflow-hidden">
                        <div class="row gy-4 mb-3">
                            <div class="col-12 col-lg-4 col-md-5 col-sm-12">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username or Email">
                            </div>
                            <div class="col-12 col-lg-4 col-md-5 col-sm-12">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="row gy-4 p-2 d-flex align-items-center">
                            <div class="col-12 col-lg-1 col-md-2">
                                <button class="text-uppercase ps-4 pe-4" type="submit">Login</button>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3 col-sm-12">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> Remember me</label>
                            </div>
                            <a class="mt-4 text-decoration-none text-secondary" href="#">Lost your password?</a>
                        </div>
                    </div>
                </form>
                <div class="head p-2">
                    <p class="m-0 ps-3 text-dark">Have a coupon? <a href="#" class="text-danger">Click here to enter your code</a></p>
                </div>
                <form class="p-4">
                        <div class="overflow-hidden mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter coupon code">
                        </div>
                        <button class="text-uppercase ps-4 pe-4 border border-1 rounded" type="submit">Apply Coupon</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="billing mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8 col-xxl-8 col-lg-8 col-md-12 col-sm-12 ">
                        <div class="p-0">
                            <h4 class="text-dark">Billing Details</h4>
                            <hr>
                            <form action="" class="pt-4">
                                <div class="row gy-4 mb-3">
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="FirstName" placeholder="First Name">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="CompanyName" name="company" placeholder="Company name">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="PhoneNumber" placeholder="Phone Number">
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" class="form-control" id="EmailAddress" placeholder="Email Address">
                                    </div>
                                    <div class="col-12 ">
                                        <select class="form-select text-secondary" aria-label="Default select example">
                                            <option selected >Country</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="CompanyName" name="company" placeholder="Address line 01">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="CompanyName" name="company" placeholder="Address line 02">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="CompanyName" name="company" placeholder="Town/City">
                                    </div>
                                    <div class="col-12">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>District</option>
                                            <option value="1">District 1</option>
                                            <option value="2">District 2</option>
                                            <option value="3">District 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ship to a different address?</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-2">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="p-3 bg-billing-right">
                            <h5 class="text-dark mt-4">Your Order</h5>
                            <hr>
                                <ul class="list p-0">
                                    <li><a href="#">Product </a><span>Total</span></li>
                                    <li><a href="#">Fresh Blackberry</a><span>x 02</span><span>$720.00</span></li>
                                    <li><a href="#">Fresh Tomatoes</a><span>x 02</span><span>$720.00</span></li>
                                    <li><a href="#">Fresh Brocoli</a><span>x 02</span><span>$720.00</span></li>
                                </ul>
                                <ul class="list p-0">
                                    <li><a href="#" class="text-dark">Subtotal</a><span>$2160.00</span></li>
                                    <li><a href="#" class="text-dark">Shipping </a><span>Flat rate: $50.00</span></li>
                                    <li><a href="#" class="text-dark">Total </a><span class="text-dark">$2210.00</span></li>
                                </ul>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        <p class="text-dark">CHECK PAYMENTS</p>
                                    </label>
                                </div>
                                <div class="w-100 bg-white ">
                                    <p class="p-3">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                                <div class="form-check d-flex justify-content-between">
                                    <div class="input">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1"><p class="text-dark">PAYPAL</p></label>
                                    </div>
                                    <div class="img">
                                        <img src="images/product/card.jpg" alt="...">
                                    </div>
                                </div>
                                <div class="w-100 bg-white ">
                                    <p class="p-3">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <p>I’ve read and accept the<span class="text-danger"> terms & conditions*</span></p>
                                    </label>
                                </div>
                                <div class="m-auto text-center">
                                    <button class="text-uppercase ps-4 pe-4 border border-1 rounded" type="submit">Proceed to Paypal</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Checkout Area-->
@endsection
