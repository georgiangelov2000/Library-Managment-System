@extends('layouts.home')
@section('title', 'Managment System - Users')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <x-header-page message="You can't delete admins, only users!" routeLink="delete.users" buttonID="delete" button="Delete All Records" heading="Users" />
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable table-striped" id="userTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Roles</th>
                                <th>Genders</th>
                                <th>Date of birth</th>
                                <th>Last Seen</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
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
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user['roles']['name'] == 'admin')
                                        <td class="text-center">
                                            <i class="fas fa-user-lock" title="{{ $user['roles']['name'] }}"></i>
                                        </td>
                                    @elseif($user['roles']['name'] == 'visitor')
                                        <td class="text-center">
                                            <i class="fas fa-user-tie" title="{{ $user['roles']['name'] }}"></i>
                                        </td>
                                    @else

                                    @endif
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
                                    <td>{{ $user->dob }}</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $user->id))
                                            <i class=" online-icon ml-4 mr-1 fa fa-circle text-success"
                                                style="font-size:.7rem;"></i>
                                        @else
                                            <i class=" offline-icon ml-4 mr-1 fa fa-circle text-danger"
                                                style="font-size:.7rem;"></i>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('user.delete', $user->id) }}" id="delete" title="delete"
                                            class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/users.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/share.js') }}"> </script>
    @endpush
@endsection
