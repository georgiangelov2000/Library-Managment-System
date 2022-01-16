@extends('admin.home')
@section('title', 'Managment System - Users')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="row m-auto pt-2">
        @include('components.success-box.successfullly-message')
        <div>
            <div class="card shadow-none">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover" id="userTable">
                        <thead>
                            <tr>
                                <th>#</th>
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
                            @foreach ($allData as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ !empty($value->image) ? url('upload/images/' . $value->image) : url('upload/images/noimage.png') }}  "
                                            class="rounded d-block" style="width:50px" alt="...">
                                    </td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    @if ($value->role_id == 2)
                                        <td class="text-center">
                                            <i class="fas fa-user-lock"></i>
                                        </td>
                                    @elseif($value->role_id == 1)
                                        <td class="text-center">
                                            <i class="fas fa-user-tie"></i>
                                        </td>
                                    @else

                                    @endif
                                    @if ($value->gender_id == 1)
                                        <td class="text-center">
                                            <i style="font-size:2rem" class="fas fa-male text-primary"></i>
                                        </td>
                                    @elseif($value->gender_id == 2)
                                        <td class="text-center">
                                            <i style="font-size:2rem" class="fas fa-female text-danger"></i>
                                        </td>
                                    @else
                                        <td class="text-center">

                                        </td>
                                    @endif
                                    <td>{{ $value->dob }}</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($value->last_seen)->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $value->id))
                                            <span class="text-success">Online</span>
                                        @else
                                            <span class="text-danger">Offline</span>
                                        @endif
                                    </td>
                                    <td>{{ $value->created_at }}</td>
                                    <td>{{ $value->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $value->id) }}" title="edit" id="edit"
                                            class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('user.delete', $value->id) }}" id="delete" title="delete"
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
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@endsection
