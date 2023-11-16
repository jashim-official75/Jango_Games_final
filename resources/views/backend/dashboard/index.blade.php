@extends('layouts.backend.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations
                                    {{ Auth::user()->name }}!
                                    🎉</h5>
                                <p class="mb-4">
                                    Welcome to the world of Hyper Casual gaming, where we publish all HTML5 games. We are an exciting new platform for gamers who love playing these types of hyper-casual titles!
                                </p>

                                <a href="{{url('/')}}" class="btn btn-sm btn-outline-primary">View Website</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/backend/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 order-1">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Total Game</span>
                                <a href="{{route('game.index')}}"><h3 class="card-title mb-2">{{$games}}</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">All Categories</span>
                                <a href="{{route('category.index')}}"><h3 class="card-title mb-2">{{$category}}</h3></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">Total Blogs</span>
                                <h3 class="card-title mb-2">4</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1">All Users</span>
                                <h3 class="card-title mb-2">3</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
