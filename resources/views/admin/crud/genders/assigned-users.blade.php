@extends('layouts.home')
@section('title', 'Managment System - Assigned Users')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div class="col-12 p-4">
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable table-striped" id="assigned-users">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Last Seen</th>
                                <th>Status</th>
                                <th>Date of birth</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                                            alt="...">
                                    </td>
                                    <td> {{ $user->name }}</td>
                                    <td> {{ $user->email }}</td>
                                    @if ($user['genders']['name'] == 'm')
                                        <td class="text-center">
                                            <i class="fa fa-mars text-primary"></i>
                                        </td>
                                    @elseif($user['genders']['name'] == 'f')
                                        <td class="text-center">
                                            <i class="fa fa-mercury text-danger"></i>
                                        </td>
                                    @else
                                        <td class="text-center">

                                        </td>
                                    @endif
                                    <td>
                                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $user->id))
                                            <i class=" online-icon  ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i>
                                        @else
                                            <i class=" offline-icon ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $user->dob }}
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/assigned_users.js') }}"></script>
    @endpush
@stop
