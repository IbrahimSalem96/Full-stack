@extends('dashboard.layout.layout')
@section('title', 'Edit User')
@section('body')
<div class="border border-light ">
    <div class="alert alert-secondary" role="alert">
        {{__('words.User Modification')}} : {{$user->name}}
    </div>
    <form action="{{route('dashboard.users.update', $user) }}" method="post">
        @csrf
        @method('PUT')
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
            <label>{{__('words.Name')}} </label>
            <input type="text" class="form-control" name="name"  placeholder="{{__('words.Name')}}" value="{{$user->name}}" aria-label="Name">
        </div>
        <div class="pb-2">
            <label>{{__('words.Email')}} </label>
            <input type="text" class="form-control" name="email" placeholder="{{__('words.Email')}}" value="{{$user->email}}" aria-label="Email">
        </div>
        @can('viewAny', $user)
        <div class="pb-2">
            <label>{{__('words.Status')}}</label>
            <select name="status"  class="form-control">
                <option value="admin" @if ($user->status == 'admin')
                    selected
                @endif>{{__('words.Admin')}}</option>
                <option value="writer" @if ($user->status == 'writer')
                    selected
                @endif>{{__('words.Writer')}}</option>
                <option value="" @if ($user->status == '')
                    selected
                @endif>{{__('words.Not Activated')}}</option>
            </select>
        </div>
        @endcan
        <div class="mt-3">
            <button type="button" class="btn btn-primary" onclick="history.back();">{{__('words.Back')}}</button>
            <button type="submit" class="btn btn-primary">{{__('words.Save')}}</button>
        </div>
    </form>
</div>

@endsection
