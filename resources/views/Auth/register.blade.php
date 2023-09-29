@extends('layouts.app')
@section('content')
<div class=" vh-100 w-100  d-flex justify-content-center align-items-baseline py-5">
    <div class=" w-50 ">
        <div class=" text-center">
        <h3>Register Here!</h3>

        </div>
        <div class="">
            <form action="{{route("auth.register.store")}}" method="POST" class=" ">
                @csrf

                {{-- Name --}}
                <div class="my-3">
                    <label for="" class=" form-label">FullName</label>
                    <input required type="text" value="{{old("name")}}" name="name" class=" form-control @error("name")
                          is-invalid
                    @enderror" placeholder="Enter Your Full Name...">
                    @error('name')
                      <div class=" invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="my-3">
                    <label for="" class=" form-label">Email</label>
                    <input required type="email" value="{{old("email")}}" name="email" class=" form-control @error("email")
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

                {{-- Confirm Password --}}
                <div class="my-3">
                    <label for="" class=" form-label">Confirm Password</label>
                    <input required type="password" name="password_confirmation" class=" form-control @error("password_confirmation")
                          is-invalid
                    @enderror" placeholder="ConfirmPassword">
                    @error('password_confirmation')
                      <div class=" invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                </div>

                {{-- Submmit Button --}}
                <div class="my-3">
                    <button class=" btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
