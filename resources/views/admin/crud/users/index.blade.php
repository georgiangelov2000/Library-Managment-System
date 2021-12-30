@extends('admin.home')

@section('header-navigation')
    @parent
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <div class="row m-auto pt-2">
        @if (count($allData) == 0)
            <div class="alert alert-danger alert-dismissible col-md-10 m-auto">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                The table is empty please <a href="{{ route('user.create') }}" class="alert-link">
                    Create Data </a>
            </div>
        @else
            @include('components.success-box.successfullly-message')
            <div>
                <div class="card">
                    <div class="card-body table-responsive p-2">
                        <table class="table table-striped table-hover table-bordered dataTable" id="userTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Roles</th>
                                    <th>Genders</th>
                                    <th>Date of birth</th>
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
                                                class="img-thumbnail rounded mx-auto d-block" style="width:50px" alt="...">
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        @if ($value->role_id === 2)
                                            <td class="text-center">
                                                <i class="fas fa-user-lock"></i>
                                            </td>
                                        @elseif($value->role_id === 1)
                                            <td class="text-center">
                                                <i class="fas fa-user-tie"></i>
                                            </td>
                                        @endif
                                        @if ($value->gender_id === 1)
                                            <td class="text-center">
                                                <i style="font-size:2rem" class="fas fa-male text-primary"></i>
                                            </td>
                                        @elseif($value->gender_id === 2)
                                            <td class="text-center">
                                                <i style="font-size:2rem" class="fas fa-female text-danger"></i>
                                            </td>
                                        @endif
                                        <td>{{ $value->dob }}</td>
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
        @endif
    </div>

    @push('scripts')
        <script type="text/javascript" src="{{ mix('js/users.js') }}"></script>
        <script type="text/javascript" src="{{ mix('js/messages.js') }}"> </script>
    @endpush
@stop
