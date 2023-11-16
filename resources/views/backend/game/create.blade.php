@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"> Add Single Game</h4>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Single Game</h5>
                        <a href="{{ route('game.index') }}" class="btn btn-sm btn-primary">
                            <box-icon name='left-arrow-alt'></box-icon>Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_name">Game Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="game_name" id="game_name" class="form-control">
                                    @error('game_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_url">Game Url <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="game_url" id="game_url" class="form-control">
                                    @error('game_url')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_type">Game Type <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select name="game_type" id="game_type" class="form-control">
                                        <option value="">-Select Game Type-</option>
                                        <option value="1">Game Destribution</option>
                                        <option value="2">Game Monetization</option>
                                        <option value="3">Game pix</option>
                                        <option value="4">Naptech Labs</option>
                                    </select>
                                    @error('game_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_category">Game Category <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select id="game_category" class="form-control" name="game_category[]" multiple="multiple">
                                        <option value="">-Select Game Category-</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->title}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('game_category')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_tag">Game Tag</label>
                                <div class="col-sm-10">
                                    <select name="game_tag[]" id="game_tag" class="form-control" multiple="multiple">
                                        <option value="">-Select Game Tag-</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{$tag->title}}">{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('game_tag')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_paid">Recommended Games </label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="game_paid" id="inlineRadio1"
                                            value="1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="game_paid" id="inlineRadio2"
                                            value="0">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                    @error('game_paid')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="exclusive_game">Best Game </label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="exclusive_game"
                                            id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exclusive_game"
                                            id="inlineRadio2" value="0">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                    @error('exclusive_game')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="featured_game">Featured Game </label>
                                <div class="col-sm-10">
                                    <div class="form-check form-check-inline mt-3">
                                        <input class="form-check-input" type="radio" name="featured_game"
                                            id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="featured_game"
                                            id="inlineRadio2" value="0">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                    @error('featured_game')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="description">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="" name="description" id="description" class="form-control"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="thumbnail">Game Thumbnail <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    @error('thumbnail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
        //category multiple select
        $(document).ready(function() {
            $('#game_category').select2();
        });

         //game_tag multiple select
         $(document).ready(function() {
            $('#game_tag').select2();
        });
    </script>
@endsection
