@extends('layouts.app')
@section('content')
@if (session("message"))
    <div class=" alert alert-success">
        {{session("message")}}
    </div>
@endif

<div class="row gap-5 justify-content-center">
    <div class="col-3">
       @include('layouts.sidebar')
    </div>
    <div class="col-8">
        @include('layouts.profile')
    </div>
 </div>
@endsection
