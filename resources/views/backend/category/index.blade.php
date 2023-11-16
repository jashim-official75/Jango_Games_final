@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><a href="{{route('category.index')}}">All Category</a></h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-primary">
                    <box-icon name='left-arrow-alt'></box-icon>Add New
                </a>
                <form action="{{route('category.index')}}" method="GET">
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
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Description</th>
                            <th>Mata Title</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ ($categories->currentpage() - 1) * $categories->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ strip_tags(Str::limit($category->sub_title, 10)) }}</td>
                                <td>{!! strip_tags(Str::limit($category->description, 10)) !!}</td>
                                <td>{{ strip_tags(Str::limit($category->meta_title, 10)) }}</td>
                                <td>
                                    <img src="{{asset('uploads/Category/'. $category->thumbnail ) }}" width="80px" height="80px"
                                        class="rounded-circle">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('category.edit',$category->id)}}"
                                            class="btn btn-sm btn-primary me-3">Edit</a>
                                        <form action="{{route('category.destroy',$category->id)}}" method="post">
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
                {{ $categories->links() }}
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
@endsection
