<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link collapsed" href="{{route('dashboard.setting')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-line"></i></div>
                        {{__('words.Dashboard')}}
                        <div class="sb-sidenav-collapse-arrow"> </i></div>
                    </a>
                    <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                    @can('view', $setting)
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                            {{__('words.User')}}
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('dashboard.users.index')}}"><i class="fa-regular fa-eye pe-3"></i>{{__('words.Show Users')}}</a>
                                <a class="nav-link" href="{{route('dashboard.users.create')}}"><i class="fa-solid fa-plus pe-3"></i>{{__('words.Add User')}}</a>
                            </nav>
                        </div>
                    @endcan
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecategories" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-list-ul"></i></div>
                        {{__('words.Categories')}}
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsecategories" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('dashboard.category.index')}}"><i class="fa-regular fa-eye pe-3"></i>{{__('words.Show categories')}}</a>
                            @can('view', $setting)
                                <a class="nav-link" href="{{route('dashboard.category.create')}}"><i class="fa-solid fa-plus pe-3"></i>{{__('words.Add categorie')}}</a>
                            @endcan
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-paste"></i></div>
                        {{__('words.Posts')}}
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('dashboard.posts.index')}}"><i class="fa-regular fa-eye pe-3"></i>{{__('words.Show Posts')}}</a>
                            <a class="nav-link" href="{{route('dashboard.posts.create')}}"><i class="fa-solid fa-plus pe-3"></i>{{__('words.Add Post')}}</a>
                        </nav>
                    </div>
                    @can('view', $setting)
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMessages" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-envelope"></i></div>
                            {{__('words.Messages')}}
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseMessages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('dashboard.messages.index')}}"><i class="fa-regular fa-eye pe-3"></i>{{__('words.show messages')}}</a>
                                <a class="nav-link" href="{{route('dashboard.messages.create')}}"><i class="fa-solid fa-share pe-3"></i>{{__('words.Sending a Message')}}</a>
                            </nav>
                        </div>
                    @endcan

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLanguages" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-language"></i></div>
                        {{__('words.Languages')}}
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLanguages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="nav-link"  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                @endforeach
                        </nav>
                    </div>
                    @can('view', $setting)
                    <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                    <a class="nav-link" href="{{route('dashboard.settings')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                        {{__('words.Settings')}}
                    </a>
                    @endcan
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main class="p-5">

            @yield('body')

        </main>
    </div>
</div>
