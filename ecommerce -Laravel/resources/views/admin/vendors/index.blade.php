@extends('layouts.masterAdmin')
@section('title', 'Venders')
@section('content')
        <h1 class="p-relative">Venders</h1>
        <div class="projects p-20 bg-white rad-10 m-20">
            <div class="alert alert-primary" role="alert">
                <span>All Venders</span>
            </div>
            <div class="text-end p-2">
                <a href="{{ route('admin.Venders.create') }}">
                    <button type="button" class="btn btn-outline-primary">Add a Vender</button>
                </a>
            </div>
            @include('admin.includes.success')
            @include('admin.includes.errors')
            <div class="responsive-table">
                <table id="myTable" class="table table-striped table-bordered table-responsive table-hover" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Logo</th>
                            <th scope="col">mobile</th>
                            <th scope="col">section</th>
                            <th scope="col">status</th>
                            <th scope="col">procedures</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count_lang = 1;
                        @endphp
                        @isset($vendors)
                            @foreach ( $vendors as $vendor)
                                <tr>
                                    <th scope="row">{{$count_lang++}}</th>
                                    <td>{{ $vendor->name}}</td>
                                    <td><img src="{{$vendor->logo}}" style="width:100px; height:100px"></td>
                                    <td>{{ $vendor->mobile}}</td>
                                    <td>{{ $vendor->categories->name}}</td>
                                    <td>{{ $vendor->getActive()}}</td>
                                    <td>
                                        <a class="text-decoration-none" href="{{ route('admin.Venders.edit', $vendor->id) }}">
                                            <button type="button" class="btn btn-outline-success w-50">edit</button>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('admin.Venders.destroy', $vendor->id) }}">
                                            <button type="button" class="btn btn-outline-danger  w-50">Delete</button>
                                        </a>
                                        <a class="text-decoration-none" href="{{ route('admin.Venders.changeStatus', $vendor->id) }}">
                                            <button type="button" class="btn btn-outline-warning w-50">
                                                @if ($vendor->active == 1)
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
