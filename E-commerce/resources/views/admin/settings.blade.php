@extends('layouts.masterAdmin')
@section('title', 'Site languages')
@section('content')
        <h1 class="p-relative">Site languages</h1>
        <div class="container m-20 d-grid gap-20 ">
        <!-- Start Settings Box -->
        <div class="p-20 bg-white rad-10 ">
            <div class="alert alert-primary" role="alert">
                <span>All languages ​​of the site</span>
            </div>
            @include('admin.includes.success')
            @include('admin.includes.errors')
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Abbreviation</th>
                            <th scope="col">Direction</th>
                            <th scope="col">Condition</th>
                            <th scope="col">Procedures</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($languages)
                            @foreach ( $languages as $language)
                                <tr>
                                    <th scope="row">{{$language->id}}</th>
                                    <td>{{ $language->name}}</td>
                                    <td>{{ $language->abbr}}</td>
                                    <td>{{ $language->direction}}</td>
                                    <td>{{ $language->active}}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-success">Success</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset

                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!-- End Settings Box -->
@endsection
