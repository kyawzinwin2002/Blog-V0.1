<div class=" d-flex my-4">
    <img src="{{session("auth")->photo}}" width="200" alt="">
    <div class=" d-flex flex-column gap-3">
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
