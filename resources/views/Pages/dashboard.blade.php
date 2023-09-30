@extends('layouts.dashboard')
@section('content')
<div class=" my-3">
    <h1>Hi {{session("auth")->name}},I am dashboard!</h1>
</div>
@endsection
