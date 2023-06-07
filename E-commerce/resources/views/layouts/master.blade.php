<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon website-->
    <link rel="icon" type="image/x-icon" href="images/shopping-cart.png">
    <!-- Link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&family=Gideon+Roman&family=Roboto:ital,wght@0,100;0,300;0,500;1,400&display=swap" rel="stylesheet">
    <!-- Link css style -->
    <link rel="stylesheet" href="css/main.css"/>
</head>
    <body>
        <!-- Start nav -->
        <nav class="container navbar navbar-expand-lg navbar-light bg-white mt-5 p-2 position-fixed">
            <div class="container-fluid container-fluid-in">
                    <a class="navbar-brand" href="#">
                        <img src="images/e-commerce.png" alt="" width="70" height="54">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav p-0">
                        <li class="nav-item me-3">
                            <a class="nav-link active text-uppercase text-warning " aria-current="page" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link-in nav-link text-uppercase text-dark" href="#">Shop</a>
                            <ul class="list-group mt-0 rounded-0">
                                <li class="list-group-item border-0 p-0 ps-3">
                                    <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('category')}}">Shop Category</a>
                                </li>
                                <li class="list-group-item border-0 p-0 ps-3  fw-bold">
                                    <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('details')}}">Product Details</a>
                                </li>
                                <li class="list-group-item border-0 p-0 ps-3">
                                    <a class="nav-link-in nav-link text-uppercas fw-bold" href="{{route('checkout')}}">Product Checkout</a>
                                </li>
                                <li class="list-group-item border-0 p-0 ps-3  fw-bold">
                                    <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('shopping')}}">Shopping Cart</a>
                                </li>
                                <li class="list-group-item border-0 p-0 ps-3">
                                    <a class="nav-link-in nav-link text-uppercas fw-bold" href="{{route('confirmation')}}">Confirmation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link-in nav-link text-uppercase text-dark" href="#">Blog</a>
                                <ul class="list-group mt-0 rounded-0 ">
                                    <li class="list-group-item border-0 p-0 ps-3">
                                        <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('blog')}}">Blog</a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 ps-3  fw-bold">
                                        <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('loginBlog')}}">Blog Details</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link-in nav-link text-uppercase text-dark" href="#">Pages</a>
                                <ul class="list-group mt-0 rounded-0">
                                    <li class="list-group-item border-0 p-0 ps-3">
                                        <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('loginuser')}}">Login</a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 ps-3  fw-bold">
                                        <a class="nav-link-in nav-link text-uppercase fw-bold" href="{{route('tracking')}}">Tracking</a>
                                    </li>
                                    <li class="list-group-item border-0 p-0 ps-3">
                                        <a class="nav-link-in nav-link text-uppercas fw-bold" href="#">Elements</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link-in nav-link text-uppercase text-dark" href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item me-3 d-none d-lg-block d-xl-block" id="Search">
                            <a class="nav-link-in nav-link text-uppercase text-dark" href="#">
                                <i class="fa-solid fa-briefcase"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 toggle d-none d-lg-block d-xl-block">
                            <a class="nav-link-in nav-link text-uppercase">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container input-in position-fixed">
            <form class="d-flex">
                <input type="text" class="form-control fw-normal" placeholder="Search Here" aria-label="Username" aria-describedby="addon-wrapping">
                <button type="button" class="btn btn-warning d-none">Warning</button>
                <span id="close_search" title="Close Search">X</span>
            </form>
        </div>
        <!-- End nav-->




        @yield('content')





                <!-- Start footer-area section_gap-->
                <div class="footer container-center p-5" style="background-color: #222222;">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 mt-5 mb-5">
                            <div class="col col-lg-3 mb-3">
                                <h5 class="text-white fw-bold mb-4">About Us</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua</p>
                            </div>
                            <div class="col col-lg-4 mb-3 form">
                                <h5 class="text-white fw-bold mb-4">Newsletter</h5>
                                <p>Stay update with our latest</p>
                                <div class="d-flex flex-row">
                                    <input class="w-100 border-0 form-input"  placeholder="Enter Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <button class="btn rounded-0"><i class="fa fa-long-arrow-right"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 mb-3">
                                <h5 class="text-white fw-bold mb-4">Instragram Feed</h5>
                                <ul class="nav w-100 ">
                                    <li class="p-1"><img src="images/i1.jpg"></li>
                                    <li class="p-1"><img src="images/i2.jpg"></li>
                                    <li class="p-1"><img src="images/i3.jpg"></li>
                                    <li class="p-1"><img src="images/i4.jpg"></li>
                                    <li class="p-1"><img src="images/i5.jpg"></li>
                                    <li class="p-1"><img src="images/i6.jpg"></li>
                                </ul>
                            </div>
                            <div class="col col-lg-2 mb-3">
                                <h5 class="text-white fw-bold mb-4">Follow Us</h5>
                                <p>Let us be social</p>
                                    <ul class="nav">
                                        <li><a href="#" class="link-secondary ps-0 p-3"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="link-secondary p-3"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#" class="link-secondary p-3"><i class="fa-brands fa-dribbble"></i></a></li>
                                        <li><a href="#" class="link-secondary pe-0 p-3"><i class="fa-brands fa-behance"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="footer-bottom d-flex justify-content-center">
                            <p>Copyright © 2023 All rights reserved | This template is made with <i class="fa-regular fa-heart text-warning"></i> by <span class="text-warning">Ibraheem Salem</span></p>
                        </div>
                    </div>
                </div>
                <!-- End footer-area section_gap -->
                <!-- Js Main -->
                <script src="js/main.js"></script>
                <!-- JS Bootstrap-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </body>
        </html>
