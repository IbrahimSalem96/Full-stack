@extends('dashboard.layout.layout')
@section('title', 'index')
@section('body')
<div class="container-fluid px-4">
    <h1 class="mt-4"><i class="fa-solid fa-chart-line"></i> {{__('words.Dashboard')}}</h1>
    <div class="row mt-5">
        <div class="col-12 col-xl-4 col-md-6 col-sm-12">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><i class="fa-regular fa-thumbs-up"></i> {{__('words.Total Likes')}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">{{__('words.View Details')}}</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 col-md-6 col-sm-12">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body"><i class="fa-regular fa-comments"></i> {{__('words.Comments')}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">{{__('words.View Details')}}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 col-md-6 col-sm-12">
            <div class="card bg-success text-white mb-4">
                <div class="card-body"><i class="fa-solid fa-share"></i> {{__('words.Total Share')}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#"> </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 col-md-6 col-sm-12">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body"><i class="fa-regular fa-envelope"></i> {{__('words.Messages')}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">{{__('words.View Details')}}</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
