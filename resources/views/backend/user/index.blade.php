@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><a href="{{route('category.index')}}">All Users</a></h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <a href="{{route('register')}}" class="btn btn-sm btn-primary">
                    <box-icon name='left-arrow-alt'></box-icon>Add New
                </a>
                <form action="{{route('user.index')}}" method="GET">
                    <div class="input-group">
                        <div class="form-outline">
                          <input type="search" name="search" placeholder="Enter Category Name" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-primary">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                </form>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ ($users->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    @if($user->status == 0)
                                    Admin
                                    @else
                                    Editor
                                    @endif

                                </td>
                                <td>
                                    @if ($user->image)
                                    <img src="{{asset('uploads/Admin/'. $user->image ) }}" width="80px" height="80px"
                                    class="rounded-circle">
                                    @else
                                        NA
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        {{-- <a href="{{route('category.edit',$user->id)}}"
                                            class="btn btn-sm btn-primary me-3">Edit</a> --}}
                                        @if ($user->status == 0)
                                        @else
                                        <form action="{{route('user.destroy',$user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">delete</button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
@endsection
