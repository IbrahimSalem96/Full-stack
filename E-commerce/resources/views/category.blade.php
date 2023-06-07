@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5 w-25">
                    <h1 class="fw-bold m-0">Shop Category page</h1>
                    <p class=""><a href="#" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Shop</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Fashon Category</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start related-product -->
        <div class="related">
            <div class="container container-center">
                <div class="row gx-5 g-4">
                    <div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-5 col-sm-12 bg-related p-0">
                        <h5 class="bg-right text-white">Browse Categories</h5>
                        <div class="p-2">
                            <ul class="main-categories list">
                                <li class="main-nav-list"  id="nav_view"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="true" aria-controls="fruitsVegetable"> Fruits and Vegetables<span class="number">(53)</span></a>
                                    <ul class="collapse " id="fruitsVegetable" data-toggle="collapse" aria-expanded="true" aria-controls="fruitsVegetable">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"  id="nav_view"><a data-toggle="collapse" href="#meatFish" aria-expanded="true" aria-controls="meatFish"><span class="lnr lnr-arrow-right"></span>Meat and Fish<span class="number">(53)</span></a>
                                    <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="true" aria-controls="meatFish">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span class="lnr lnr-arrow-right"></span>Cooking<span class="number">(53)</span></a>
                                    <ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span class="lnr lnr-arrow-right"></span>Beverages<span class="number">(24)</span></a>
                                    <ul class="collapse" id="beverages" data-toggle="collapse" aria-expanded="false" aria-controls="beverages">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span class="lnr lnr-arrow-right"></span>Home and Cleaning<span class="number">(53)</span></a>
                                    <ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a href="#pestControl">Pest Control<span class="number">(24)</span></a></li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#officeProduct" aria-expanded="false" aria-controls="officeProduct"><span class="lnr lnr-arrow-right"></span>Office Products<span class="number">(77)</span></a>
                                    <ul class="collapse" id="officeProduct" data-toggle="collapse" aria-expanded="false" aria-controls="officeProduct">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#beauttyProduct" aria-expanded="false" aria-controls="beauttyProduct"><span class="lnr lnr-arrow-right"></span>Beauty Products<span class="number">(65)</span></a>
                                    <ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#healthProduct" aria-expanded="false" aria-controls="healthProduct"><span class="lnr lnr-arrow-right"></span>Health Products<span class="number">(29)</span></a>
                                    <ul class="collapse" id="healthProduct" data-toggle="collapse" aria-expanded="false" aria-controls="healthProduct">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a href="#PetCare">Pet Care<span class="number">(29)</span></a></li>
                                <li class="main-nav-list"><a data-toggle="collapse" href="#homeAppliance" aria-expanded="false" aria-controls="homeAppliance"><span class="lnr lnr-arrow-right"></span>Home Appliances<span class="number">(15)</span></a>
                                    <ul class="collapse" id="homeAppliance" data-toggle="collapse" aria-expanded="false" aria-controls="homeAppliance">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                                <li class="main-nav-list"><a class="border-bottom-0" data-toggle="collapse" href="#babyCare" aria-expanded="false" aria-controls="babyCare"><span class="lnr lnr-arrow-right"></span>Baby Care<span class="number">(48)</span></a>
                                    <ul class="collapse" id="babyCare" data-toggle="collapse" aria-expanded="false" aria-controls="babyCare">
                                        <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
                                        <li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
                                        <li class="main-nav-list child"><a href="#" class="border-bottom-0">Meat<span class="number">(11)</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h5 class="bg-right text-white">Product Filters</h5>
                        <div class="common-filter p-3 pb-0">
                            <div class="head fs-6 fw-bold text-dark p-2">Brands</div>
                            <form action="#" class="ps-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Apple <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Asus <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Gionee <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Micromax <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Samsung <span>(29)</span></label>
                                </div>
                            </form>
                        </div>
                        <div class="common-filter p-3 pt-0">
                            <div class="head fs-6 fw-bold text-dark p-2">Color</div>
                            <form action="#" class="ps-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Black <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Black Leather <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Black with red <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Gold <span>(29)</span></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="exampleRadios1">Spacegrey <span>(29)</span></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col=xxl-9 col-xl-9 col-lg-9 col-md-7 col-sm-12 ps-4 p-0">
                        <div class="d-flex justify-content-between bg-right p-2 pagination-in mb-4">
                            <section class="d-flex w-50">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Default sorting</option>
                                    <option value="1">Default sorting</option>
                                    <option value="2">Default sorting</option>
                                    <option value="3">Default sorting</option>
                                </select>
                                <select class="form-select ms-4" aria-label="Default select example">
                                    <option selected>show</option>
                                    <option value="1">12</option>
                                    <option value="2">16</option>
                                    <option value="3">18</option>
                                </select>
                            </section>
                            <section>
                                <ul class="border-0 pagination d-flex justify-content-center" id="myDIV">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                                    </li>
                                    <li class="page-item"><a class="btn-pag page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="btn-pag page-link " href="#">2</a></li>
                                    <li class="page-item"><a class="btn-pag page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">addidas New Hammer sole for Sports person.</h5>
                                        <p class="text-dark">$1500</p>
                                    <div class="product-details p-0 ">
                                        <a href="#" class="p-2 rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-heart"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-solid fa-code-compare"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-eye"></i></span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">addidas New Hammer sole for Sports person.</h5>
                                        <p class="text-dark">$1500</p>
                                    <div class="product-details p-0 ">
                                        <a href="#" class="p-2 rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-heart"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-solid fa-code-compare"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-eye"></i></span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">addidas New Hammer sole for Sports person.</h5>
                                        <p class="text-dark">$1500</p>
                                    <div class="product-details p-0 ">
                                        <a href="#" class="p-2 rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-heart"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-solid fa-code-compare"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-eye"></i></span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">addidas New Hammer sole for Sports person.</h5>
                                        <p class="text-dark">$1500</p>
                                    <div class="product-details p-0 ">
                                        <a href="#" class="p-2 rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-heart"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-solid fa-code-compare"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-eye"></i></span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">addidas New Hammer sole for Sports person.</h5>
                                        <p class="text-dark">$1500</p>
                                    <div class="product-details p-0 ">
                                        <a href="#" class="p-2 rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-heart"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-solid fa-code-compare"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-eye"></i></span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p6.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">addidas New Hammer sole for Sports person.</h5>
                                        <p class="text-dark">$1500</p>
                                    <div class="product-details p-0 ">
                                        <a href="#" class="p-2 rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-heart"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-solid fa-code-compare"></i></span></a>
                                        <a href="#" class="p-2 rounded-pill"><i class="fa-regular fa-eye"></i></span></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between bg-right p-2 pagination-in">
                            <section>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>show</option>
                                    <option value="1">12</option>
                                    <option value="2">16</option>
                                    <option value="3">18</option>
                                </select>
                            </section>
                            <section>
                                <ul class="border-0 pagination d-flex justify-content-center" id="myDIV">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                                    </li>
                                    <li class="page-item"><a class="btn-pag page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="btn-pag page-link " href="#">2</a></li>
                                    <li class="page-item"><a class="btn-pag page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End related-product -->
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
@endsection
