@extends('dashboard.layout.layout')
@section('title', 'send a reply')
@section('body')
<div class="alert alert-dark" role="alert">
    <span>{{__('words.Messages')}} : {{$contact->name}}</span>
</div>
<form class="row g-3" action="" method="POST">
    @csrf
    <div class="col-12">
        <label for="inputEmail4" class="form-label">{{__('words.Email')}}</label>
        <input type="email" class="form-control" placeholder="Example@email.com" value="{{$contact->email}}" id="inputEmail4">
    </div>
    <div class="col-6">
        <label for="inputAddress" class="form-label">{{__('words.Mobile')}}</label>
        <input type="text" class="form-control" placeholder="00000000000" id="inputAddress" placeholder="1234 Main St" maxlength="12">
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">{{__('words.Address')}}</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">{{__('words.Messages')}}</label>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">{{__('words.The reason for the message')}}</label>
        <select id="inputState" class="form-select">
            <option selected>{{__('words.Choose...')}}</option>
            <option>{{__('words.warning')}}</option>
            <option>{{__('words.motivation letter')}}</option>
            <option>{{__('words.Privacy violation')}}</option>
            <option>{{__('words.Posting ban and account deletion')}}</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">{{__('words.Send')}}</button>
    </div>
</form>
@endsection
