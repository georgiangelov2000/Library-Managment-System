@extends('admin.home')
@section('title', 'Managment System - Admins')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="row m-auto pt-2">
        <div>
            <div class="card">
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover dataTable" id="user-roles-admin">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Genders</th>
                                <th>Date of birth</th>
                                <th>Last Seen</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allData as $key => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>
                                        <img src="{{ !empty($user->image) ? url('upload/images/' . $user->image) : url('upload/images/noimage.png') }}  "
                                            alt="...">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if ($user->gender_id === 1)
                                        <td class="">
                                            <i class="fa fa-mars text-primary"></i>
                                        </td>
                                    @elseif($user->gender_id === 2)
                                        <td class="">
                                            <i class="fa fa-mercury text-danger"></i>
                                        </td>
                                    @endif
                                    <td>{{ $user->dob }}</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $user->id))
                                            <i class=" online-icon ml-4 mr-1 fa fa-circle text-success" style="font-size:.7rem;"></i>
                                        @else
                                            <i class=" offline-icon ml-4 mr-1 fa fa-circle text-danger" style="font-size:.7rem;"></i>
                                        @endif
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
        <script type="text/javascript" src="{{ mix('js/users.js') }}"></script>
    @endpush
@stop
