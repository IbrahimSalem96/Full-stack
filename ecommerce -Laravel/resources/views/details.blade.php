@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Product Details Page</h1>
                    <p><a href="#" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Shop</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">product-details</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Product Area -->
        <div class="Product">
            <div class="container container-center">
                <div class="container gx-5">
                    <div class="row gx-5">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 p-0 pe-4">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/category/s-p1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/category/s-p1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/category/s-p1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="mt-4 text-dark">
                                <h4>Faded SkyBlu Denim Jeans</h4>
                                <h4 class="text-warning fw-bold">$149.99</h4>
                            </div>
                            <ul class="list ps-0">
                                <li><a href="#" class="text-warning"><span>Category</span> : Household</a></li>
                                <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                            </ul>
                            <hr>
                            <p>
                                Mill Oil is an innovative oil filled radiator with the most modern technology.
                                If you are looking for something that can make your interior look awesome,
                                and at the same time give you the pleasant warm feeling during the winter.
                            </p>
                            <div class="mt-4 btn p-0">
                                <label class="text-warning">Quantity : </label>
                                <button onclick="stepperDecrement(this)">-</button>
                                <input class="border-0 ps-2 text-warning" id=demoInput value="0" type=number min=0 max=10>
                                <button onclick="stepperIncrement(this)">+</button>
                            </div>
                            <div class="mt-5 btn-buttom d-flex align-items-baseline">
                                <button class="text-uppercase ps-4 pe-4 border border-1 rounded" type="submit">ADD TO CART</button>
                                <div class="incon ms-3">
                                    <a href="#" class="p-2 rounded-circle"><i class="fa-regular fa-gem"></i></a>
                                    <a href="#" class="p-2 rounded-circle"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs mt-5">
                    <ul class="nav nav-pills p-2 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Specification</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Comments</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-Reviews" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content border" id="pills-tabContent">
                        <div class="tab-pane fade p-5 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes
                            enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15,
                            where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually
                            married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in
                            1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young
                            son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently
                            bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length
                            portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>

                            <p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe
                            books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children
                            leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust
                            all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less</p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <table class="table mt-5">
                                <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Width</td>
                                        <td></td>
                                        <td>128mm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Height</td>
                                        <td></td>
                                        <td>508mm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Depth</td>
                                        <td></td>
                                        <td>85mm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Weight</td>
                                        <td></td>
                                        <td>52gm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Quality checking</td>
                                        <td></td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Freshness Duration</td>
                                        <td></td>
                                        <td>03days</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>When packeting</td>
                                        <td></td>
                                        <td>Without touch of hand</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Each Box contains</td>
                                        <td></td>
                                        <td>60pcs</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="overflow-hidden">
                                <div class="row p-5">
                                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <section>
                                            <div class="headr-img d-flex">
                                                <div class="img">
                                                    <img src="images/product/review-1.png" alt="...">
                                                </div>
                                                <div class="name m-2 ms-4">
                                                    <p class="m-0 text-dark">Blake Ruiz</p>
                                                    <p class="m-0">12th Feb, 2018 at 05:56 pm</p>
                                                </div>
                                                <div class="ms-5 ps-5 btn-reply">
                                                    <button class=" ps-4 pe-4 border border-1 rounded-pill" type="submit">Reply</button>
                                                </div>
                                            </div>
                                            <p class="pe-2 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </section>
                                        <section>
                                            <div class="headr-img d-flex">
                                                <div class="img">
                                                    <img src="images/product/review-2.png" alt="...">
                                                </div>
                                                <div class="name m-2 ms-4">
                                                    <p class="m-0 text-dark">Blake Ruiz</p>
                                                    <p class="m-0">12th Feb, 2018 at 05:56 pm</p>
                                                </div>
                                                <div class="ms-5 ps-5 btn-reply">
                                                    <button class=" ps-4 pe-4 border border-1 rounded-pill" type="submit">Reply</button>
                                                </div>
                                            </div>
                                            <p class="pe-2 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </section>
                                        <section>
                                            <div class="headr-img d-flex">
                                                <div class="img">
                                                    <img src="images/product/review-3.png" alt="...">
                                                </div>
                                                <div class="name m-2 ms-4">
                                                    <p class="m-0 text-dark">Blake Ruiz</p>
                                                    <p class="m-0">12th Feb, 2018 at 05:56 pm</p>
                                                </div>
                                                <div class="ms-5 ps-5 btn-reply">
                                                    <button class=" ps-4 pe-4 border border-1 rounded-pill" type="submit">Reply</button>
                                                </div>
                                            </div>
                                            <p class="pe-2 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </section>
                                    </div>
                                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <section class="section">
                                            <p class="text-dark m-0 fs-2 fw-normal">Post a comment<p>
                                                <input type="text" class="w-100 mt-3 mb-2 p-2" id="CompanyName" name="company" placeholder="Your Full name">
                                                <input type="text" class="w-100 mt-1 mb-2 p-2" id="CompanyName" name="company" placeholder="Email Address">
                                                <input type="text" class="w-100 mt-1 mb-2 p-2" id="CompanyName" name="company" placeholder="Phone Number">
                                                <textarea class="w-100 p-2" name="message" id="message" placeholder="Message"></textarea>
                                                <div class="text-end">
                                                    <button class="text-uppercase ps-4 pe-4 border border-1 rounded mt-2" type="submit">Submit Now</button>
                                                </div>
                                            </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Reviews" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            <div class="overflow-hidden">
                                <div class="row p-5">
                                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <section class="d-flex mb-5">
                                            <div class="left w-50 text-center">
                                                <h3 class="mt-3 text-dark">Overall</h3>
                                                <h1 class="text-warning">4.0</h1>
                                                <h6>(03 Reviews)</h6>
                                            </div>
                                            <div class="right ps-5">
                                                <h5 class="text-dark">Based on 3 Reviews</h5>
                                                <p class="m-0">5 Star : <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i> 01</p>
                                                <p class="m-0">4 Star : <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i> 01</p>
                                                <p class="m-0">3 Star : <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i> 01</p>
                                                <p class="m-0">2 Star : <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i> 01</p>
                                                <p class="m-0">1 Star : <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i> 01</p>
                                            </div>
                                        </section>
                                        <section>
                                            <div class="headr-img d-flex">
                                                <div class="img">
                                                    <img src="images/product/review-1.png" alt="...">
                                                </div>
                                                <div class="name m-2 ms-4">
                                                    <p class="m-0 text-dark">Blake Ruiz</p>
                                                    <p class="m-0">12th Feb, 2018 at 05:56 pm</p>
                                                </div>
                                                <div class="ms-5 ps-5 btn-reply">
                                                    <button class=" ps-4 pe-4 border border-1 rounded-pill" type="submit">Reply</button>
                                                </div>
                                            </div>
                                            <p class="pe-2 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </section>
                                        <section>
                                            <div class="headr-img d-flex">
                                                <div class="img">
                                                    <img src="images/product/review-2.png" alt="...">
                                                </div>
                                                <div class="name m-2 ms-4">
                                                    <p class="m-0 text-dark">Blake Ruiz</p>
                                                    <p class="m-0">12th Feb, 2018 at 05:56 pm</p>
                                                </div>
                                                <div class="ms-5 ps-5 btn-reply">
                                                    <button class=" ps-4 pe-4 border border-1 rounded-pill" type="submit">Reply</button>
                                                </div>
                                            </div>
                                            <p class="pe-2 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </section>
                                        <section>
                                            <div class="headr-img d-flex">
                                                <div class="img">
                                                    <img src="images/product/review-3.png" alt="...">
                                                </div>
                                                <div class="name m-2 ms-4">
                                                    <p class="m-0 text-dark">Blake Ruiz</p>
                                                    <p class="m-0">12th Feb, 2018 at 05:56 pm</p>
                                                </div>
                                                <div class="ms-5 ps-5 btn-reply">
                                                    <button class=" ps-4 pe-4 border border-1 rounded-pill" type="submit">Reply</button>
                                                </div>
                                            </div>
                                            <p class="pe-2 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </section>
                                    </div>
                                    <div class="col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <section class="section">
                                            <p class="text-dark m-0 fs-2 fw-normal mb-3">Add a Review<p>
                                                <span>Your Rating : <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>  Outstanding</span>
                                                <input type="text" class="w-100 mt-3 mb-2 p-2" id="CompanyName" name="company" placeholder="Your Full name">
                                                <input type="text" class="w-100 mt-1 mb-2 p-2" id="CompanyName" name="company" placeholder="Email Address">
                                                <input type="text" class="w-100 mt-1 mb-2 p-2" id="CompanyName" name="company" placeholder="Phone Number">
                                                <textarea class="w-100 p-2" name="message" id="message" placeholder="Message"></textarea>
                                                <div class="text-end">
                                                    <button class="text-uppercase ps-4 pe-4 border border-1 rounded mt-2" type="submit">Submit Now</button>
                                                </div>
                                            </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start related-product Area -->
        <div class="container container-center related-product">
            <div class="">
                <h2 class="text-dark text-center">Deals of the Week</h2>
                <p class=" w-50 m-auto text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="row mt-5 ">
                <div class="col col-lg-8 col-md-12 col-sm-12 d-sm-block d-flex">
                    <div class="text-center">
                        <div class="row row-cols-3 row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2">
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class=" " src="images/r1.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r2.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r3.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r4.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r5.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r6.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r7.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r8.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex m-2">
                                    <a href="#" class="text-decoration-none"><img class="" src="images/r9.jpg"></a>
                                    <div class="desc ms-3 mt-2">
                                        <a href="#" class="title text-decoration-none text-dark">Black lace Heels</a>
                                        <div class="price">
                                            <span>$189.00</span>
                                            <span class="ms-3 text-decoration-line-through">$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-md-12 col-sm-12 max-in">
                    <div class="d-flex justify-content-center">
                        <img class="w-75 max-in" src="images/sd/c5.jpg" alt=". . . ">
                    </div>
                </div>
            </div>
        </div>
        <!-- End erelated-product Area -->
        <!-- End Product Area -->
@endsection
