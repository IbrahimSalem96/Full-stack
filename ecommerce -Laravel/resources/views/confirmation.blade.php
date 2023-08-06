@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Confirmation</h1>
                    <p><a href="#" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Confirmation</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Order Area -->
        <div class="order">
            <div class="container container-center">
                <h3 class="title_confirmation text-center pb-2">Thank you. Your order has been received.</h3>
                <div class="row gx-5 mt-5">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="p-3">
                            <h5>Order Info</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td><a href="#">Order number</a></td>
                                            <td><a class="text-dark" href="#">: 60235</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Date</a></td>
                                            <td><a class="text-dark" href="#">: Los Angeles</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Total</a></td>
                                            <td><a class="text-dark" href="#">: USD 2210</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Payment method</a></td>
                                            <td><a class="text-dark" href="#">: Check payments</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="p-3">
                            <h5>Billing Address</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td><a href="#">Street</a></td>
                                            <td><a class="text-dark" href="#">: 56/8</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">City</a>s</td>
                                            <td><a class="text-dark" href="#">: Los Angele</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Country</a></td>
                                            <td><a class="text-dark" href="#">: United States</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Postcode</a></td>
                                            <td><a class="text-dark" href="#"> : 36952</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="p-3">
                            <h5>Shipping Address</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td><a href="#"> Street</a></td>
                                            <td><a class="text-dark" href="#"> : 56/8</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">City</a></td>
                                            <td><a class="text-dark" href="#">: Los Angeles</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Country</a></td>
                                            <td><a class="text-dark" href="#"> : United States</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Postcode</a></td>
                                            <td><a class="text-dark" href="#"> : 36952</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Order Area -->
        <!-- Start Order Details Area -->
        <div class="order_details  mb-5">
            <div class="container p-5">
                <h5 class="text-dark">Order Details</h5>
                <table class="table m-4">
                    <thead>
                        <tr>
                        </tr>
                    </thead>
                    <tbody class="table-des">
                        <tr>
                            <td>Product</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                        <tr>
                            <td>Pixelstore fresh Blackberry</td>
                            <td><span>x 02</span></td>
                            <td>$720.00</td>
                        </tr>
                        <tr>
                            <td>Pixelstore fresh Blackberry</td>
                            <td><span>x 02</span></td>
                            <td>$720.00</td>
                        </tr>
                        <tr>
                            <td>Pixelstore fresh Blackberry</td>
                            <td><span>x 02</span></td>
                            <td>$720.00</td>
                        </tr>
                        <tr>
                            <td><span>SUBTOTAL</span></td>
                            <td></td>
                            <td>$2160.00</td>
                        </tr>
                        <tr>
                            <td><span>SHIPPING</span></td>
                            <td></td>
                            <td>Flat rate: $50.00</td>
                        </tr>
                        <tr>
                            <td><span>TOTAL</span></td>
                            <td></td>
                            <td><span>$2210.00</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Order Details Area -->
@endsection
