<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('frontAdmin/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontAdmin/css/framework.css')}}"/>
        <link rel="stylesheet" href="{{asset('frontAdmin/css/master.css')}}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }
        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }
        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        </style>
  <body>
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">{{ Auth::user()->name }}</h3>
        <ul class="p-0">
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('index-admin') }}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('admin.languages.settings') }}">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Site languages</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('admin.main_catgeries.sections') }}">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>Sections</span><span class="ps-4">{{ App\Models\Admin\MainCatgorie::defaultCategory()->count() }}</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('admin.Venders.index') }}">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Venders</span> <span class="ps-4">{{ App\Models\Admin\vendor::count() }}</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('admin.SubCategory.index') }}">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>SubCategory</span> <span class="ps-4">{{ App\Models\Admin\SubCategory::defaultSubCategory()->count() }}</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{ route('admin.Product.index') }}">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Product</span> <span class="ps-4">{{ App\Models\Admin\Product::defaultSubCategory()->count() }}</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span>
            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }} <i class="ms-2 fa-solid fa-right-from-bracket"></i>

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </span>
          </div>
        </div>
        <!-- End Head -->




        @yield('content')


        <script>
            $(document).ready(function(){
                $('#myTable').dataTable();
            });
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
    </body>
    </html>


