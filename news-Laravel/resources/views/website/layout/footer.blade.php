    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">{{__('words.About')}}</h1>
                </a>
                <p>{{__('words.Blog interested in everything new in the world')}}</p>
                <div class="d-flex justify-content-start mt-4">
                        @if ($setting->facebook != '')
                            <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        @endif

                        @if ($setting->instagram != '')
                            <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;"
                            href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                        @endif
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">{{__('words.Categories')}}</h4>
                <div class="d-flex flex-wrap m-n1">
                    @foreach ($categories as $Category)
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">{{$Category->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">{{__('words.Tags')}}</h4>
                <div class="d-flex flex-wrap m-n1">
                    @foreach ($postshare as $posts)
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">{{$posts->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">{{__('words.Quick Links')}}</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>{{__('words.About')}}</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>{{__('words.Advertise')}}</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>{{__('words.Privacy & policy')}}</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>{{__('words.Terms & conditions')}}</a>
                    <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>{{__('words.Contact')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center me-2">
            &copy; <a class="font-weight-bold me-2" href="#">{{__('words.Blog')}}</a>{{__('words.All Rights Reserved.')}}
			<span class="me-2 font-weight-bold ">{{__('words.by')}} &#x1F60D;</span><span class="font-weight-bold ">{{__('words.Ibraheem Salem')}}<span><a class="ps-2" target="_blank"  href="https://github.com/IbrheemSalem">{{__('words.Githup')}}</a>
        </p>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>
