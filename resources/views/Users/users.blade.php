@extends('layouts.dashboard')
@section('content')
    <div class=" my-3">
        <h3>User List</h3>
        <table class=" table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Articles</th>
                    <th>Categories</th>
                    <th>Role</th>
                    <th>Action</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>
                        <div class=" d-flex gap-2">
                            {{-- Change Role Dropdown --}}
                            @can("viewAny",$user)
                            @endcan
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Change Role
                                </button>
                                <ul class="dropdown-menu">
                                <li>
                                    <form action="{{route("users.role")}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="2" name="role_id">
                                        <input type="hidden" value="{{$user->id}}" name="id">
                                        <button class="dropdown-item">Administrator</button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{route("users.role")}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="1" name="role_id">
                                        <input type="hidden" value="{{$user->id}}" name="id">
                                        <button class="dropdown-item">User</button>
                                    </form>
                                </li>
                                </ul>
                            </div>
                              {{-- Active Suspend --}}
                              @if ($user->suspended)
                              <a href="{{route("users.active",["id" => $user->id])}}" class=" btn btn-outline-danger">Suspended</a>
                              @else
                              <a href="{{route("users.ban",["id" => $user->id])}}" class=" btn btn-outline-success">Active</a>

                              @endif
                        </div>
                    </td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="9">
                        <div class=" text-center">
                            <h4>There is no user!</h4>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <div class="">
            {{$users->onEachSide(1)->links()}}
        </div>
    </div>
@endsection
