@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-in">
            <div class="container center-in">
                <div id="carouselExampleCaptions" class="carousel-in carousel slide" data-bs-ride="carousel">
                    <div class=" carousel-inner">
                        <div class="carousel-item active mt-2">
                            <div class="row align-items-center">
                                <div class="col col-lg-4 col-md-8 text-dark text-start">
                                    <p class="text-header lh-1">First slide label1</p>
                                    <p class="text-secondary">Some representative placeholder content for the first slide Some representative placeholder content for the first slide.</p>
                                </div>
                                <div class="col col-lg-8 d-none d-lg-block d-xl-block">
                                    <img src="images/banner/banner-img.png" class="" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col col-lg-4 col-md-8 text-dark text-start">
                                    <p class="text-header lh-1">First slide label2</p>
                                    <p class="text-secondary">Some representative placeholder content for the first slide Some representative placeholder content for the first slide.</p>
                                </div>
                                <div class="col col-lg-8 d-none d-lg-block d-xl-block">
                                    <img src="images/banner/banner-img.png" class="" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-center">
                                <div class="col col-lg-4 col-md-8 text-dark text-start">
                                    <p class="text-header lh-1">First slide label3</p>
                                    <p class="text-secondary">Some representative placeholder content for the first slide Some representative placeholder content for the first slide.</p>
                                </div>
                                <div class="col col-lg-8 d-none d-lg-block d-xl-block">
                                    <img src="images/banner/banner-img.png" class="" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start features -->
        <div class="container container-center">
            <div class="row card-group text-center d-flex justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-12 pt-4 -pb-4 pe-5 ps-5 ">
                    <img src="images/features/f-icon1.png" class="m-auto" alt="...">
                    <div class="card-body">
                        <h6 class="card-title text-dark">Free Delivery</h6>
                        <p class="card-text">Free Shipping on all order</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-4 -pb-4 pe-5 ps-5 ">
                    <img src="images/features/f-icon2.png" class="m-auto" alt="...">
                    <div class="card-body">
                        <h6 class="card-title text-dark">Free Delivery</h6>
                        <p class="card-text">Free Shipping on all order</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-4 -pb-4 pe-5 ps-5">
                    <img src="images/features/f-icon3.png" class="m-auto" alt="...">
                    <div class="card-body">
                        <h6 class="card-title text-dark">Free Delivery</h6>
                        <p class="card-text">Free Shipping on all order</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 pt-4 -pb-4 pe-5 ps-5">
                    <img src="images/features/f-icon4.png" class="m-auto" alt="...">
                    <div class="card-body">
                        <h6 class="card-title text-dark">Free Delivery</h6>
                        <p class="card-text">Free Shipping on all order</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End features -->
        <!-- start category-area-->
        <div class="category-area">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row  g-4">
                            <div class="show-in col-lg-8 overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="images/sd/c1.jpg" alt="Image One">
                                    <div class="centered">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="show-in col-lg-4 overflow-hidden">
                                <div class="h-100 position-relative overflow-hidden">
                                    <img class="img-fluid w-100  h-100" src="images/sd/c2.jpg" alt="Image Two ">
                                    <div class="centered">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="show-in  col-lg-4  overflow-hidden">
                                <div class="h-100 position-relative overflow-hidden">
                                    <img class="img-fluid w-100 h-100" src="images/sd/c3.jpg" alt="Image Three">
                                    <div class="centered">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="show-in col-lg-8  overflow-hidden">
                                <div class="h-100 position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="images/sd/c4.jpg" alt="Image Four">
                                    <div class="centered">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-in col-lg-4 overflow-hidden">
                        <div class="h-100 position-relative overflow-hidden" data-work="Application">
                            <img class="w-100 h-100" src="images/sd/c5.jpg" alt="Image Five">
                            <div class="centered">
                                <h6 class="deal-title">Sneaker for Sports</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End category-area-->
        <!-- Start single product slide -->
        <div class="container container-center">
            <div class="text-center pt-5 pb-5 d-flex">
                <button class="carousel-control-prev position-relative" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <!--<span class="carousel-control-prev-icon text-dark"></span>
                    <span class="visually- ">Previous</span> -->
                    <img src="images/product/prev.png">
                </button>
                <div class="d-block">
                    <h2 class="text-dark">Coming Products</h2>
                    <p class="w-75 m-auto d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <button class="carousel-control-next position-relative" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <!--<span class="carousel-control-next-icon text-dark" ></span>
                <span class="visually- ">Next</span>-->
                <img src="images/product/next.png">
                </button>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4 text-dark ">
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
                            <div class="col product">
                                <div class="card h-50">
                                    <img src="images/product/p7.jpg" class="card-img-top" alt="...">
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
                                    <img src="images/product/p8.jpg" class="card-img-top" alt="...">
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
                    </div>
                <div class="carousel-item">
                    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4 text-dark">
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
                        <div class="col product">
                            <div class="card h-50">
                                <img src="images/product/p7.jpg" class="card-img-top" alt="...">
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
                                <img src="images/product/p8.jpg" class="card-img-top" alt="...">
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
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 g-4 text-dark">
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
                        <div class="col product">
                            <div class="card h-50">
                                <img src="images/product/p7.jpg" class="card-img-top" alt="...">
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
                                <img src="images/product/p8.jpg" class="card-img-top" alt="...">
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
                </div>
                </div>

            </div>
        </div>
        <!-- single product slide -->
        <!-- Start exclusive deal Area -->
        <div class="exclusive">
            <div class="text-center">
                <div class="row row-cols-2 row-cols-lg-2 row-cols-md-1 row-cols-sm-1 p-0 m-0  border-0">
                    <div class="col bg-img-Left d-flex justify-content-center align-items-center">
                        <div class="details">
                            <p class="text-uppercase fs-3 lh-1">Exclusive Hot Deal Ends Soon!</p>
                            <p>Who are in extremely love with eco friendly system.</p>
                            <div class="d-flex justify-content-around bg-light text-dark rounded mb-5">
                                <div class="p-4 border-end">
                                    <p class="m-0 fs-1 mb-3 session"></p>
                                    <p class="m-0 ">session</p>
                                </div>
                                <div class="p-4 border-end">
                                    <p class="m-0 fs-1  mb-3 hours"></p>
                                    <p class="m-0">Hours</p>
                                </div>
                                <div class="p-4 border-end">
                                    <p class="m-0 fs-1  mb-3 minutes"></p>
                                    <p class="m-0">Mins</p>
                                </div>
                                <div class="p-4">
                                    <p class="m-0 fs-1  mb-3 seconds"></p>
                                    <p class="m-0">Secs</p>
                                </div>
                            </div>
                            <button class="ps-4 pe-4 pt-2 pb-2 rounded-pill">Shop Now</button>
                        </div>
                    </div>
                    <div class="col bg-img-Right d-flex justify-content-center align-items-center text-dark text-uppercase">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide w-50  p-0" data-bs-ride="carousel">
                            <div class="carousel-inner  ">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="card">
                                        <img src="images/product/e-p1.png" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                            <h5>$1200</h5>
                                            <p class="fs-5">addidas New Hammer sole for Sports person</p>
                                            <a href="#" class="rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a><span class="ms-3">Add to Bag</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="card">
                                        <img src="images/product/e-p1.png" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                            <h6>$1200</h6>
                                            <p class="fs-5">addidas New Hammer sole for Sports person</p>
                                            <a href="#" class="rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a><span class="ms-3">Add to Bag</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <img src="images/product/e-p1.png" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                            <h5>$1200</h5>
                                            <p class="fs-5">addidas New Hammer sole for Sports person</p>
                                            <a href="#" class="rounded-pill"><span><i class="fa-solid fa-briefcase"></i></span></a><span class="ms-3">Add to Bag</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span> -->
                                <img src="images/product/prev.png">
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span> -->
                                <img src="images/product/next.png">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End exclusive deal Area -->
        <!-- Start brand Area -->
        <div class="container container-center brand">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 text-center">
                <div class="col">
                    <div class="p-3">
                        <img class="img-fluid " src="images/brand/1.png">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="img-fluid" src="images/brand/2.png">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="img-fluid" src="images/brand/3.png">
                    </div>                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="img-fluid" src="images/brand/4.png">
                    </div>                </div>
                <div class="col">
                    <div class="p-3">
                        <img class="img-fluid" src="images/brand/5.png">
                    </div>                </div>
            </div>
        </div>
        <!-- End brand Area  -->
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
