@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"> Custom Description</h4>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Custom Description</h5>
                        <a href="{{ route('game.index') }}" class="btn btn-sm btn-primary">
                            <box-icon name='left-arrow-alt'></box-icon>Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('custom_description.store') }}" method="POST">
                            @csrf
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="custom_description">Custom Description </label>
                                <div class="col-sm-10">
                                    <textarea name="custom_description" id="custom_description" class="form-control">{!! $desc?->custom_description !!}</textarea>
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
            .create(document.querySelector('#custom_description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
