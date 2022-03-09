@extends('layouts.home')
@section('title', 'Managment System - Profile')

@section('content')

    <div class="col d-flex align-center justify-content-between col-md-8 mb-4">
    </div>

    <div class="col-md-3">

        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                        alt="...">
                </div>
                <h3 class="profile-username text-center">{{ $user->name }}</h3>
                <p class="text-muted text-center">{{ $user->email }}</p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Date of birth</b> <a class="float-right">{{ $user->dob }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Gender</b> <a class="float-right">
                            @if ($user['genders']['name'] == 'm')
                                male
                            @elseif ($user['genders']['name'] == 'f')
                                famale
                            @endif
                        </a>
                    </li>
                    <li class="list-group-item">
                        <b>Role</b> <a class="float-right">
                            <a class="float-right">
                            @if ($user['roles']['name'] === 'visitor')
                                user
                            @endif
                        </a>
                    </li>
                    <li class="list-group-item">
                        <b>Created At</b> <a class="float-right">
                            {{ $user->created_at }}
                        </a>
                    </li>
                    <li class="list-group-item">
                        <b>Updated At</b> <a class="float-right">
                            {{ $user->updated_at }}
                        </a>
                    </li>
                </ul>
                <a href="{{ route('edit.admin.profile') }}" class="btn btn-primary btn-block"><b>Update profile</b></a>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/share.js') }}"> </script>
    @endpush
@endsection
