@extends('layouts.masterAdmin')
@section('title', 'Sections')
@section('content')
        <h1 class="p-relative">Sections</h1>
        <div class="container">
            <div class="alert alert-primary" role="alert">
                <span>The Number Of Sections : {{App\Models\Admin\MainCatgories::count()}}</span>
            </div>
        </div>
@endsection
