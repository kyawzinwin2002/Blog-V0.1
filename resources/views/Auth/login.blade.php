@extends('layouts.app')
@section('content')
<div class=" vh-100 w-100  d-flex justify-content-center align-items-baseline py-5">
    <div class=" w-50 ">
        <div class=" text-center">
        <h3>Login Here!</h3>

        </div>
        <div class="">
            <form action="{{route("auth.login.check")}}" method="POST" class=" ">
                @csrf

                {{-- Email --}}
                <div class="my-3">
                    <label for="" class=" form-label">Email</label>
                    <input required type="email" name="email" class=" form-control @error("email")
                          is-invalid
                    @enderror" placeholder="Enter Your Email...">
                    @error('email')
                      <div class=" invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="my-3">
                    <label for="" class=" form-label">Password</label>
                    <input required type="password" name="password" class=" form-control @error("password")
                          is-invalid
                    @enderror" placeholder="Password">
                    @error('password')
                      <div class=" invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>



                {{-- Submmit Button --}}
                <div class="my-3">
                    <button class=" btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
