@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    @if (Auth::user()->role_id == '1')
        <div class="row">
            <div class="col-md-8 m-auto " id="guest-container" style="margin-top: 15% !important">
                <div class="card card-primary card-outline">
                    <div class="card-body text-center">
                        <h5 class="card-title w-100 mb-2">Hello {{ Auth::user()->name }} </h5>

                        <p class="card-text">
                            You have 2 opportunities as visitor, and there are
                        </p>
                        <a href="{{route('profile.index')}}" class="btn btn-primary">My profile</a>
                        <a href="{{route('visitors.books')}}" class="btn btn-primary">My books</a>
                        <a href="{{route('edit.profile',Auth::id())}}" class="btn btn-primary">Edit profile</a>
                        {{-- <a href="#" class="btn btn-primary">My Favorite books</a> --}}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
