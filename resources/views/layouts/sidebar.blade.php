<div class=" my-4">
    {{-- Pages --}}
    <div class=" my-3">
        <h5>Pages</h5>
        <ul class=" list-group list-unstyled ">
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Dashboard</a>
            </li>
        </ul>
    </div>
    {{-- Users  --}}
    <div class=" my-3">
        <h5>User Management</h5>
        <ul class=" list-group list-unstyled ">
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">User List</a>
            </li>
        </ul>
    </div>
    {{-- Article Controller --}}
    <div class=" my-3">
        <h5>Articles Management</h5>
        <ul class=" list-group list-unstyled ">
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Create New Article</a>
            </li>
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Created Articles</a>
            </li>
        </ul>
    </div>
    {{-- Category Controller --}}
    <div class=" my-3">
        <h5>Category Management</h5>
        <ul class=" list-group list-unstyled ">
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Create New Category</a>
            </li>
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Created Categories</a>
            </li>
        </ul>
    </div>
    {{-- Profile --}}
    <div class=" my-3">
        <h5>Profile Management</h5>
        <ul class=" list-group list-unstyled ">
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Profile</a>
            </li>
            <li class=" list-group-item ">
                <a href="{{ route('page.dashboard') }}"
                    class=" text-decoration-none text-black list-group-item-action">Change Password</a>
            </li>

        </ul>
    </div>
    {{-- Logout --}}
    <div class=" my-3">
        <ul class=" list-group list-unstyled ">
            <li class=" list-group-item bg-danger">
                <a href="{{ route('page.dashboard.logout') }}"
                    class=" text-decoration-none text-black  list-group-item-action">Logout</a>
            </li>
        </ul>
    </div>
</div>
