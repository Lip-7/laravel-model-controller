@extends('layouts.app')
@section('content')
<div class="showWrap my-5 container d-flex">
    {{-- <div class="row">
        <div class="col-12 col-lg-6">
            <div class="imgWrap">
                <img class="w-100" src="{{$image}}" alt="{{$title}}">
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="movieInfo mt-5">
                <h1 class=" text-center mb-5">{{$title}}</h1>
                <div class="title d-flex justify-content-center gap-3 align-items-center my-4">
                    <h4>Original title: </h4>
                    <h3 class="text-uppercase">{{$original_title}}</h3>
                </div>
                <div class="nation d-flex justify-content-center gap-3 align-items-center my-4">
                    <h4>Nationality: </h4>
                    <h3 class="text-uppercase">{{$nationality}}</h3>
                </div>
                <div class="published d-flex justify-content-center gap-3 align-items-center my-4">
                    <h4>Published: </h4>
                    <h3 class="text-uppercase">{{$date}}</h3>
                </div>
                <div class="Vote d-flex justify-content-center gap-3 align-items-center my-4">
                    <h4>Vote: </h4>
                    <h3 class="text-uppercase">{{$vote}}</h3>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="imgwrap">
        <img src="{{$image}}" alt="{{$title}}">
    </div>
    <div class="movieInfo ps-4 mt-5 flex-grow-1">
        <h1 class=" ms-5 mb-5">{{$title}}</h1>
        <div class="title d-flex justify-content-start ms-5 gap-3 align-items-center my-4">
            <h4>Original title: </h4>
            <h3 class="text-uppercase">{{$original_title}}</h3>
        </div>
        <div class="nation d-flex justify-content-start ms-5 gap-3 align-items-center my-4">
            <h4>Nationality: </h4>
            <h3 class="text-uppercase">{{$nationality}}</h3>
        </div>
        <div class="published d-flex justify-content-start ms-5 gap-3 align-items-center my-4">
            <h4>Published: </h4>
            <h3 class="text-uppercase">{{$date}}</h3>
        </div>
        <div class="Vote d-flex justify-content-start ms-5 gap-3 align-items-center my-4">
            <h4>Vote: </h4>
            <h3 class="text-uppercase">{{$vote}}</h3>
        </div>
    </div>
    {{-- <div class="imgwrap">
        <img src="{{$image}}" alt="{{$title}}">
    </div>
    <div class="movieInfo mt-5 flex-grow-1">
        <h1 class=" text-center mb-5">{{$title}}</h1>
        <div class="title d-flex justify-content-center gap-3 align-items-center my-4">
            <h4>Original title: </h4>
            <h3 class="text-uppercase">{{$original_title}}</h3>
        </div>
        <div class="nation d-flex justify-content-center gap-3 align-items-center my-4">
            <h4>Nationality: </h4>
            <h3 class="text-uppercase">{{$nationality}}</h3>
        </div>
        <div class="published d-flex justify-content-center gap-3 align-items-center my-4">
            <h4>Published: </h4>
            <h3 class="text-uppercase">{{$date}}</h3>
        </div>
        <div class="Vote d-flex justify-content-center gap-3 align-items-center my-4">
            <h4>Vote: </h4>
            <h3 class="text-uppercase">{{$vote}}</h3>
        </div>
    </div> --}}


</div>

@endsection
