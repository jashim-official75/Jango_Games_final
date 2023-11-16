@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"> Edit Category</h4>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Edit Category</h5>
                        <a href="{{ route('category.index') }}" class="btn btn-sm btn-primary">
                            <box-icon name='left-arrow-alt'></box-icon>Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="title">category Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" id="title" class="form-control" value="{{$category->title}}">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="icon_class">Icon Class Name<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="icon_class" id="icon_class" value="{{$category->icon_class }}" class="form-control">
                                    @error('icon_class')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="sub_title">Sub Title</label>
                                <div class="col-sm-10">
                                    <textarea name="sub_title" id="sub_title" class="form-control">{{ $category->sub_title }}</textarea>
                                    @error('sub_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="file" name="description" id="description" class="form-control">{!! $category->description !!}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="meta_title">Meta Title</label>
                                <div class="col-sm-10">
                                    <textarea name="meta_title" id="meta_title" class="form-control">{{ $category->meta_title }}</textarea>
                                    @error('meta_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="meta_description">Meta Description</label>
                                <div class="col-sm-10">
                                    <textarea name="meta_description" id="meta_description" class="form-control">{{ $category->meta_description }}</textarea>
                                    @error('meta_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="meta_keyword">Meta Keyword</label>
                                <div class="col-sm-10">
                                    <textarea name="meta_keyword" id="meta_keyword" class="form-control">{{ $category->meta_keyword }}</textarea>
                                    @error('meta_keyword')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="thumbnail"> Thumbnail</label>
                                <div class="col-sm-10">
                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    @error('thumbnail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    @if ($category->thumbnail)
                                        <img src="{{asset('uploads/Category/'.$category->thumbnail)}}" alt="" width="100px" class="mt-2">
                                    @endif
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@section('admin_script')
    <script>
        //editor
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
