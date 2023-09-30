<div class=" my-4">
    {{-- Pages --}}
    <div class=" my-3">
        <h5>Pages</h5>
        <div class="list-group my-3">
            <a href="{{route("page.home")}}" class="  list-group-item list-group-item-action">Home </a>
            <a href="{{route("page.dashboard")}}" class="  list-group-item list-group-item-action">Dashboard </a>
        </div>
    </div>
    {{-- Users  --}}
    <div class=" my-3">
        <h5>User Management</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">User List </a>

        </div>
    </div>
    {{-- Article Controller --}}
    <div class=" my-3">
        <h5>Articles Management</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Create New Article </a>
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Created Articles </a>
        </div>
    </div>
    {{-- Category Controller --}}
    <div class=" my-3">
        <h5>Category Management</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Create New Category</a>
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Created Categories</a>
        </div>
    </div>
    {{-- Profile --}}
    <div class=" my-3">
        <h5>Profile Management</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Profile </a>
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Change Password </a>
        </div>
    </div>
    {{-- Logout --}}
    <div class=" my-3">
        <div class="list-group my-3">
            <a href="{{route("page.dashboard.logout")}}" class="list-group-item-danger  list-group-item list-group-item-action ">Logout</a>
        </div>
    </div>
</div>
