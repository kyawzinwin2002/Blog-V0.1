<div class=" d-flex my-4 gap-5 align-items-start">
    {{-- Photo & Uploader --}}
    <div class=" d-flex flex-column">

    <img src="@if (!is_null(session("auth")->photo))
    {{asset('storage/' . session("auth")->photo)}}
    @else
    {{asset("storage/photos/profile.jpg")}}
    @endif" class="rounded-5" width="200" alt="">
    <div class=" mt-5">
        <h5>Upload Your Profile Picture</h5>
        <form action="{{route("page.dashboard.photo")}}" method="POST" enctype="multipart/form-data" class="mt-3 input-group">
            @csrf
            <input type="file" name="photo" placeholder="Choose Your Photo.." accept="image/png,image/jpg,image/jpeg">
            <button class=" btn btn-primary">Upload</button>
        </form>
    </div>
    </div>

    <div class=" d-flex flex-column gap-3 ">
        {{-- Name and Role --}}
       <div class=" d-flex gap-2">
        <h3>{{session("auth")->name}}</h3>
        <div class=" badge bg-black d-flex align-items-center">
            <span>{{session("auth")->role->name}}</span>
        </div>
       </div>
       {{-- Email  --}}
       <div class="">
        <h5>{{session("auth")->email}}</h5>
       </div>
    </div>
</div>
