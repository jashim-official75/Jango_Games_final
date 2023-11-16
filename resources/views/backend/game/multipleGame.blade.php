@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"> Add Multiple Game</h4>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Multiple Game</h5>
                        <a href="{{ route('game.index') }}" class="btn btn-sm btn-primary">
                            <box-icon name='left-arrow-alt'></box-icon>Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('game.multiple.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="game_type">Game Type <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select name="game_type" id="game_type" class="form-control">
                                        <option value="">-Select-</option>
                                        <option value="1">Game Distribution</option>
                                        <option value="2">Game Monetization</option>
                                        <option value="3">Game pix</option>
                                        <option value="4">Naptech Games</option>
                                    </select>
                                    @error('game_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="api_url">Api Url <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="api_url" id="api_url" class="form-control">
                                    @error('api_url')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <input type="hidden" name="custom_description" value="{{ $desc?->id }}">
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
            .create(document.querySelector('#custom_description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
