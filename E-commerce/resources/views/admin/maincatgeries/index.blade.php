@extends('layouts.masterAdmin')
@section('title', 'Main Catgeries')
@section('content')
        <h1 class="p-relative">Main Catgeries</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
            <div class="alert alert-primary" role="alert">
                <span>All Catgeries ​​of the site</span>
            </div>
            <div class="text-end p-2">
                <a href="{{ route('admin.main_catgeries.create') }}">
                    <button type="button" class="btn btn-outline-primary">Add a Categories</button>
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
                            <th scope="col">language</th>
                            <th scope="col">condition</th>
                            <th scope="col">section image</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count_lang = 1;
                        @endphp
                        @isset($categories)
                            @foreach ( $categories as $categorie)
                                <tr>
                                    <th scope="row">{{$count_lang++}}</th>
                                    <td>{{ $categorie->name}}</td>
                                    <td>{{ $categorie->translation_lang}}</td>
                                    <td>{{ $categorie->getActive()}}</td>
                                    <td><img src="{{asset($categorie->photo)}}" style="width:100px; height:100px"></td>
                                    <td>
                                        <a class="text-decoration-none" href="{{route('admin.main_catgeries.edit', $categorie->id)}}">
                                            <button type="button" class="btn btn-outline-success  w-50">edit </button>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('admin.main_catgeries.destroy', $categorie->id) }}">
                                            <button type="button" class="btn btn-outline-danger w-50">Delete</button>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('admin.main_catgeries.changeStatus', $categorie->id) }}">
                                            <button type="button" class="btn btn-outline-warning w-50">
                                                @if ($categorie->active == 1)
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
