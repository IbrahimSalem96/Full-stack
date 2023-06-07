@extends('dashboard.layout.layout')
@section('title', 'Add User')
@section('body')
<div class="border border-light ">
    <div class="alert alert-secondary" role="alert">
        {{__('words.Add User')}}
    </div>
    <form action="{{route('dashboard.users.store')}}" method="post">
        @csrf
        @method('POST')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="pb-2">
            <input type="text" name="name" class="form-control" placeholder="{{__('words.Name')}}" aria-label="Name">
        </div>
        <div class="pb-2">
            <input type="text" name="email" class="form-control" placeholder="{{__('words.Email')}}" aria-label="Email">
        </div>
        <div class="pb-2">
            <label>{{__('words.Status')}}</label>
            <select name="status"  class="form-control">
                <option></option>
                <option value="admin">{{__('words.Admin')}}</option>
                <option value="writer">{{__('words.Writer')}}</option>
                <option value="">{{__('words.Not Activated')}}</option>
            </select>
        </div>
        <div class="pb-2">
            <input type="password" name="password" class="form-control" placeholder="{{ __('words.password') }}" >
        </div>
        <div class="mt-3">
            <button type="button" class="btn btn-primary" onclick="history.back();">{{__('words.Back')}}</button>
            <button type="submit" class="btn btn-primary">{{__('words.Save')}}</button>
        </div>
    </form>
</div>
@endsection
