    <!-- Topbar Start -->
    <div class="container">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">{{__('words.Tranding')}}</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        @foreach ($lastFivePosts as $post)
                            <div class="text-truncate"><a class="text-secondary" href="{{Route('post',$post->id)}}">{{ $post->title }}</a></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                {{ Date('D|d - M - Y') }}
            </div>
        </div>
        <div class="container d-flex justify-content-between">
            <div class="d-block ">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">{{__('words.Blog')}}</span></h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{route('index')}}" class="nav-item nav-link active">{{__('words.Home')}}</a>
                    <div class="nav-item dropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{__('words.Categories')}}</a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $Category)
                                        <li><a class="dropdown-item" href="{{Route('category',$Category->id)}}">{{$Category->title}}@if ($Category->children->count() > 0) &raquo; @endif</a>
                                            @if ($Category->children->count()>0)
                                                <ul class="submenu dropdown-menu">
                                                    @foreach ( $Category->children as $child)
                                                        <li><a class="dropdown-item" href="{{Route('category',$child->id)}}">{{$child->title}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('contacts.index')}}" class="nav-item nav-link" style="white-space: nowrap;">{{__('words.Contact')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{__('words.languages')}}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('words.Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('words.Register') }}</a>
                                    </li>
                                @endif
                            @else

                                </li>
                                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{route('dashboard.setting')}}">{{__('words.Go To Dashboard')}}</a></li>
                                            <li><hr class="dropdown-divider" /></li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('words.Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            @endguest
                        </ul>
                    </div>
                </div>
        </nav>
    </div>
    <!-- Navbar End -->


