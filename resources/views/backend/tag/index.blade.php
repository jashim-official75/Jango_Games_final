@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
       <h4 class="fw-bold py-3 mb-4"> <a href="{{route('tag.index')}}">All Tags</a></h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <a href="{{route('tag.create')}}" class="btn btn-sm btn-primary">
                    <box-icon name='left-arrow-alt'></box-icon>Add New
                </a>
                <form action="{{route('tag.index')}}" method="GET">
                    <div class="input-group">
                        <div class="form-outline">
                          <input type="search" name="search" placeholder="Enter Tag Name" class="form-control" />
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
                            <th>Icon Class</th>
                            <th>Color Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ ($tags->currentpage() - 1) * $tags->perpage() + $loop->index + 1 }}</td>
                                <td>{{ $tag->title }}</td>
                                <td>{{ $tag->icon_class }}</td>
                                <td>{{ $tag->color_code }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('tag.edit', $tag->id)}}"
                                            class="btn btn-sm btn-primary me-3">Edit</a>
                                        <form action="{{route('tag.destroy',$tag->id)}}" method="post">
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
                {{ $tags->links() }}
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
@endsection
