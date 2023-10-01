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
            <a href="{{route("users.index")}}" class="  list-group-item list-group-item-action">User List </a>

        </div>
    </div>
    {{-- Article Controller --}}
    <div class=" my-3">
        <h5>Articles</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Create New Article </a>
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Created Articles </a>
        </div>
    </div>
    {{-- Category Controller --}}
    <div class=" my-3">
        <h5>Categories</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Create New Category</a>
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Created Categories</a>
        </div>
    </div>
    {{-- Profile --}}
    <div class=" my-3">
        <h5>Profile Management</h5>
        <div class="list-group my-3">
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Profile

                @if (is_null(session("auth")->email_verified_at))
                <span class=" badge bg-danger">Need Verify!</span>
                @endif

            </a>
            <a href="{{route("page.profile")}}" class="  list-group-item list-group-item-action">Change Password </a>
        </div>
    </div>
    {{-- Logout --}}
    <div class=" my-3">
        <div class="list-group my-3">
            <a href="{{route("page.dashboard.logout")}}" class="list-group-item-danger bg-danger text-white  list-group-item list-group-item-action ">Logout</a>
        </div>
    </div>
</div>
