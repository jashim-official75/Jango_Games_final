@extends('layouts.backend.app')
@section('content')
    <style>
        #search::placeholder {
            font-size: 12px;
        }
    </style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><a href="{{ route('game.index') }}">All Game</a></h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <a href="{{ route('game.create') }}" class="btn btn-sm btn-primary me-2">
                    <box-icon name='left-arrow-alt'></box-icon>Add New
                </a>

                <a href="#" class="btn btn-sm btn-danger me-2" id="selectedGameDelete">
                    <box-icon name='left-arrow-alt'></box-icon>Delete Selected Game
                </a>

                <a href="{{ route('allGame.delete') }}" class="btn btn-sm btn-warning me-2" id="all_game_delete">
                    <box-icon name='left-arrow-alt'></box-icon>All Game Delete
                </a>

                <a class="btn btn-sm btn-primary me-auto" style="color:white;">Total Game ({{$total_games}})
                </a>

                <form action="{{ route('game.index') }}" method="GET">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" name="search" placeholder="Enter Game Name Or Position"
                                class="form-control" id="search" />
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
                            <th><input type="checkbox" id="allselect"></th>
                            <th>#</th>
                            <th>Game Type</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($games as $game)
                            <tr class="serialId{{ $game->id }}">
                                <td><input type="checkbox" class="singleCheckbox" id="singleCheckbox" name="singleCheck"
                                        value="{{ $game->id }}"></td>
                                <td>{{ ($games->currentpage() - 1) * $games->perpage() + $loop->index + 1 }}</td>
                                <td>
                                    @php
                                        if ($game->type == 1) {
                                            echo 'Game Destribution';
                                        } elseif ($game->type == 2) {
                                            echo 'Game Monetization';
                                        } elseif ($game->type == 3) {
                                            echo 'Game Pix';
                                        } else {
                                            echo 'Naptech Labs';
                                        }
                                    @endphp
                                </td>
                                <td>{{ $game->name }}</td>
                                <td>
                                    @if ($game?->gameCategory?->category_name != null)
                                        {{ $game?->gameCategory?->category_name }}
                                    @else
                                        {{ $game?->gameCategory?->Category?->title }}
                                    @endif
                                </td>
                                <td>
                                    @if ($game->thumbnail == null)
                                        <img src="{{ $game->image_link }}" width="80px" height="80px"
                                            class="rounded-circle">
                                    @else
                                        <img src="{{ asset('uploads/Games/' . $game->thumbnail) }}" width="80px"
                                            height="80px" class="rounded-circle">
                                    @endif
                                </td>
                                <td>{{ $game->serial_number ?? '' }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('game.edit', $game->id) }}"
                                            class="btn btn-sm btn-primary me-3">Edit</a>
                                        <form action="{{ route('game.destroy', $game->id) }}" method="post">
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
                {{ $games->links() }}
            </div>
        </div>
        <!--/ Bootstrap Table with Header Dark -->
    </div>
@endsection

@section('admin_script')
    <!------selected game delete Start ---->
    <script>
        $(function(e) {
            $('#allselect').click(function() {
                $('.singleCheckbox').prop('checked', $(this).prop('checked'));
            });

            $('#selectedGameDelete').click(function(e) {
                e.preventDefault();
                var allGameId = [];
                $("input:checkbox[name=singleCheck]:checked").each(function() {
                    allGameId.push($(this).val());
                });

                $.ajax({
                    url: "{{ route('selectedGameDelete') }}",
                    type: "DELETE",
                    data: {
                        allGameId: allGameId
                    },

                    success: function(response) {
                        if (response['status'] == true) {
                            $("input:checkbox[name=singleCheck]:checked").each(function() {
                                $(this).parents("tr").remove();
                            });
                            alert(response['message']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function(response) {
                        alert(response.responseText);
                    }
                });
            });
        });
    </script>
    <!------selected game delete End---->
@endsection
