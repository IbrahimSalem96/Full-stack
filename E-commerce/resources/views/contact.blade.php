@extends('layouts.master')
@section('content')
        <!-- Start Header -->
        <div class="bg-img-contact">
            <div class="container center-in d-flex justify-content-end text-white">
                <div class="pt-5 me-5">
                    <h1 class="fw-bold m-0">Contact Us</h1>
                    <p><a href="#" class="text-decoration-none text-white">Home</a><i class="fa-solid fa-right-long ps-3 pe-3"></i><a href="#" class="text-decoration-none text-white">Contact</a></p>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Map -->
        <div class="container map">
            <div class="center-contact">
                <div class="d-flex justify-content-center mb-5">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="1025" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:1025px;}</style><a href="https://www.embedgooglemap.net">google maps iframe generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1025px;}</style></div></div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-0"><i class="fa-solid fa-house fs-5 text-warning"></i>
                                <div class="ps-3 ">
                                    <h6 class="fw-bold">California, United States</h6>
                                    <p class="text-secondary">Santa monica bullevard</p>
                                </div>                                </li>
                            <li class="list-group-item border-0 d-flex p-0""><i class="fa-solid fa-phone fs-5 text-warning"></i>
                                <div class="ps-3">
                                    <h6 class="fw-bold">00 (440) 9865 562</h6>
                                    <p class="text-secondary">Mon to Fri 9am to 6 pm</p>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-0""><i class="fa-solid fa-envelope fs-5 text-warning"></i>
                                <div class="ps-3">
                                    <h6 class="fw-bold">support@colorlib.com</h6>
                                    <p class="text-secondary">Send us your query anytime!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-lg-8">
                        <form class="d-flex form">
                            <div class="w-50 mb-4 me-5 ">
                                <input class="w-100 mb-4 p-2 ps-4 input" type="text" name="name" placeholder="Enter your name">
                                <input class="w-100 mb-4 p-2 ps-4 input" type="text" name="name" placeholder="Enter email address">
                                <input class="w-100 mb-4 p-2 ps-4 input" type="text" name="name" placeholder="Enter Subject">
                            </div>
                            <div class="w-50 text-end">
                                <textarea class="w-100 h-75 ps-4" placeholder="Enter Message"></textarea>
                                <button class="w-50 ps-4 pe-4 pt-2 pb-2 rounded-pill">Shop Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Map -->
@endsection
