@extends('layouts.masterAdmin')
@section('title', 'Site languages')
@section('content')
                <!-- Start table Table -->
                <h1 class="p-relative">Site languages</h1>
                <div class="projects p-20 bg-white rad-10 m-20">
                    <div class="alert alert-primary" role="alert">
                        <span>All languages ​​of the site</span>
                    </div>
                    <div class="text-end p-5">
                        <a href="{{ route('admin.languages.create') }}">
                            <button type="button" class="btn btn-outline-primary">Add a language</button>
                        </a>
                    </div>
                    @include('admin.includes.success')
                    @include('admin.includes.errors')
                    <div class="responsive-table">
                        <table class="fs-15 w-full">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Abbreviation</th>
                                    <th scope="col">Direction</th>
                                    <th scope="col">Condition</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count_lang = 1;
                                @endphp
                                    @isset($languages)
                                    @foreach ( $languages as $language)
                                        <tr>
                                            <th scope="row">{{$count_lang++}}</th>
                                            <td>{{ $language->name}}</td>
                                            <td>{{ $language->abbr}}</td>
                                            <td>{{ $language->direction}}</td>
                                            <td>{{ $language->getActive()}}</td>
                                            <td>
                                                <a class="text-decoration-none" href="{{route('admin.languages.edit', $language->id)}}">
                                                    <button type="button" class="btn btn-outline-success">UpDate</button>
                                                </a>
                                                <a class="text-decoration-none" href="{{route('admin.languages.destroy', $language->id)}}">
                                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End table Table -->
@endsection
