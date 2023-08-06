@extends('layouts.masterAdmin')
@section('title', 'Product')
@section('content')
        <h1 class="p-relative">Product</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
            <div class="alert alert-primary" role="alert">
                <span>All Product of Vendors</span>
            </div>
            <div class="text-end p-2">
                <a href="{{ route('admin.Product.create') }}">
                    <button type="button" class="btn btn-outline-primary">Add Product</button>
                </a>
            </div>
            @include('admin.includes.success')
            @include('admin.includes.errors')
            <div class="responsive-table">
                <table id="myTable" class="table table-striped table-bordered table-responsive table-hover" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Section</th>
                            <th scope="col">Perant Section</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Status</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count_lang = 1;
                        @endphp
                        @isset($sub_category)
                            @foreach ( $sub_category as $sub)
                                <tr>
                                    <th scope="row">{{$count_lang++}}</th>
                                    <td>{{ $sub->name}}</td>
                                    <td>{{ $sub->translation_lang}}</td>
                                    <td>{{ $sub->getActive()}}</td>
                                    <td><img src="{{asset($sub->photo)}}" style="width:100px; height:100px"></td>
                                    <td>
                                        <a class="text-decoration-none" href="{{route('admin.SubCategory.edit', $sub->id)}}">
                                            <button type="button" class="btn btn-outline-success  w-50">edit </button>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('admin.SubCategory.destroy', $sub->id) }}">
                                            <button type="button" class="btn btn-outline-danger w-50">Delete</button>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('admin.SubCategory.changeStatus', $sub->id) }}">
                                            <button type="button" class="btn btn-outline-warning w-50">
                                                @if ($sub->active == 1)
                                                    inactive
                                                @else
                                                    active
                                                @endif
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>




















@endsection
