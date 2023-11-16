@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><a href="{{route('banner.index')}}">All Banner</a></h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <a href="{{route('banner.create')}}" class="btn btn-sm btn-primary">
                    <box-icon name='left-arrow-alt'></box-icon>Add New
                </a>
                <form action="{{route('banner.index')}}" method="GET">
                    <div class="input-group">
                        <div class="form-outline">
                          <input type="search" name="search" placeholder="Search Here..." class="form-control" />
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
                            <th>Game Name</th>
                            <th>Title</th>
                            <th>Position</th>
                            <th>Banner Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{ ($banners->currentpage() - 1) * $banners->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $banner->name }}</td>
                                <td>{{ strip_tags(Str::limit($banner->title, 10)) }}</td>
                                <td>
                                    @if ($banner->position == 0)
                                        Left
                                    @else
                                    Right
                                    @endif
                                </td>
                                <td>
                                    <img src="{{asset('uploads/banner/'. $banner->banner_image ) }}" width="80px" height="80px"
                                        class="rounded-circle">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('banner.edit',$banner->id)}}"
                                            class="btn btn-sm btn-primary me-3">Edit</a>
                                        <form action="{{route('banner.destroy',$banner->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $banners->links() }}
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
@endsection
