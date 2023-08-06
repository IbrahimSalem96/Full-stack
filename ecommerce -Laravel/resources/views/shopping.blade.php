@extends('../layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Shopping Cart</h1>
                    <p><a href="#" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Cart</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Cart Area -->
        <div class="car">
            <div class="container container-center">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody  >
                        <tr>
                            <th scope="row">
                                <img class="p-2 me-3" src="images/cart.jpg">
                                <strong>Minimalistic shop for multipurpose use</strong>
                            </th>
                            <td><span>$360.00</span></td>
                            <td class="text-center ">
                                <div class="count d-flex justify-content-center">
                                    <button onclick="stepperDecrement(this)">-</button>
                                    <input type="number" class="border-0 text-end text-warning ps-1 pe-2" min="0" max="10" step="1" value="0" readonly/>
                                    <button onclick="stepperIncrement(this)">+</button>
                                </div>
                            </td>
                            <td><span>$720.00</span></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img class="p-2 me-3" src="images/cart.jpg">
                                <strong>Minimalistic shop for multipurpose use</strong>
                            </th>
                            <td><span>$360.00</span></td>
                            <td class="text-center">
                                <div class="count d-flex justify-content-center">
                                    <button onclick="stepperDecrement(this)">-</button>
                                    <input type="number" class="border-0 text-end text-warning ps-1 pe-2" min="0" max="10" step="1" value="0" readonly/>
                                    <button onclick="stepperIncrement(this)">+</button>
                                </div>
                            </td>
                            <td><span>$720.00</span></td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img class="p-2 me-3" src="images/cart.jpg">
                                <strong>Minimalistic shop for multipurpose use</strong>
                            </th>
                            <td><span>$360.00</span></td>
                            <td class="text-center">
                                <div class="count d-flex justify-content-center">
                                    <button onclick="stepperDecrement(this)">-</button>
                                    <input type="number" class="border-0 text-end text-warning ps-1 pe-2" min="0" max="10" step="1" value="0" readonly/>
                                    <button onclick="stepperIncrement(this)">+</button>
                                </div>
                            </td>
                            <td><span>$720.00</span></td>
                        </tr>
                        <tr >
                        </tbody>
                    </table>
                    <div class="LinkCar d-flex justify-content-between align-items-center">
                        <a class="p-1 ps-5 pe-5" href="#">Update Cart</a>
                        <div class="cupon_text d-flex align-items-center">
                            <input class="ps-3" type="text" placeholder="Coupon Code">
                            <a class="primary-btn p-1 ps-5 pe-5" href="#">Apply</a>
                            <a class="gray_btn p-1 ps-5 pe-5" href="#">Close Coupon</a>
                        </div>
                    </div>
                    <hr>
                    <div class="Subtotal d-flex justify-content-end">
                        <p class="pe-5 text-dark">Subtotal</p>
                        <p class="ps-5 text-dark">$2160.00</p>
                    </div>
                    <hr>
                    <div class="Shipping d-flex justify-content-end align-items-center">
                        <div>
                            <p class="text-dark">Shipping</p>
                            <div class="ps-3 Checks">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Flat Rate: $5.00</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Free Shipping</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Flat Rate: $10.00</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">Local Delivery: $2.00</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-5 Calculate_Shipping d-flex justify-content-end align-items-center">
                        <div>
                            <p class="text-dark text-end">Calculate Shipping</p>
                            <div class="option ">
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option value="1">Bangladesh</option>
                                        <option value="2">India</option>
                                        <option value="3">Pakistan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option">
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option value="1">Select a State</option>
                                        <option value="2">Select a State</option>
                                        <option value="3">Select a State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Postcode/Zipcode">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        </div>
                    <div class="LinkCar mb-3 d-flex justify-content-end align-items-center">
                        <a class="p-1 ps-5 pe-5 text-uppercase" href="#">Update Details</a>
                    </div>
                    <hr>
                    <div class="LinkCar d-flex justify-content-end align-items-center">
                        <div class="cupon_text d-flex align-items-center">
                            <a class="gray_btn p-1 ps-5 pe-5 text-uppercase" href="#">Continue Shopping</a>
                            <a class="primary-btn p-1 ps-5 pe-5 text-uppercase" href="#">Proceed to checkout</a>
                        </div>
                    </div>
            </div>
        </div>
        <!-- End Cart Area -->
@endsection
